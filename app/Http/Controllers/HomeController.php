<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home');
    }

    public function addPost(Request $request)
    {
//        return $request->all();
//        $data['title'] = $request->Post_title_p;
//        $data['description'] = $request->Post_description_p;
//        $data['is_private'] = $request->Publish_as;
//        $data['is_draft'] = $request->Post_status_p;
//        $data['user_id'] = Auth::id();
//        Post::create($data);
//        return response()->json(['message' => "Post has been added", 'code' => 200]);
        $base64_images = $request->imgPath_p;
        $base64_images = explode ('$$',$base64_images);
        foreach ($base64_images as $image){

            $image = base64_decode($image);

            $safeName = str_random(10).'.'.'png';
            \Storage::disk('public')->put('user_uploadddddd/'.$safeName, $image);
        }

    }


}
