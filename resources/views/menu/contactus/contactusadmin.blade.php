@extends('layouts.adminapp')

@section('content')
<style>
    .post-media-container {
    background-color: black;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    border-radius: 10px;
}

.post-media {
    max-width: 100%;
    max-height: 100%;
    display: block;
    margin: auto;
}

.btn {
    border: none;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="btn btn-primary mb-3"
                style=" text-align:center;
                margin-top:10px; margin-bottom: 5vh; background-color: #1775F1; color: white; border-radius: 8px; font-size: 18px; padding: 12px 16px 12px 16px; font-weight: bold;">
                {{ $title }}</h2>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @foreach($contactUsData as $index => $contact)
                <div style="width: 100%;" class="card mb-4" style="margin-top: 5vh;">
                    <div class="card-body" style="display:flex">
                        <div style="margin: 30px 10px 0 0; background: rgb(0, 0, 0); width: 40px; height: 40px; border-radius:50%; box-shadow: 4px 4px 16px rgba(0, 0, 0, .1); padding:2px; display:flex; justify-content:center; align-items:center;">
                            <p style="font-weight: bold; background: rgb(255, 255, 255); width:100%; height:100%; border-radius:50%; display:flex; justify-content:center; align-items:center; color:rgb(255, 0, 0);">
                                {{ $index + 1 }}
                            </p>
                        </div>
                        <!-- User information -->
                        <div class="user-info mt-2" style="margin-top: 20px; display:flex; margin-left:20px; width:100%">
                            <div style="width: 100%; background: white;
                            border-radius: 10px;
                            box-shadow: 4px 4px 16px rgba(0, 0, 0, .1); padding: 20px 20px 0 20px;">
                                <div class="head" style="padding: 5px;">
                                    <div>
                                        <h3 class="mt-3">{{ $contact->title }}</h3>
                                        <br>
                                        <p>{{ $contact->description }}</p> <!-- perbaikan tag pembuka -->
                                        <br>
                                    </div>
                                </div>
                                <!-- Display photo, video, etc. -->
                                <div class="post-media-container">
                                    @if($contact->photo)
                                        <img src="{{ asset('storage/' . $contact->photo) }}" alt="Photo"
                                            class="img-fluid mb-2 post-media" style="max-height: 600px">
                                    @endif
                                    @if($contact->video)
                                        <video controls class="mb-2 post-media"
                                            style="max-width: 100%; max-height: 600px">
                                            <source src="{{ asset('storage/' . $contact->video) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    @endif
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <br>
        </div>
    </div>
</div>
@endsection
