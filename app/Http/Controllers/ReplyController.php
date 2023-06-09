<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "app/Http/_ReplyController.php" was generated by ProBot AI.
* Date: 16/05/2023 12:48:50 PM
* Contact: towhid1@outlook.com
*/
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Reply;
use App\Models\User;
use App\Models\Comment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class ReplyController extends Controller{
	public function index(){
		$replys = Reply::paginate(10);
		return view("pages.erp.reply.index",["replys"=>$replys]);
	}
	public function create(){
		return view("pages.erp.reply.create",["users"=>User::all(),"comments"=>Comment::all()]);
	}
	public function store(Request $request){
		//Reply::create($request->all());
		$reply = new Reply;
		$reply->content=$request->content;
		$reply->user_id=$request->user_id;
		$reply->comment_id=$request->comment_id;
date_default_timezone_set("Asia/Dhaka");
		$reply->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$reply->updated_at=date('Y-m-d H:i:s');

		$reply->save();

		return back()->with('success', 'Created Successfully.');
	}
	public function show($id){
		$reply = Reply::find($id);
		return view("pages.erp.reply.show",["reply"=>$reply]);
	}
	public function edit(Reply $reply){
		return view("pages.erp.reply.edit",["reply"=>$reply,"users"=>User::all(),"comments"=>Comment::all()]);
	}
	public function update(Request $request,Reply $reply){
		//Reply::update($request->all());
		$reply = Reply::find($reply->id);
		$reply->content=$request->content;
		$reply->user_id=$request->user_id;
		$reply->comment_id=$request->comment_id;
date_default_timezone_set("Asia/Dhaka");
		$reply->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$reply->updated_at=date('Y-m-d H:i:s');

		$reply->save();

		return redirect()->route("replys.index")->with('success','Updated Successfully.');
	}
	public function destroy(Reply $reply){
		$reply->delete();
		return redirect()->route("replys.index")->with('success', 'Deleted Successfully.');
	}
}
?>
