@extends('layouts.main')

@section('styl')

img.star{
	padding-left:3px;padding-top:3px;float:left;
}


@endsection

@section('stylemin')


.fooot {
   position:sticky;
   clear:both;
   float:left;
   left: 25px;
   top: 85%;
   border:solid 1px white;
   width: 100px;
   background-color: gray;
   color: black;
   font-weight:bold;
   border-radius:5px;

   text-align: center;
   z-index:6;
}


div.bio,div.all-music{
     width:78%;
}

div.audio{
    float:right;
    display:block;
    margin-right:20px;
}


div.music-rate{
float:right;
border:solid yellow 4px;
padding:2px;
height:57px;
border-radius:5px;
}


div.music{
height:75px;
margin:5px;
margin-bottom:20px;
direction:rtl;
border:3px ridge gray;
border-radius:10px;
padding-right:4px;
padding-top:8px;

}



	  .fot{
	  display:none;
	}


div.music-name{
float:right;
font-size:22px;
font-weight:bold;
		min-width:235px;
			max-width:235px;
}

div.music-comment{
  float:left;
  margin:10px;
  margin-left:40px;		font-size:18px;
}

div.bio-text{
padding:20px;margin:5px;direction:rtl;
}

img.bio{
padding:5px;float:left;
}

@endsection


@section('stylemax')



.fot {
   position:sticky;
   float:left;
   left: 25px;
   top: 85%;
   border:solid 1px white;
   width: 100px;
   background-color: gray;
   color: black;
   font-weight:bold;
   border-radius:5px;
   text-align: center;
   z-index:6;
}



	div.bio , div.all-music{
		width:92%;
	}

  img.bio{
	display:block;
    margin-left: auto;
    margin-right: auto;
	padding:2px;
  }

  div.bio-text{
	direction:rtl;
	margin-top:5px;
  }


	div.music{
		height:135px;
		margin:2px;
		margin-bottom:20px;
		direction:rtl;
		border:3px ridge gray;
		border-radius:10px;
		padding-right:4px;
		padding-top:4px;

	}

  div.music-name{
  float:right;
  font-weight:bold;
  font-size:18px;

		min-width:150px;
			max-width:150px;
  }




  div.music-rate{
		float:left;
		border:solid yellow 4px;
	  padding:2px;
	  margin-right:7px;
	  margin:3px;
	  height:60px;
	  border-radius:5px;

  }
  div.music-comment{
  display:none;
  }


	.fooot
	{
		display:none;
	}
@endsection



@section('index')

@foreach($singers as $singers)
<div class="bio" style="padding:20px;margin:10px;direction:ltr;background-color:#eeeeee;float:left;">
<img  class="bio"  src="image/{{$singers->name}}.jpg" width="200" height="auto">

<div class="bio-text">{{$singers->bio}}

</div>
</div>

@endforeach
<br>

<form action="replace" type="post" >
@csrf


<div class="fot">
	<button >
  ثبت
</button>
</div>


<div class="fooot">
	<button >
  ثبت
</button>

</div>



<div  class="all-music" style="overflow:hidden;clear:both;padding:7px;margin:10px;direction:ltr;background-color:#eeeeee;float:left;">


	@if(session('massage'))
	<div style="margin-left:auto;margin-right:auto;">
	{{session('massage')}}
	</div>
	@endif


@foreach($musics as $musics)

	<div class="music">
	<div class="music-name">
	1 &nbsp
 {{$musics->musics}}
	</div>
	<div class="music-rate">
	<span style="font-size:33px;color:gol"><input type="number" min="0" max="20" size="1" maxlength="2" value="{{$musics->rate}}" style="width:70px;height:40px;" name="{{$musics->music_id}}"></span>&nbsp
	<img class="star" src="image/star.png" alt="rate" width="45" height=auto>

	</div>
	<div class="audio">
	<audio controls>
	  <source src="music/{{$musics->singer_id}}/{{$musics->mp3}}.mp3" type="audio/mpeg">
	</audio>
	</div>
	<div class="music-comment">
	نظرات
	</div>
	</div>

@endforeach


@foreach($no_rate as $no_rate)

	<div class="music">
	<div class="music-name">
	1 &nbsp
 {{$no_rate->name}}
	</div>
	<div class="music-rate">
	<span style="font-size:33px;color:gol"><input type="number" min="0" max="20" size="1" maxlength="2" value="" style="width:70px;height:40px;" name="{{$no_rate->id}}"></span>&nbsp
	<img class="star" src="image/star.png" alt="rate" width="45" height=auto>

	</div>
	<div class="audio">
	<audio controls>
	  <source src="music/{{$no_rate->singer_id}}/{{$no_rate->mp3}}.mp3" type="audio/mpeg">
	</audio>
	</div>
	<div class="music-comment">
	نظرات
	</div>
	</div>

@endforeach


<form>
</div>

@endsection
