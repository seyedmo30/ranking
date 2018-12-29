<?php

namespace App\Http\Controllers;
use DB;
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
      $singerpro = \DB::select('CALL `singerpro`('.\Auth::user()->id.');');
      $salam=count($singerpro);
        $first=null;
        return view('/home',compact('first'));
}

    public function myrate(Request $request)
    {

      $musics= DB::select('select rate.music_id as music_id,rate.rate  ,musics.name as musics ,singer.id as singer_id, musics.mp3
      from rate,musics,singer where rate.music_id=musics.id and  rate.member_id='.\Auth::user()->id.'
      and musics.singer_id='.$request->singer_id.' and  singer.id=musics.singer_id and rate.music_id=musics.id order by rate desc ');
      $singers=\App\Singer::all()->where('id',$request->singer_id);

      $no_rate=DB::select('select musics.id , musics.name, musics.mp3,musics.rate_avg, musics.singer_id  from musics where musics.name not in
(select musics.name  from rate,musics where rate.music_id=musics.id and
 rate.member_id='.\Auth::user()->id.' and musics.singer_id='.$request->singer_id.') and musics.singer_id='.$request->singer_id.' order by musics.rate_avg desc');
            return view('ranking.myrate',compact('musics','singers','no_rate'));


    }


        public function replace(Request $request)
        {

    $a=1;
          while ($a <= 100) {
            if($request[$a]!=null){
              $check=DB::insert("REPLACE  INTO `rate` (`id`, `member_id`, `music_id`, `rate`)
               VALUES (NULL, ".\Auth::user()->id.", ".$a.", ".$request[$a]."); ");

            }
            $a=$a+1;
          }
            $singerpro = \DB::select('CALL `singerpro`('.\Auth::user()->id.');');
              return view('home',compact('singerpro'))->with('massage','با موفقیت ثبت شد');

}


      public function tamrin(){

        return \Auth::user()->name;
      }
}
