<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class homecontroller extends Controller
{
    //
    public function index()
    {
        $nopaginate =  DB::table('posts');
        $length =$nopaginate->count();

        return view('home')->with('length',$length);
    }

    public function donate()
    {
        return view('donate');
    }
    
    public function search()
    {
        if (isset($_GET['classe']) == false & isset($_GET['region']) == false) {
            $table =  DB::table('posts')->orderByDesc('created_at')->paginate(8);
            $nopaginate =  DB::table('posts');
            $length =$nopaginate->count();

            return view('search')->with('table', $table)->with('length', $length);
        } else if (isset($_GET['classe']) == true & isset($_GET['region']) == false) {
            $table =  DB::table('posts')->orderByDesc('created_at')->where('year', $_GET['classe'])->paginate(8);
           
            $nopaginate =  DB::table('posts')->where('year', $_GET['classe']);
            $length = $nopaginate->count();

            return view('search')->with('table', $table)->with('length', $length);
        } else if (isset($_GET['region']) == true & isset($_GET['classe']) == false) {
           $nopaginate =   DB::table('posts')->where('gouver', $_GET['region']);
$length = $nopaginate->count();
            $table =  DB::table('posts')->orderByDesc('created_at')->where('gouver', $_GET['region'])->paginate(8);
            return view('search')->with('table', $table)->with('length', $length);
        } else {
            $table =  DB::table('posts')->orderByDesc('created_at')->where('year', $_GET['classe'])->where('gouver', $_GET['region'])->paginate(5);
            $nopaginate =  DB::table('posts')->where('year', $_GET['classe'])->where('gouver', $_GET['region']);
            $length = $nopaginate->count();
            return view('search')->with('table', $table)->with('length', $length);
        }
    }

    public function donating(Request $request)
    {
        $name = $request->input('Name');
        $year = $request->input('classe');
        $gouver = $request->input('region');
        $id = $request->input('id');
        $publicid = $request->input('publicid');

        $url = $request->input('ProfileUrl');
        $nbbooks = $request->input('nbbooks');
        $ldate = date('Y-m-d H:i:s');

        DB::table('posts')->insert(
            array(
                'fbid'     =>   $id,
                'publicid'     =>   $publicid,
                'name'   =>    $name,
                'nbbooks'   =>   $nbbooks,
                'year'   =>    $year,
                'gouver'   =>   $gouver,
                'profileurl'   =>   $url,
                'created_at' => $ldate
            )
        );

 return view('thank');
    }



public function account(){

return view('login');

}

public function myaccount(Request $request){

    $name = $request->input('Name');
    $id = $request->input('id');

    $table =  DB::table('posts')->orderByDesc('created_at')->where('fbid', $id)->paginate(5);

    return view('mydonations')->with('name',$name)->with('id',$id)->with('table',$table);

    
    }
    
public function delete(Request $request){
$postid = $request->input('postid');
$fbid = $request->input('fbid');
DB::table('posts')->where('postid',$postid)->where('fbid',$fbid)->delete();


$name = $request->input('name');

$table =  DB::table('posts')->orderByDesc('created_at')->where('fbid', $fbid)->paginate(5);

return view('mydonations')->with('name',$name)->with('id',$fbid)->with('table',$table);


}

public function requestPage($fbid) {
    $posts = Post::find($fbid);
    return view('request')->with('posts',$posts);
}
public function SendRequest(Request $request, $id) {
}

}
