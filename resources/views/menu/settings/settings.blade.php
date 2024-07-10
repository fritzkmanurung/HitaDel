<!-- resources/views/settings/index.blade.php -->

@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-..."></link>
<link rel="stylesheet" href="{{ asset('css/settings/settings.css') }}">


<div class="container">
    <h2 class="btn btn-primary mb-3"
                        style=" text-align:center;
margin-top:10px; margin-bottom: 5vh; background-color: #1775F1; color: white; border-radius: 8px; font-size: 18px; padding: 12px 16px 12px 16px; font-weight: bold;">
                        {{ $title }}</h2>


    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <br>
    <br>
    <div class="card">
        <div style="font-weight: bold;" class="card-header">{{ __('Update Email') }}</div>
        <br>
        <div class="card-body">
            <form method="POST" action="{{ route('update-email') }}">
                @csrf

                <div class="form-group row">
                    <label style="margin-right: ; width: 50vh;" for="email" class="col-md-4 col-form-label text-md-right">{{ __('New Email Address') }}</label>
                    <input tyle="width:100%; border-radius:5px; background: #F1F0F6; border:none; padding:15px;" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
                </div>
                <br>
                <br>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button style="background-color: #1775F1; color: white; border-radius: 14px; font-size: 14px; padding: 12px 16px 12px 16px; font-weight: bold;" type="submit" class="btn btn-primary">
                            {{ __('Update Email') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <br>
    <br>
    <div class="card mt-4">
        <div style="font-weight: bold;" class="card-header">{{ __('Update Password') }}</div>
        <br>
        <div class="card-body">
            <form method="POST" action="{{ route('update-password') }}">
                @csrf

                <div style="display: flex; align-items:center" class="form-group row">
                    <label style="width: 50vh;" for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>
                    <div style="display: flex; width:100%; border-radius:5px; background: #F1F0F6; border:none;" class="input-group">
                        <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                        <div style="background: #F1F0F6; border:none;" class="input-group-append eye-toggle" id="togglePassword">
                            <i class="fa fa-eye"></i>
                        </div>
                    </div>
                </div>
                <br>
                <div style="display: flex; align-items:center" class="form-group row">
                    <label  style="width: 50vh;" for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm New Password') }}</label>
                    <div style="display: flex; width:100%; border-radius:5px; background: #F1F0F6; border:none;" class="input-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <div  style="background: #F1F0F6; border:none;" class="input-group-append eye-toggle" id="togglePasswordConfirm">
                            <i class="fa fa-eye"></i>
                        </div>
                    </div>
                </div>
                @error('password')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror

                <br>
                <br>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button style="background-color: #1775F1; color: white; border-radius: 14px; font-size: 14px; padding: 12px 16px 12px 16px; font-weight: bold;" type="submit" class="btn btn-primary">
                            {{ __('Update Password') }}
                        </button>
                    </div>
                </div>
            </form>
            <br>
        </div>
    </div>
</div>

<script src="{{ asset('js/settings/settings.js') }}"></script>
@endsection
