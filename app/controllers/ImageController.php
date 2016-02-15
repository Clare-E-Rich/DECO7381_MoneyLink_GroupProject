<?php

class ImageController extends BaseController {

	public function postUpload(){
		$input = Input::all();
		$rules = array(
			'photo' => 'required|image|max:500'
			);
		$v = Validator::make($input, $rules);
		if($v->fails()){
			return Redirect::to('profile');
		}

		$extensions = File::extension($input['photo'],['name']);

		$directory = path('app').'foundation-5.4.0/img'.sha1(Auth::user()->id);
		$filename = sha1(Auth::user()->id).".{$extension}";

		$upload_success = Input::upload('photo', $directory, $filename);

		if ($upload_success){
			$photo = new Photo(array(
				'location' => URL::to('uploads/'.sha1(Auth::user()->id).'/'.$filename)
			));
			Auth::user()->photos()->insert($photo);
			Session::flash('status_success', 'successful yay');
		}else{
			Session::flash('status_error', 'failed NO!!!! upload failed');
		}
		return Redirect::to('profile');
	}
		public function postUploads() {
		$id = Auth::user()-> id;
		// $file = Input::file('image');
		// $input = array('image' => $file);
		// $rules = array(
		// 	'image' => 'image'
		// );
		// $validator = Validator::make($input, $rules);
		// if ( $validator->fails() )
		// {
		// 	return Response::json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()]);

		// }
		// else {
		if (Input::hasFile('image'))
		{	
			$file = Input::file('image');
			//$destinationPath = 'uploads/' .$id;
			//$destinationPath = public_path().'/img/'.$id;
			$destinationPath = app_path().'/foundation-5.4.0/profilePic/' .$id;
			$file->move($destinationPath, $id.'.JPEG');
			//Input::file('image')->move($destinationPath);
			// $ = 'uploads/';
			// $filename = $id;
			// Input::file('image')->move($destinationPath, $fileName);
			//Input::file('image')->move($destinationPath, $filename);
			//return Response::json(['success' => true, 'file' => asset($destinationPath.$filename)]);
			return Redirect::to('myprofile');
		} else {
			return 'no file';
		}

	}
}