<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "app/Http/_PostController.php" was generated by ProBot AI.
* Date: 16/05/2023 12:43:50 PM
* Contact: towhid1@outlook.com
*/
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class PostController extends Controller{
	public function index(){
		$posts = Post::paginate(10);
		return view("pages.erp.post.index",["posts"=>$posts]);
	}
	public function create(){
		return view("pages.erp.post.create",[]);
	}
	public function store(Request $request){
		//Post::create($request->all());
		$post = new Post;
		$post->title=$request->title;
		$post->content=$request->content;
date_default_timezone_set("Asia/Dhaka");
		$post->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$post->updated_at=date('Y-m-d H:i:s');

		$post->save();

		return back()->with('success', 'Created Successfully.');
	}
	public function show($id){
		$post = Post::find($id);
		return view("pages.erp.post.show",["post"=>$post]);
	}
	public function edit(Post $post){
		return view("pages.erp.post.edit",["post"=>$post,]);
	}
	public function update(Request $request,Post $post){
		//Post::update($request->all());
		$post = Post::find($post->id);
		$post->title=$request->title;
		$post->content=$request->content;
date_default_timezone_set("Asia/Dhaka");
		$post->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$post->updated_at=date('Y-m-d H:i:s');

		$post->save();

		return redirect()->route("posts.index")->with('success','Updated Successfully.');
	}
	public function destroy(Post $post){
		$post->delete();
		return redirect()->route("posts.index")->with('success', 'Deleted Successfully.');
	}
}
?>
