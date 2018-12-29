@extends('layouts.main')

@section('styl')

img.star{
	padding-left:3px;padding-top:3px;float:left;
}
@endsection

@section('stylemin')


div.music-rate{

border:solid yellow 4px;
padding:2px;
height:57px;
border-radius:5px;
}

  div.about{
			 width:75%;
  }

@endsection

@section('stylemax')


  div.music-rate{
		float:left;
		border:solid yellow 4px;
	  padding:2px;
	  margin-right:7px;
	  margin:3px;
	  height:60px;
	  border-radius:5px;

  }



@endsection

@section('index')

<br>
      <div  style="float:left;"  class="about w3-container w3-card w3-white w3-round w3-margin"><br>
        <span class="w3-right w3-opacity">  {{ Auth::user()->name }} </span>
        <br>
        <hr class="w3-clear">
        <p>در صفحه ی شخصی ، می توانید به آهنگ های مورد علاقه خود، رای بدهید</p>
        <p style=" font-size:18px;font-weight:bold;">خواننده ی مورد نظر را انتخاب کنید</p>

							@if(session('massage'))
							<div style="margin-left:auto;margin-right:auto;">
							{{session('massage')}}
							</div>
							@endif

      </div>


<div class="w3-main w3-content
 w3-padding" style="max-width:1200px;margin-top:70px">



	  <div class="w3-row-padding w3-padding-16 w3-center" id="food">

			<a href="{{route('ranking.myrate',['singer_id'=> 1])}}">

	    <div class="w3-quarter">
	      <img src="image/ebi.jpg" alt="Sandwich" style="width:70%">
	      <h3>اِبی </h3>
			</a>
	      <p>ابراهیم حامدی که طر دارانش او را آقای صدا، ابی، سلطان صدا می نامند	</p>
				</div>

	    <div class="w3-quarter">
				<a href="{{route('ranking.myrate',['singer_id'=> 2])}}">

			  <img src="image/hayedeh.jpg" alt="Steak" style="width:70%">
	      <h3>هایده</h3>
			</a>
			<p>ماندگار ترین صدا در ایران ،
			خواننده ای که با صدایش همیشه در یاد ها می ماند</p>
	    </div>
	    <div class="w3-quarter">
				<a href="{{route('ranking.myrate',['singer_id'=> 3])}}">

				<img src="image/dariush.jpg" alt="Cherries" style="width:70%">
				<h3>داریوش</h3>
			</a>
			<p>این خواننده خسته ، افسرده و معتاد بوده و الان ترک کرده</p>
		    </div>
	<!-- Sidebar/menu -->

	  </div>
  </div>




@endsection

@section('indexx')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dsalamrd</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
