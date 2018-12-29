@extends('layouts.main')

@section('stylemin')


  div.about{
			 width:75%;
  }

@endsection

@section('stylemax')





@endsection

@section('index')
<div class="w3-main w3-content
 w3-padding" style="max-width:1200px;margin-top:70px">



       <div  style="float:left;"  class="about w3-container w3-card w3-white w3-round w3-margin"><br>
         <span class="w3-right w3-opacity">mo30.ir</span>
         <br>
         <hr class="w3-clear">
         <p>شما در این سایت می توانید
            برترین آهنگ ها از نگاه کاربران را مشاهده کنید و

           به آهنگ های مورد علاقه ی  خود
           نمره ی دلخواد را داده ، همچنین نظر خود
           را در مورد آهنگ ها بیان کنید
 <br><br>خواننده مورد نظر را انتخاب کنید

         </p>
       </div>

  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
<a href="best?singer_id=1">
      <img src="image/ebi.jpg" alt="Sandwich" style="width:70%">
      <h3>اِبی </h3>
</a >
      <p>ابراهیم حامدی که طر دارانش او را آقای صدا، ابی، سلطان صدا می نامند	</p>
    </div>
    <div class="w3-quarter">
      <a href="best?singer_id=2">
      <img src="image/hayedeh.jpg" alt="Steak" style="width:70%">
      <h3>هایده</h3>
    </a>
      <p>ماندگار ترین صدا در ایران ،
      خواننده ای که با صدایش همیشه در یاد ها می ماند</p>
    </div>
    <div class="w3-quarter">
      <a href="best?singer_id=3">
      <img src="image/dariush.jpg" alt="Cherries" style="width:70%">
      <h3>داریوش</h3>
    </a>
      <p>این خواننده خسته ، افسرده و معتاد بوده و الان ترک کرده</p>
      
    </div>
<!-- Sidebar/menu -->

  </div>
  </div>



@endsection
