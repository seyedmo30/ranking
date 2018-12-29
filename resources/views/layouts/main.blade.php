<!DOCTYPE html>
<html><link rel="icon" href="image/icon.png" type="image/icon.png" >

<head>

<title>برترین های ابی</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link type="text/css" rel="stylesheet" href="main.css" />
<style>

@yield('styl')

@media screen and (max-width: 800px) {


.active {
    background-color: #4CAF50;
}


@yield('stylemax')


div.header{
display:none;

}

.navbar {
    overflow: hidden;
    background-color: #333;
	 position: -webkit-sticky; /* Safari */
    position: sticky;
	top:0;

}

.navbar a {

    float: right;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.subnav {
    float: right;
    overflow: hidden;

}


.active {
    background-color: #4CAF50;
}


.subnav .subnavbtn {
    font-size: 16px;
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
    background-color: #4CAF50;
}

.subnav-content {
    display: none;
    position:fixed;
    right: 0;
    background-color: #4CAF50;
    width: 100%;
    z-index: 6;
}

.subnav-content a {
    float: right;
    color: white;
    text-decoration: none;
}

.subnav-content a:hover {
    background-color: #eee;
    color: black;
}

.subnav:hover .subnav-content {
    display: block;
}




  div.sidehidden {
    display: none;
  }

  .head{
  display:none;
  }



    div.dropdown{
    display:none;
    }


}

@media screen and (min-width: 801px) {


  @yield('stylemin')

  	div.navbar{
  	display:none;
  	}


}


</style>
<script type='text/javascript' src='http://iponel.ir/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
</head>
<body>

<div class="header" style=" direction:ltr;padding:5px;" >
<img class="label" src="mo30.png" alt="mo30.ir" width="200" height=auto>


</div>


<ul class="head " >
<li class="head"><a class="active" href="/"><b>خانه</b></a></li>
<li class="head"><a href="javascript:void(0)">برترین ها</a></li>

@guest

<li style="float:left;" class="head"><a href="{{ route('login') }}">ورود/ثبت نام</a></li>
@else
<li style="float:left;" class="head"><a href="{{ route('login') }}">{{ Auth::user()->name }}</a></li>

<li style="float:left;" class="head"><a href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">خروج / Logout</a></li>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf
               </form>
  @endguest

</ul>
<div  style="z-index:2;" class="divside; sidehidden">
<ul class="side " style="margin-top:15px;margin-bottom:30px;">
  <?php $selected=Request::get('singer_id')?>
<li class="side {{$selected==true?'':'active'}}"><a  href="/home">ورود/ثبت نظرات</a></li>
@foreach(App\Singer::all() as $singer)
<li class="side {{$selected==$singer->id?'active':''}}"><a  href="{{route('ranking.best',['singer_id'=> $singer->id])}}">برترین های {{$singer->esm}}</a></li>

@endforeach

</ul>
</div>



<div class="navbar" style="width:100%;z-index:5;">
<a href="/">خانه</a>

<div class="subnav">
  <button class="subnavbtn">برترین ها <i class="fa fa-caret-down"></i></button>
  <div class="subnav-content">
    <a href="{{route('ranking.best',['singer_id'=> 1])}}">ابی</a>
    <a href="{{route('ranking.best',['singer_id'=> 2])}}">هایده</a>
   <a href="{{route('ranking.best',['singer_id'=> 3])}}">داریوش</a>
  </div>
</div>
@guest

 <a style="float:left;" href="{{ route('login') }}">ورود/ثبت نام</a>

@else
<div style="float:left" class="subnav">
<button  class="subnavbtn"> <i class="fa fa-caret-down">{{ Auth::user()->name }}</i></button>
<div class="subnav-content">
  <a style="float:left" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">خروج / Logout</a>
</div>
</div>  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
  </form>
@endguest

</div>


@yield('index')



<div style="clear:both;">

  </div>
  <div class="footer" style="width:100%;height:80px;background-color:green;float:left;">
	<a href="http://t.me/seyed_hosseini_14"><img src="image/telegram.png" alt="mo30.ir" style="padding-left:30px;padding-top:20px;float:left" width="70" height=auto>
  </a>
  <a href="https://www.instagram.com/seyedmo30"><img src="image/instagram.png" alt="mo30.ir" style="padding-left:30px;padding-top:20px;float:left" width="70" height=auto>
  </a>

<div class="dropdown" style="float:left">

  <img src="image/email.png" alt="mo30.ir" style="padding-left:20px;padding-top:15px;float:left" width="70" height=auto>
  <div class="dropdown-content">
  <div class="desc">seyed.mo30@gmail.com</div>
  </div>
</div>


<script>(function($){$(document).ready(function(){});})(jQuery);</script>
<link rel='stylesheet' id='mediaelement-css'  href='http://iponel.ir/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css?ver=4.2.6-78496d1' type='text/css' media='all' />
<script type='text/javascript' src='http://iponel.ir/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=4.2.6-78496d1'></script>
<script type='text/javascript' src='http://iponel.ir/wp-includes/js/mediaelement/mediaelement-migrate.min.js?ver=4.9.8'></script>
<script type='text/javascript' src='http://iponel.ir/wp-includes/js/mediaelement/wp-mediaelement.min.js?ver=4.9.8'></script>


</body>
</html>
