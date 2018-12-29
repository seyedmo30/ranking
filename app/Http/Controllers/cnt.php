<?php

namespace App\Http\Controllers;

use validator;
use auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Music;
use App\Singer;
use DB;
use App\Member;
class cnt extends Controller
{

  public function best(Request $request){

    if($singer_id= ($request->get('singer_id'))){
       $musics= DB::select('select * from musics where singer_id='.$singer_id.' order by rate_avg desc');;
       $singers=Singer::all()->where('id',$singer_id);
    }
    else{
      $musics= Music::all();
    }

  return view('ranking.best',compact('singers','musics'));

  }


  public function comments(Request $request){


  return view('ranking.comments');

  }


    public function replace(Request $request)
    {
$a=1;
      while ($a <= 100) {
        if(isset($request[$a])){
          if(!$request[$a])break      ;
          $check=DB::insert("REPLACE  INTO `rate` (`id`, `member_id`, `music_id`, `rate`)
           VALUES (NULL, '6', ".$a.", ".$request[$a]."); ");

        }
        $a=$a+1;
      }

}
}
