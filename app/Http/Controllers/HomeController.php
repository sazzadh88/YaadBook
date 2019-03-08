<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Auth;

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
        // return $request->all();
        if ($request->post_type =='album'){

           $data['title'] = $request->Post_title_p;
           $data['description'] = $request->Post_description_p;
           $data['is_private'] = $request->Publish_as;
           $data['is_draft'] = $request->Post_status_p;
           $data['post_type'] = $request->post_type;
           $data['user_id'] = Auth::id();
           $base64_images = $request->imgPath_p;
           $base64_images = explode ('$$',$base64_images);

           foreach ($base64_images as $image){

               $image = str_replace('data:image/png;base64,', '', $image);
               $image = str_replace(' ', '+', $image);
               $file_name = 'image_'.uniqid().mt_rand(10000,99999).time().'.png';
               $url = "user_uploads/".$file_name;
               \Storage::disk('public')->put($url,base64_decode($image));
               $response[] = $url;
           }

            return response()->json(['status' => 200,'message' => "Image has been added to Album"]);
        }elseif ($request->post_type =='text')
        {
            $data['title'] = $request->Post_title_p;
            $data['description'] = $request->Post_description_p;
            $data['is_private'] = $request->Publish_as;
            $data['post_type'] = $request->post_type;
            $data['is_draft'] = $request->Post_status_p;
            $data['user_id'] = Auth::id();
            Post::create($data);
            return response()->json(['message' => "Post has been added", 'status' => 200]);
        }elseif ($request->post_type =='image')
        {
            $data['post_type'] = $request->post_type;
            $base64_images = $request->image_paths_p;
            $base64_images = explode ('$$',$base64_images);
            foreach ($base64_images as $image){
                $image = str_replace('data:image/png;base64,', '', $image);
                $image = str_replace(' ', '+', $image);
                $file_name = 'image_'.uniqid().mt_rand(10000,99999).time().'.png';
                $url = "user_upload_images/".$file_name;
                \Storage::disk('public')->put($url,base64_decode($image));
                $response[] = $url;
            }
           $data['title'] = $request->Post_title_p;
           $data['description'] = $request->Post_description_p;
           $data['is_private'] = $request->Publish_as;
           $data['is_draft'] = $request->Post_status_p;
           $data['user_id'] = Auth::id();
           Post::create($data);
            return response()->json(['message' => "Image has been uploaded", 'status' => 200,'images' => $response]);
        }


    }


}
