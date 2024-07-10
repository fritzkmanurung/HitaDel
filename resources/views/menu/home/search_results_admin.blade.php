@extends('layouts.adminapp')

@section('content')
    <h2 class="btn btn-primary mb-3"
        style="text-align:center; margin-top:20px; margin-bottom: 5vh; background-color: #1775F1; color: white; border-radius: 8px; font-size: 18px; padding: 12px 16px 12px 16px; font-weight: bold;">{{ $title }}</h2>

    @foreach ($results as $result)
        @if ($result->name != 'Admin')
            <div class="card mb-3" style="margin-top: 20px; padding: 10px;">
                <div class="card-body"
                    style="width: 100%; background: white; border-radius: 10px; box-shadow: 4px 4px 16px rgba(0, 0, 0, .1); display:flex; align-items:center; padding: 10px;">

                    <a href="{{ route('user-profile', $result->id) }}" class="text-decoration-none"
                        style="display:flex; align-items:center;">
                        <div style="display: flex; align-items:center;">
                            @if ($result->profile_picture)
                                <img style="height: 60px; width:60px; border-radius: 50%; margin: 0 25px 0 0; padding: 3px; background: #0000;"
                                    src="{{ asset('storage/' . $result->profile_picture) }}" alt="Profile Picture"
                                    class="rounded-circle" style="width: 50px; height: 50px;">
                            @else
                                <!-- Gantilah dengan elemen visual atau ikon placeholder yang sesuai -->
                                <div style="height: 60px; width:60px; border-radius: 50%; margin: 0 25px 0 0; padding: 3px; background: #0000; display: flex; align-items: center; justify-content: center;">
                                    <i class='bx bx-user' style="font-size: 24px; color: #888;"></i>
                                </div>
                            @endif
                            <p style="color: black;" class="ml-3">{{ $result->name }}</p>
                        </div>
                    </a>
                    <br>
                </div>
            </div>
        @endif
    @endforeach
@endsection
