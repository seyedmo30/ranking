@extends('layouts.main')

@section('stylemin')
.about{
width:75%;float:left;margin:20px;padding:10px;
}
@endsection


@section('stylemax')
.about{
width:90%;float:center;margin:10px;padding:10px;
}
@endsection


@section('index')

<div class="w3-card-2 w3-container about"  >
برای ورود در سایت ،ایمیل و رمز خود را وارد کنید
<br>
در صورتی که هنوز در سایت ثبت نام نکرده اید گزینه ی ثبت نام را بزنید
<br>
<br>
ثبت نام برای شما هیچ هزینه ای ندارد


</div>
<div style="margin-left:auto;margin-right:auto;width:100px"><a style="" href="/register">
<button   class="w3-button w3-section w3-green w3-ripple"> ثبت نام </button>
</div>
</a>
<div style="max-width:500px;margin-left:auto;margin-right:auto">
<form action="{{ route('login') }}" aria-label="{{ __('Login') }}" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-green w3-margin">
@csrf
<h2 class="w3-center">عضویت</h2>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input id="email" type="email" placeholder="ایمیل" class=" w3-input w3-border form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
      @if ($errors->has('email'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
      @endif

    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input id="password" type="password" class="w3-input w3-border form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required   placeholder="رمز">

      @if ($errors->has('password'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
      @endif
      <br>مرا به یاد داشته باش
      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

<div style="float:left">
      <a  href="{{ route('password.request') }}">
      رمز خود را فراموش کردم
      </a>
</div>
    </div>
</div>

@if(session('massage'))
<div style="margin-left:auto;margin-right:auto;">
{{session('massage')}}
</div>
@endif

<p class="w3-center">
<button style="margin-right:15px;"class="w3-button w3-section w3-green w3-ripple"> ورود </button>
</p>

</form>
</div>
<div style="clear:both">
<br>
</div>


@endsection
