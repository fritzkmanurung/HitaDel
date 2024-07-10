@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h2 class="btn btn-primary mb-3"
                    style=" text-align:center;
margin-top:10px; margin-bottom: 5vh; background-color: #1775F1; color: white; border-radius: 8px; font-size: 18px; padding: 12px 16px 12px 16px; font-weight: bold;">
                    {{ $title }}</h2>

                    <div class="card-body">
                        <form method="POST" action="{{ route('update-post', $post->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group" style="display: flex; align-items:center; margin: 0 0 20px 0;">
                                <label style="margin-right: 15vh;" for="title">{{ __('Title') }}</label>
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" value="{{ old('title', $post->title) }}" required autofocus>

                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group" style="display: flex; align-items:center; margin: 0 0 20px 0;">
                                <label style="margin-right: 7.8vh;" for="community">{{ __('Community') }}</label>
                                <select style="width: 100%; border-radius:5px; height: 35px; background: #F1F0F6;" id="community" class="form-control @error('community') is-invalid @enderror"
                                    name="community" required>
                                    <option value="Network Engineer" {{ old('community', $post->community) == 'Network Engineer' ? 'selected' : '' }}>Network Engineer</option>
                                    <option value="Database Administrator" {{ old('community', $post->community) == 'Database Administrator' ? 'selected' : '' }}>Database Administrator</option>
                                    <option value="Frontend" {{ old('community', $post->community) == 'Frontend' ? 'selected' : '' }}>Frontend</option>
                                    <option value="Data Analyst" {{ old('community', $post->community) == 'Data Analyst' ? 'selected' : '' }}>Data Analyst</option>
                                    <option value="Backend" {{ old('community', $post->community) == 'Backend' ? 'selected' : '' }}>Backend</option>
                                    <option value="Web Developer" {{ old('community', $post->community) == 'Web Developer' ? 'selected' : '' }}>Web Developer</option>
                                </select>

                                @error('community')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Add other fields as needed -->

                            <div class="form-group" style="display: flex; align-items:center; margin: 0 0 20px 0;">
                                <label style="margin-right: 8vh;" for="description">{{ __('Description') }}</label>
                                <textarea style="width: 100%; border-radius:5px; height: 50px; background: #F1F0F6; border:none; padding:15px;" id="description"
                                    class="form-control @error('description') is-invalid @enderror" name="description"
                                    required>{{ old('description', $post->description) }}</textarea>

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group" style="display: flex; align-items:center; margin: 0 0 20px 0;">
                                <label style="margin-right: 13.6vh;" for="photo">{{ __('Photo') }}</label>
                                <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror"
                                    name="photo">

                                @error('photo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group" style="display: flex; align-items:center; margin: 0 0 20px 0;">
                                <label style="margin-right: 13.6vh;" for="video">{{ __('Video') }}</label>
                                <input id="video" type="file" class="form-control @error('video') is-invalid @enderror"
                                    name="video">

                                @error('video')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <button style="background-color: #1775F1; color: white; border-radius: 14px; font-size: 14px; padding: 12px 16px 12px 16px; font-weight: bold;" type="submit" class="btn btn-primary">
                                {{ __('Update Post') }}
                            </button>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
