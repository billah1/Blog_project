<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public $site,$image,$imageName,$directory,$imgUrl;
    public function addsite(){
        return view('admin.site.add-site');
    }
    public function savesite(Request $request){
        $this->site= new Setting();
        $this->site->name               = $request->name;
        $this->site->logo              =  $this->saveImage($request);
        $this->site->email              = $request->email;
        $this->site->phone              = $request->phone;
        $this->site->sort_bio           = $request->sort_bio ;
        $this->site->favicon           = $this->savefavicon($request);
        $this->site->save();
        return back()->with('message','setting added successfully');
    }
    public function saveImage($request){
        $this->image=$request->file('logo');
        $this->imageName=rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory='adminAsset/setting-image/';
        $this->imgUrl=$this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imgUrl;
    }

    public function savefavicon($request){
        $this->image=$request->file('favicon');
        $this->imageName=rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory='adminAsset/setting-favicon/';
        $this->imgUrl=$this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imgUrl;
    }
    public function managesite(){
        return view('admin.site.manage-site',[
            'sites'=> Setting::all()
        ]);
    }
    public function status($id){
        $this->site= Setting::find($id);
        if($this->site->status==1){
            $this->site->status=0;
            $this->site->save();
            return back();
        }else{
            $this->site->status=1;
            $this->site->save();
            return back();
        }
    }
    public function deletesite(Request $request){
        $this->site=Setting::find($request->author_id);
        $this->site->delete();
        return back()->with('message','Delete successfully');
    }
    public function editsite($id){
        return view('admin.site.edit-site',[
            'site'=>Setting::find($id)
        ]);
    }
    public function updatesite(Request $request){
        $this->site= Setting::find($request->site_id);

        $this->site->name               = $request->name;
        $this->site->logo              =  $this->saveImage($request);
        $this->site->email              = $request->email;
        $this->site->phone              = $request->phone;
        $this->site->sort_bio           = $request->sort_bio ;
        $this->site->favicon           = $this->savefavicon($request);
        $this->site->save();
        return redirect('manage-site')->with('message','Setting Update successfully');
    }
}
