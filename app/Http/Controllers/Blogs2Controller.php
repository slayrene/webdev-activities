<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class Blogs2Controller extends Controller
{
    public function data(){
        // $blogs = Blog::with('category')->get();
        // return $blogs;

        // $categories = Category::find(2)->blog;
        // $categories = Category::with('blog')->get();
        $categories = Category::with('blog')->find(2);
        return $categories;
    }

    public function blogCreate(Request $request){

        // dd($request);
        $result = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'category_id' => $request->input('category'),
            'author_id' => 1
        ];
            $response = Blog::create($result);

            $data = "";
                if($response){
                    $data = Blog::with('category')->find($response->id);
                }
            return $data;
            // return redirect()->back();
    }
}
