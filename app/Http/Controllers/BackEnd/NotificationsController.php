<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotificationsController extends Controller
{
    public function index(){
        $rows = Notification::all();
        return view('back-end.notifications.index',compact('rows'));
    }
    public function store(Request $request)
    {
        $client = new Client();
        $result = $client->request('POST',"https://fcm.googleapis.com/fcm/send",[
            'headers' => [
                'Authorization' => "key=AAAAiB9yOzI:APA91bFapNzv7JzkSf5u50BSLdjYJIEjITjLdUyeK_-0RulsZp37y9aIJklbYxAzi_XFOnbxBd3ZsHK19l_jJAByHxJrIQVGxOElYAlus-KhTqsGElXIsbNU-dkjNTot72UU-Pcf8qyS",
                'Content-Type'     => 'application/json'
            ],
            'json'=>[ "to" => "/topics/rital_users",
                'notification' => [
                    "title"=> $request->title,
                    "body"=> $request->message,
                    "sound"=> "default"
                ]
            ]]);
        $requestArray['title']=$request->title;
        $requestArray['body']=$request->message;
        $requestArray['user_id']=auth()->id();
        Notification::create($requestArray);
        return redirect()->route('notifications.index')->with('message', ' تم إرسال الرسالة بنجاح');

    }
    public function create(){
        return view('back-end.notifications.create');
    }

    public function destroy($id)
    {
        Notification::FindOrFail($id)->delete();
        return redirect()->route('notifications.index');
    }
    public function usernotifications(){
        $user_id = auth()->user()->id;
        $user_role = auth()->user()->role;
        $sql = "SELECT* FROM notifications WHERE user_id = '$user_id' OR '$user_role' = 'admin' ";
        $rows = DB::select($sql);
        return response()->json($rows);
    }
}
