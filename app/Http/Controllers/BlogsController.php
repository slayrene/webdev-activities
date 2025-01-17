<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\MyBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BlogsController extends Controller
{
    
    public function index(){
        /*
        Log::info("========== INDEX START");
        dd("sample");

        Log::debug("debug");
        Log::info("info");
        Log::notice("notice");
        Log::warning("warning");
        Log::error("error");
        Log::critical("critical");
        Log::alert("alert");
        Log::emergency("emergency");
        */
        
        // TAKE HOME ACTIVITY -- ACTIVITY 1 FINALS 

        // Storing the datas in a variable
        $resultsDB = DB::table('blogs')->select('title', 'description', 'status')->get();

        // Creating an array variable and distributing the values
        $blogs = [];
        foreach ($resultsDB as $result) {
            $blogs[] = [
                'title' => $result->title,
                'description' => $result->description,
                'status' => $result->status,
            ];
        }

        // Log::info("========== INDEX END");
        return view('common.blogs', compact ('blogs'));
    }

    public function getBlogsData(){
        // $result = DB::table('blogs')->get();
        // $result = DB::table('blogs')->find(1);
        // $result = DB::table('blogs')->pluck('title');
        $result = DB::table('blogs')
        // ->where('title', 'Title #1') ->orWhere('', '')
        ->where('status', '!=1', 1)
        ->get();
        return $result;
    }

    public function insertData(){

        $result = DB::table('blogs')->insert([
            'title' => 'sample',
            'description' => 'HAHAsamplewawawa',
            'status' => 1
        ]);

        return $result;
    }

    public function updateBlogs() {

        DB::table('blogs')->where('id', 7)->update([
            'description' => 'SAmple'
        ]);

    }

    public function deleteBlogs() {

        DB::table('blogs')->where('id', 13)->delete();

    }

    public function retrieveBlogsPerCat () {

        $blogs = DB::table('blogs as a')
                    ->join('category as b', 'b.id', '=', 'a.category_id')
                    ->select('a.title', 'a.description', 'a.status', 'b.name')
                    ->get();

        return view('common.blogs', compact('blogs'));

    }

    public function getBlogsModel () {

        //$result = MyBlog::all();
        // $result = Blog::find(7);
        // return $result->title;
        // $result = Blog::findOrFail(50);
        $result = Blog::where('status', '1')->get();
        return $result;
    }

    public function insertUsingModel(){

        $blog = new Blog();
        $blog ->title = 'Sample';
        $blog ->description = 'Sample';
        $blog ->status = 0;
        $blog ->category_id= 1;

        $blog->save();

    }

    public function modelSamples($id, $title)
    {

        // SELECT * FROM blogs;
        // $blogs = Blog::all();

        // SELECT * FROM blogs WHERE id = 60;

        // $blog::Blog::findOrFail($id);
        // $title = "Title: ". $blog->title . " Description: ". $blog->description

        // $blog = Blog::where('status', '1')->get();

        // return $blog;
        
        // $blog = Blog::where('status', '!=', '1')
        //             -> where('category_id', '2')
        //             ->get();

        // $post = new Blog();
        // $post->title = "Blog1";
        // $post->description = "Description Blog1";
        // $post->status = 0;
        // $post->category_id = 3;
        // $post->author_id = 1;

        // $post->save();

        // $post = Blog::find($id);
        // $post->title = $title;

        // $post->save();

        // $post = Blog::insert([
        //     [
        //         'title' => 'Sample123',
        //         'description' => 'SampleDescription',
        //         'status' => 0,
        //         'category_id' => 2,
        //         'author_id' => 1
        //     ],
        //     [
        //         'title' => 'Sample123',
        //         'description' => 'SampleDescription',
        //         'status' => 0,
        //         'category_id' => 2,
        //         'author_id' => 1
        //     ],
        //     [
        //         'title' => 'Sample123',
        //         'description' => 'SampleDescription',
        //         'status' => 0,
        //         'category_id' => 2,
        //         'author_id' => 1
        //     ],
        // ]);

        // $post = Blog::where('status', '!=', 1)
        //             ->where('category_id', 2)
        //             ->update([
        //                 'status' => '1'
        //             ]);

        // $post = Blog::find(38)->delete();

        // // All data not deleted
        // $post = Blog::all();

        // aLL DATA REGARDLESS IF DELETED
        // $post = Blog::withTrashed()->get();

        // // aLL DATA REGARDLESS IF DELETED
        // $post = Blog::onlyTrashed()->get();

        // $post = Blog::withTrashed()->find(170)->restore();
        // $post = Blog::withTrashed()->find(170)->forceDelete();

        // return $post;

    }
    
    public function viewBlogs() {
        return view('common.blogsPage');
    }
    
}
