<?php

namespace App\Http\Controllers;

use App\Models\WebsiteMenu;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{

    public $website;
    public function addwebsite(){
        return view('admin.website.add-website');
    }
    public function savewebsite(Request $request){
       $website                  = new WebsiteMenu();
       $website->title           = $request->title;
       $website->url              = $request->url;
       $website->route_name       = $request->route_name;
       $website->params           = $request->params;
       $website->parent_id       = $request->parent_id;
       $website->type            = $request->type;
       $website->status          = $request->status;
       $website->save();
       return back();
    }
    public function managewebsite(){
        return view('admin.website.manage-website',[
            'websites'=> WebsiteMenu::all()
        ]);
    }
    public function status($id){

    }
    public function deletewebsite(Request $request){
//        return $request;
        $this->website= WebsiteMenu::find($request->website_menus_id);
        $this->website->delete();
        return back()->with('message','Deleted');

    }
    public function editwebsite($id){
        return view('admin.website.edit-website',[
            'website'=> WebsiteMenu::find($id)
        ]);
    }
    public function updatewebsite(Request $request)
    {
        $website = WebsiteMenu::find($request->website_id);
    
        if (!$website) {
            return redirect('manage-website')->with('error', 'Website not found');
        }
    
        $website->title = $request->title ?? '';
        $website->url = $request->url;
        $website->route_name = $request->route_name;
        $website->params = $request->params;
        $website->parent_id = $request->parent_id;
        $website->type = $request->type;
        $website->status = $request->status;
        $website->save();
    
        return redirect('manage-website')->with('message', 'Updated successfully');
    }
    

}
