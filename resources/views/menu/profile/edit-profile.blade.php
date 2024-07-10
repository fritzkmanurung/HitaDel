@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/profile/edit-profile.css') }}">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h2 class="btn btn-primary mb-3"
                        style=" text-align:center;
margin-top:10px; margin-bottom: 5vh; background-color: #1775F1; color: white; border-radius: 8px; font-size: 18px; padding: 12px 16px 12px 16px; font-weight: bold;">
                        {{ $title }}</h2>

                    <div class="card-body">
                        <form method="POST" action="{{ route('update-profile') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group" style="display: flex; align-items:center; margin: 0 0 20px 0;">
                                <label for="name" style="margin-right: 15vh;">Name</label>
                                <input id="name" type="text" class="form-control" name="name"
                                    value="{{ Auth::user()->name }}" required>
                            </div>
                            <div class="form-group" style="display: flex; align-items:center; margin: 0 0 20px 0;">
                                <label style="margin-right: 9.5vh;" for="profile_picture">Profile Picture</label>
                                <input id="profile_picture" type="file" class="form-control" name="profile_picture">
                            </div>

                            <div class="form-group" style="display: flex; align-items:center; margin: 0 0 20px 0;">
                                <label style="margin-right: 5vh;" for="background_picture">Background Picture</label>
                                <input id="background_picture" type="file" class="form-control"
                                    name="background_picture">
                            </div>

                            <div class="form-group" style="display: flex; align-items:center; margin: 0 0 20px 0;">
                                <label style="margin-right: 12vh;" for="birthdate">Birthdate</label>
                                <input id="birthdate" type="date" class="form-control" name="birthdate"
                                    value="{{ Auth::user()->birthdate }}" required>
                            </div>

                            <div class="form-group" style="display: flex; align-items:center; margin: 0 0 20px 0;">
                                <label style="margin-right: 13vh;" for="location">Location</label>
                                <input id="location" type="text" class="form-control" name="location"
                                    value="{{ Auth::user()->location }}" required>
                            </div>

                            <div class="form-group" style="display: flex; align-items:center; margin: 0 0 20px 0;">
                                <label style="margin-right: 10vh; " for="description">Description</label>
                                <textarea style="width:100%; border-radius:5px; background: #F1F0F6; border:none; padding:15px;" id="description" class="form-control" name="description" rows="4">{{ Auth::user()->description }}</textarea>
                            </div>

                            <button style="background-color: #1775F1; color: white; border-radius: 14px; font-size: 14px; padding: 12px 16px 12px 16px; font-weight: bold;" type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/profile/edit-profile.js') }}"></script>
@endsection
