@extends('layouts.main')

@section('stylemin')

div.bio,div.all-music{
     width:78%;
}


.fot{
display:none;
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

@section('index')
<div class="bio" style="padding:20px;margin:10px;direction:ltr;background-color:#eeeeee;float:left;">
<img  class="bio"  src="image/ebi.jpg" width="200" height="auto">
<div class="bio-text">
ابراهیم حامدی معروف به ابی متولد ۲۹ خرداد ۱۳۲۸ در تهران، خواننده است
دیپلمه ریاضی است، وی بیشتر با نام آقای صدا در ایران شناخته می شود، قبل از انقلاب کارمند فرهنگ و هنر بود، ۴ خواهر و یک برادر داشت که مدت ها پبش برادرش فوت کرد، پدر خیاط و مادرش خانه دار بود
نخستین ترانه مستقل خود را با نام عطش برای فیلمی به همین عنوان ساخته می‌ شود عرضه می کند، دومین ترانه وی چرا چرا نام دارد، اما سومین ترانه ابی که به گفته خودش باعث معروفیت وی می‌ شود ترانه‌ ای است به نام شب با شعر اردلان سرفراز و آهنگ منصور ایران‌ نژاد که برای اولین بار در شوی معروف میخک نقره‌ ای از فریدون فرخزاد پخش می‌ شود

</div>
</div>

<br>


<form action="" type="post" >

<div class="fot">
  ثبت
</div>

<div class="fooot">
  ثبت
</div>



<div  class="all-music" style="overflow:hidden;clear:both;padding:7px;margin:10px;direction:ltr;background-color:#eeeeee;float:left;">

<div class="music">
<div class="music-name">
1 &nbsp
شانه هایت
</div>
<div class="music-rate">
<span style="font-size:33px;color:gol"><input type="number" style="width:70px;height:40px;" name="rate_shanehayat"></span>&nbsp
<img class="star" src="image/star.png" alt="rate" width="45" height=auto>

</div>
<div class="audio">
<audio controls>
  <source src="music/ebi/gol.mp3" type="audio/mpeg">
</audio>
</div>
<div class="music-comment">
نظرات
</div>
</div>




<div class="music">
<div class="music-name">
1 &nbsp&nbsp
شانه هایت
</div>
<div class="music-rate">
<span style="font-size:33px;color:gol">18.42</span>&nbsp
<img class="star" src="image/star.png" alt="rate" width="45" height=auto>

</div>
<div class="audio">
<audio controls>
  <source src="music/ebi/gol.mp3" type="audio/mpeg">
</audio>
</div>
<div class="music-comment">
نظرات
</div>

</div>

<div class="music">
salam

</div>
</div>

@endsection
