<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "app/Http/_CommentController.php" was generated by ProBot AI.
* Date: 16/05/2023 12:47:18 PM
* Contact: towhid1@outlook.com
*/
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\User;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class CommentController extends Controller{
	public function index(){
		$comments = Comment::paginate(10);
		return view("pages.erp.comment.index",["comments"=>$comments]);
	}
	public function create(){
		return view("pages.erp.comment.create",["users"=>User::all(),"posts"=>Post::all()]);
	}
	public function store(Request $request){
		//Comment::create($request->all());
		$comment = new Comment;
		$comment->content=$request->content;
		$comment->user_id=$request->user_id;
		$comment->post_id=$request->post_id;
date_default_timezone_set("Asia/Dhaka");
		$comment->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$comment->updated_at=date('Y-m-d H:i:s');

		$comment->save();

		return back()->with('success', 'Created Successfully.');
	}
	public function show($id){
		$comment = Comment::find($id);
		return view("pages.erp.comment.show",["comment"=>$comment]);
	}
	public function edit(Comment $comment){
		return view("pages.erp.comment.edit",["comment"=>$comment,"users"=>User::all(),"posts"=>Post::all()]);
	}
	public function update(Request $request,Comment $comment){
		//Comment::update($request->all());
		$comment = Comment::find($comment->id);
		$comment->content=$request->content;
		$comment->user_id=$request->user_id;
		$comment->post_id=$request->post_id;
date_default_timezone_set("Asia/Dhaka");
		$comment->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$comment->updated_at=date('Y-m-d H:i:s');

		$comment->save();

		return redirect()->route("comments.index")->with('success','Updated Successfully.');
	}
	public function destroy(Comment $comment){
		$comment->delete();
		return redirect()->route("comments.index")->with('success', 'Deleted Successfully.');
	}
}
?>
