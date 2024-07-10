@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/contactus/contactus.css') }}">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2 class="btn btn-primary mb-3"
                style=" text-align:center;
margin-top:10px; margin-bottom: 5vh; background-color: #1775F1; color: white; border-radius: 8px; font-size: 18px; padding: 12px 16px 12px 16px; font-weight: bold;">
                {{ $title }}</h2>
                @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card-body">
                <form method="POST" action="{{ route('store-contactus') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group" style="display: flex; align-items:center; margin: 0 0 20px 0;">
                        <label style="margin-right: 15.1vh;" for="title">Title</label>
                        <input id="title" type="text" class="form-control" name="title" required>
                    </div>

                    <div class="form-group" style="display: flex; align-items:center; margin: 0 0 20px 0;">
                        <label style="margin-right: 8vh;" for="description">Description</label>
                        <textarea style="width: 100%; border-radius:5px; height: 50px; background: #F1F0F6; border:none; padding:15px;" id="description" class="form-control" name="description" rows="4" required></textarea>
                    </div>

                    <div class="form-group" style="display: flex; align-items:center; margin: 0 0 20px 0;">
                        <label style="margin-right: 13.6vh;" for="photo">Photo</label>
                        <input id="photo" type="file" class="form-control" name="photo" accept="image/*">
                    </div>

                    <div class="form-group" style="display: flex; align-items:center; margin: 0 0 20px 0;">
                        <label style="margin-right: 13.6vh;" for="video">Video</label>
                        <input id="video" type="file" class="form-control" name="video" accept="video/*">
                    </div>

                    <button style="background-color: #1775F1; color: white; border-radius: 14px; font-size: 14px; padding: 12px 16px 12px 16px; font-weight: bold;" type="submit" class="btn btn-primary">Send</button>
                </form>
                <br>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
