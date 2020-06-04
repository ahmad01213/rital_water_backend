<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Users extends Controller
{
    public function index()
    {
        $rows = User::all();
        return view('back-end.users.index', compact('rows'));
    }

    public function create()
    {
        return view('back-end.users.create');
    }

    public function store(Request $request)
    {
        $requestArray = $request->all();
        $requestArray['password'] = Hash::make($requestArray['password']);
        User::create($requestArray);
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $rows = User::FindOrFail($id);
        return view('back-end.users.edite', compact('rows'));
    }

    public function update(Request $request, $id)
    {
        $row = User::FindOrFail($id);
        $requestArray = $request->all();
        if (isset($requestArray['password']) && $requestArray['password'] != "") {
            $requestArray['password'] = Hash::make($requestArray['password']);
        } else {
            unset($requestArray['password']);
        }
        $row->update($requestArray);
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        User::FindOrFail($id)->delete();
        return redirect()->route('users.index');
    }

    public function notifusers(Request $request)
    {
        $user = User::findOrFail($request->id);
        $client = new Client();
        $result = $client->request('POST', "https://fcm.googleapis.com/fcm/send", [
            'headers' => [
                'Authorization' => "key=AAAAiB9yOzI:APA91bFapNzv7JzkSf5u50BSLdjYJIEjITjLdUyeK_-0RulsZp37y9aIJklbYxAzi_XFOnbxBd3ZsHK19l_jJAByHxJrIQVGxOElYAlus-KhTqsGElXIsbNU-dkjNTot72UU-Pcf8qyS",
                'Content-Type' => 'application/json'
            ],
            'json' => ["to" => $user->device_token,
                'notification' => [
                    "title" => $request->title,
                    "body" => $request->message,
                    "sound" => "default"
                ]
            ]]);
        $requestArray['title']=$request->title;
        $requestArray['body']=$request->message;
        $requestArray['user_id']=$user->id;
        Notification::create($requestArray);
        return redirect()->back()->with('message', ' تم إرسال الرسالة بنجاح');
    }
}
