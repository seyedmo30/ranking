@extends('layouts.main')

@section('styl')

img.star{
	padding-left:3px;padding-top:3px;float:left;
}


@endsection

@section('stylemin')

div.music-name{

	min-width:225px;
		max-width:225px;
}


div.bio,div.all-music,div.index{
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

div.music-name{
float:right;
margin:10px;
margin-left:40px;
font-size:22px;
font-weight:bold;
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

	div.music-name{

		min-width:150px;
			max-width:150px;
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


@endsection



@section('index')
<div  class="all-music" style="overflow:hidden;clear:both;padding:7px;margin:10px;direction:ltr;background-color:#eeeeee;float:left;">
<div class="music">
<div class="music-name">
name
</div>
<div class="music-rate" style="overflow:hidden;width:150px;text-align: center;">
<span style="font-size:33px;">18</span>&nbsp
<img class="star" src="image/star.png" alt="rate" width="45" height=auto>

</div>

<div class="audio" preload="none" style="margin-top:9px; whidth:30%;" >
<audio controls  class="wp-audio-shortcode">
  <source src="music/1/delbar.mp3" type="audio/mpeg">
</audio>
</div>
<div class="music-comment">
نظرات
</div>
</div>

</div>
<br>

	<div class="index" style="float:left;direction:rtl;background-color:gray;margin-left:10px">
<br>
<div class="comments" style="margin:8px;">
سید مصطفی حسینی<hr>
این آهنگ عالیه
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</div>

@endsection
