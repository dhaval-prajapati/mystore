<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\category;
use Illuminate\Http\Request;

class Category_Menu extends Controller {

	//
		public function makeMenu(){

			$data=category::where('parent_id','0')->get()->toArray();

			return view('header')->with("data",$data)->with('sub_menu',null);
		}

	public function subMenu($id){

		$data=category::where('parent_id','0')->get()->toArray();

		$sub_menu=category::where('parent_id',$id)->get()->toArray();


		return view('header')->with("sub_menu",$sub_menu)->with('data',$data);

	}
}
