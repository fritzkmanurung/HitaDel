<!-- resources/views/community/index.blade.php -->

@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/community/community.css') }}">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">{{ __('Community') }}</div>

                    <div class="card-body">
                        <h2 class="mb-4">Choose Your Community</h2>

                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('network_engineer') }}" class="btn btn-outline-primary btn-lg btn-block mb-3">Network Engineer</a>
                                <a href="{{ route('database_administrator') }}" class="btn btn-outline-primary btn-lg btn-block mb-3">Database Administrator</a>
                                <a href="{{ route('frontend') }}" class="btn btn-outline-primary btn-lg btn-block mb-3">Frontend</a>
                            </div>

                            <div class="col-md-6">
                                <a href="{{ route('data_analyst') }}" class="btn btn-outline-primary btn-lg btn-block mb-3">Data Analyst</a>
                                <a href="{{ route('backend') }}" class="btn btn-outline-primary btn-lg btn-block mb-3">Backend</a>
                                <a href="{{ route('web_developer') }}" class="btn btn-outline-primary btn-lg btn-block mb-3">Web Developer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/community/community.js') }}"></script>
@endsection
