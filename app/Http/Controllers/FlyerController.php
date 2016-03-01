<?php namespace App\Http\Controllers;

use App\Flyer;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

//use Illuminate\Http\Request;

class FlyerController extends Controller {

	function __construct(){
///		dd(1);
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('flyers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\FlyerRequest $request)
	{
		//
	/*	Flyer::create($request->all());*/
$flyer=new Flyer();
		$flyer->city=$request->city;
		$flyer->street=$request->street;
		$flyer->state=$request->state;
		$flyer->country=$request->country;
		$flyer->zip=$request->zip;
		$flyer->save();
		$_SESSION['status']='true';
		$show = photo::all();

		return view('flyers.upload')->with('show',$show);
	}

	public function uploadImage(){

	}
	public function uploadImageTest(Request $request){
		$file = $request->file('file');
		$name = time() . $file->getClientOriginalName();
		$file->move('flyer_photos',$name);
		$path='flyer_photos/'.$name;
		$th='flyer_photos/th'.$name;
		Image::make($path)->fit('200')->save($th);
		$flyer = Flyer::find(17);
		$flyer->photo()->create(['image'=>"{$name}"]);

	}
	/*public function uploadImageTest(){
return "hiiiiii";
		//return true;
	}*/

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($zip,$state)
	{
		return Flyer::where(compact('zip','state'))->first();
	}
	public function deleteimage($id){
		$image= photo::find($id);
		$file='flyer_photos/'.$image['image'];
		$thumb='flyer_photos/th'.$image['image'];
		$image->delete();
		File::delete([
			$file,$thumb
		]);
		$show = photo::all();
		return view('flyers.upload')->with('show',$show);
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
