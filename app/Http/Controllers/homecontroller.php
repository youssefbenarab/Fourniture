<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            $table =  DB::table('posts')->paginate(8);
            $nopaginate =  DB::table('posts');
            $length =$nopaginate->count();

            return view('search')->with('table', $table)->with('length', $length);
        } else if (isset($_GET['classe']) == true & isset($_GET['region']) == false) {
            $table =  DB::table('posts')->where('year', $_GET['classe'])->paginate(8);
           
            $nopaginate =  DB::table('posts')->where('year', $_GET['classe']);
            $length = $nopaginate->count();

            return view('search')->with('table', $table)->with('length', $length);
        } else if (isset($_GET['region']) == true & isset($_GET['classe']) == false) {
           $nopaginate =   DB::table('posts')->where('gouver', $_GET['region']);
$length = $nopaginate->count();
            $table =  DB::table('posts')->where('gouver', $_GET['region'])->paginate(8);
            return view('search')->with('table', $table)->with('length', $length);
        } else {
            $table =  DB::table('posts')->where('year', $_GET['classe'])->where('gouver', $_GET['region'])->paginate(5);
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
        $url = $request->input('ProfileUrl');
        $nbbooks = $request->input('nbbooks');

        DB::table('posts')->insert(
            array(
                'fbid'     =>   $id,
                'name'   =>    $name,
                'nbbooks'   =>   $nbbooks,
                'year'   =>    $year,
                'gouver'   =>   $gouver,
                'profileurl'   =>   $url
            )
        );

 return view('thank');
    }
}
