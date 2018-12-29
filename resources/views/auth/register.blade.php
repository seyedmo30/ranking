@extends('layouts.main')

@section('stylemin')
.signup{
width:75%;float:left;margin:20px;padding:10px;clear:both;
}
@endsection


@section('stylemax')
.signup{
width:90%;float:center;margin:10px;padding:10px;
}
@endsection


@section('index')

<div class="w3-card-2 w3-container signup"  >
</div>
<br><br>
<div style="max-width:500px;margin-left:auto;margin-right:auto">
  <form method="POST" class="w3-container w3-card-4 w3-light-grey w3-text-green w3-margin" action="{{ route('register') }} " aria-label="{{ __('Register') }}">
      @csrf
<h2 class="w3-center">عضویت</h2>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input id="name" type="text" placeholder="نام" class="w3-input w3-border form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

      @if ($errors->has('name'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('name') }}</strong>
          </span>
      @endif
  </div>
</div>


<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input id="email" type="email" placeholder="ایمیل" class="w3-input w3-border form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
      <input id="password" placeholder=" رمز" type="password" class="w3-input w3-border form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

      @if ($errors->has('password'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
      @endif

  </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border form-control"  id="password-confirm"  name="password_confirmation" required type="password" placeholder="تکرار رمز">
    </div>
</div>
@if(session('massage'))
<div style="margin-left:auto;margin-right:auto;">
{{session('massage')}}
</div>
@endif
<div >

</div>
<p class="w3-center">
<button class="w3-button w3-section w3-green w3-ripple"> ثبت </button>
</p>

</form>


</div>
<div style="clear:both">
<br>
</div>


@endsection
