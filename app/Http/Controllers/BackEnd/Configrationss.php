<?php
namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Configrationss extends Controller
{
    public function create(){
        return view('back-end.slider.create');
    }
    public function store(Request $request){
        $requestArray = $request->all();
        if($request->hasFile('image')){
            $fileName = $this->fileUpload($request);
            DB::select("INSERT INto SLIDER (IMAGE) VALUES('$fileName')");
        }
        return redirect()->route('sliders.index');
    }

    public function edit($id){

        $rows =DB::select("SELECT * FROM SLIDER WHERE ID = '$id'")[0];
        return view('back-end.slider.edite',compact('rows'));
    }
    public function update(Request $request,$id){
        if($request->hasFile('image')){
            $fileName = $this->fileUpload($request);
            DB::select("UPDATE SLIDER SET IMAGE = '$fileName' WHERE ID = '$id'");
        }
        return redirect()->route('sliders.index');
    }
    public function destroy($id)
    {
        DB::select("DELETE FROM SLIDER WHERE ID = '$id'");
        return redirect()->route('sliders.index');
    }
    public function editSettings(){
        $about =DB::select('SELECT * FROM PAGES WHERE TYPE = "about"');
        $pointsPerRial =DB::select('SELECT * FROM PAGES WHERE TYPE = "points_per_rial"');
        return view('back-end.settings.edit',compact('about','pointsPerRial'));
    }

    public function updateSettings(Request $request){
        $abouttext = $request->abouttext;
        $pointstext = $request->pointstext;
        DB::update("UPDATE pages SET TEXT = '$abouttext' WHERE type = 'about'");
        DB::update("UPDATE pages SET TEXT = '$pointstext' WHERE type = 'points_per_rial'");
        return redirect()->back()->with('message', ' تم حفظ التعديلات  بنجاح');
    }
    public function index(){
        $rows = DB::select('SELECT * FROM SLIDER');
        return view('back-end.slider.index',compact('rows'));
    }

    public function fileUpload(Request $request) {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.'png';
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            // $this->save();
            return url('images/'.$name);
        }
    }

}
