@extends('layouts.adminapp')

@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-...">
    <link rel="stylesheet" href="{{ asset('css/profile/profile.css') }}">

    <div class="main" style="padding: 0px 15px 0 15px;">
        @if (session('success'))
        <div class="alert alert-success" role="alert" style="margin-bottom: 5vh; background-color:rgba(141, 255, 131, 0.605); border-radius:5px; width:100%; height:5vh; border:5px; padding: 10px 10px 10px 10px">
            {{ session('success') }}
        </div>
        @endif
        <div class="container" style="padding: 0 10px 0 10px;">
            <div class="row justify-content-center">
                <div class="card-body" style="text-align:center;">
                    <div class="cover-photo" style="padding: 70px 20px 20px 20px; display:flex; justify-content:center;">
                        <img style="max-height: 550px; border-radius:10px;" src="{{ asset('storage/' . $user->background_picture) }}" alt="Background Picture"
                            class="img-fluid">
                    </div>

                    <div class="profile-section text-center mt-4">
                        <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Picture"
                            class="rounded-circle profile-picture" style="border-radius: 50%; width: 200px; height: 200px; position:relative; top: -220px; padding:3px; background-color:white;">
                        <h2 style="position:relative; top: -180px" class="mt-3">{{ $user->name }}</h2>
                    </div>
                </div>
                <div class="user-details mt-4" style="position:relative; top: -70px;">
                    <p><strong style="margin-right: 12vh;">Birthdate</strong>: {{ $user->birthdate }}</p>
                    <br>
                    <p><strong style="margin-right: 13vh;">Location</strong>: {{ $user->location }}</p>
                    <br>
                    <p><strong style="margin-right: 10vh;">Description</strong>: {{ $user->description }}</p>
                </div>
                <hr>
                <div class="card-body" style="margin-top:5vh;">
                    <p class="btn btn-primary mb-3"
                        style=" text-align:center;
                        margin-top:20px; margin-bottom: 5vh; background-color: #1775F1; color: white; border-radius: 8px; font-size: 18px; padding: 12px 16px 12px 16px; font-weight: bold;">My
                        Post</p>

                    <!-- Display the list of posts -->

                    <!-- Display the list of posts -->
                    @forelse($userPosts->reverse() as $post)
                        <div class="card mb-4" style="margin-top: 5vh;">
                            <div class="card-body">

                                <!-- User information -->
                                <div class="user-info mt-2" style="margin-top: 20px; display:flex;">
                                    <a href="{{ route('user-profile', $post->user->id) }}">
                                        <img src="{{ asset('storage/' . $post->user->profile_picture) }}"
                                            alt="Profile Picture" class="rounded-circle"
                                            style="width: 50px; height: 50px; border-radius:50%; margin: 15px 20px 0 0; background: rgb(0, 0, 0);
                                        box-shadow: 4px 4px 16px rgba(0, 0, 0, .1); padding: 1px">
                                    </a>
                                    <div
                                        style="width: 100%; background: white;
                                    border-radius: 10px;
                                    box-shadow: 4px 4px 16px rgba(0, 0, 0, .1); padding: 20px 20px 0 20px;">
                                        <a href="{{ route('user-profile', $post->user->id) }}"
                                            style="display: flex; align-items:center; margin-bottom:20px;">
                                            <div style="width: 100%">
                                                <span style="color: black;" class="ml-2">{{ $post->user->name }}</span>
                                                <br>
                                                <small class="text-muted ml-2"
                                                    style="color: #8D8D8D;">{{ $post->created_at->diffForHumans() }}</small>
                                                <hr style="color: #8D8D8D">
                                            </div>
                                        </a>
                                        <!-- Post details -->

                                        <div class="head" style="padding: 5px;">
                                            <div>
                                                <h3 class="mt-3">{{ $post->title }}</h3>
                                                <br>
                                                <p>{{ $post->description }}</p>
                                                <br>
                                            </div>
                                            <div class="menu">
                                                <i class='bx bx-dots-horizontal-rounded icon'></i>
                                                <ul class="menu-link" style="">
                                                    <li>
                                                        @can('update', $post)
                                                        <a href="{{ route('edit-post', $post->id) }}" class="btn btn-warning btn-sm"><i
                                                                class="fas fa-edit"></i> Edit</a>
                                                        @endcan
                                                    </li>
                                                    <li>
                                                        @can('delete', $post)
                                                        <form method="POST" action="{{ route('delete-post', $post->id) }}"
                                                            class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button style="margin-left:17px; background:white; cursor:pointer;" type="submit" class="btn btn-danger btn-sm"><i
                                                                    class="fas fa-trash"></i>
                                                                Delete</button>
                                                        </form>
                                                        @endcan
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Display photo, video, etc. -->
                                        <div class="post-media-container">
                                            @if ($post->photo)
                                                <img src="{{ asset('storage/' . $post->photo) }}" alt="Post Photo"
                                                    class="img-fluid mb-2 post-media" style="max-height: 600px">
                                            @endif
                                            @if ($post->video)
                                                <video controls class="mb-2 post-media"
                                                    style="max-width: 100%; max-height: 600px">
                                                    <source src="{{ asset('storage/' . $post->video) }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            @endif
                                        </div>
                                        <br>

                                        <!-- Like button and count -->
                                        <p style="padding: 8px;">
                                            <span id="like-count-{{ $post->id }}"
                                                class="font-weight-bold">{{ $post->likes->count() }}
                                                Likes</span>

                                            | 1 Comment
                                        </p>
                                        <hr style="margin-bottom: 10px">
                                        <div style="display: flex; margin-bottom:10px;" >

                                            <form id="like-form-{{ $post->id }}"
                                                onsubmit="event.preventDefault(); toggleLike({{ $post->id }});">
                                                @csrf
                                                <button style="
                                                background: white;
                                                color: #8D8D8D;
                                                border-radius: 10px;
                                                font-weight: bold;
                                                font-size:14px;
                                                cursor: pointer;" 
                                                type="submit" class="btn  {{ $post->isLiked ? 'liked' : '' }}">
                                                <i class="fas fa-thumbs-up" style=""></i> Like
                                            </button>
                                            
                                            </form>
                                            <hr style="margin:0 10px 0 10px;">
                                            <a href="#comment-list" >
                                                <button
                                                style="
                                                background: white;
                                                color: #8D8D8D;
                                                border-radius: 10px;
                                                font-weight: bold;
                                                font-size:14px;
                                                cursor:pointer;"
                                                type="submit" class="btn"><i class="fas fa-comment"></i>
                                                Comment</button>
                                            </a>
                                        </div>

                                        <!-- Comment form -->



                                        <!-- Display comments -->
                                        <ul
                                        style="
                                        width: 100%; background: white;
                                    border-radius: 10px;
                                    box-shadow: 4px 4px 16px rgba(0, 0, 0, .1); padding: 20px 20px 20px 20px;
                                        "
                                        id="comment-list-{{ $post->id }}" class="list-unstyled mt-3">

                                        <form id="comment-form-{{ $post->id }}"
                                            onsubmit="event.preventDefault(); commentPost({{ $post->id }});" style="margin-bottom: 20px;">
                                            @csrf
                                            <div class="form-group">
                                                <input class="form-control" name="content" type="text" placeholder="Add a comment..." required>
                                                <button type="submit" class="btn-send"><i class='bx bxs-send' ></i></button>
                                            </div>
                                        </form>

                                            @forelse ($post->comments as $comment)


                                                    <!-- Delete comment button (visible to comment owner) -->

                                                    <div class="head" style="">
                                                        <div>
                                                            <li id="comment-{{ $post->id }}-{{ $comment->id }}" class="mb-2">
                                                                <strong style="">
                                                                    <a style="display: flex; align-items:center; color: black" href="{{ route('user-profile', $comment->user->id) }}">
                                                                        <img src="{{ asset('storage/' . $comment->user->profile_picture) }}"
                                                                            alt="Profile Picture" class="rounded-circle"
                                                                            style="width: 50px; height: 50px; border-radius:50%; background:black; padding: 1px; margin-right:10px;">
                                                                        {{ $comment->user->name }}
                                                                    </a>
                                                                </strong>
                                                                <p style="width: 100%; padding: 0 0 0 60px;">{{ $comment->content }}</p>
                                                        </div>
                                                        <div class="menu">
                                                            <i class='bx bx-dots-horizontal-rounded icon'></i>
                                                            <ul class="menu-link">
                                                                <li>
                                                                    @can('delete', $comment)
                                                                    <button style="margin-left:17px; background:white; cursor:pointer;"
                                                                        onclick="deleteComment({{ $comment->id }}, {{ $post->id }})"
                                                                        class="btn btn-sm btn-danger ml-2"><i class="fas fa-trash"></i>
                                                                        Delete
                                                                    </button>
                                                                    @endcan
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                            @empty
                                                <li>No comments yet.</li>
                                            @endforelse
                                        </ul>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    <br>
                    <br><br>
                        <p style="text-align:center;">No posts available</p> <br><br>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/home/home.js') }}"></script>

    <script>
        function toggleLike(postId) {
    fetch(`/like-post/${postId}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
        })
        .then(response => response.json())
        .then(data => {
            const likeCountElement = document.getElementById(`like-count-${postId}`);
            const likeButton = document.querySelector(`#like-form-${postId} button`);
            likeCountElement.textContent = `${data.likes} Likes`;

            // Toggle liked class for visual indication
            likeButton.classList.toggle('liked');
        })
        .catch(error => console.error('Error:', error));
}

function commentPost(postId) {
    const contentInput = document.querySelector(`#comment-form-${postId} input[name="content"]`);
    const content = contentInput.value;

    fetch(`/comment-post/${postId}`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
        },
        body: JSON.stringify({
            content
        }),
    })
    .then(response => response.json())
    .then(data => {
        const commentListElement = document.getElementById(`comment-list-${postId}`);
        const commentData = data.comment;

        // Dapatkan base URL dari asset storage
        const baseAssetUrl = '{{ asset("storage/") }}';

        const newComment = document.createElement('li');
        newComment.innerHTML = `<div class="head" style="">
                <div>
                    <li id="comment-${postId}-${commentData.id}" class="mb-2">
                        <strong style="">
                            <a style="display: flex; align-items:center; color: black"
                                href="{{ route('user-profile', '') }}/${commentData.user.id}">
                                <img src="${baseAssetUrl}/${commentData.user.profile_picture}"
                                    alt="Profile Picture" class="rounded-circle"
                                    style="width: 50px; height: 50px; border-radius:50%; background:black; padding: 1px; margin-right:10px;">
                                ${commentData.user.name}
                            </a>
                        </strong>
                        <p style="width: 100%; padding: 0 0 0 60px;">${content}</p>
                </div>
                <div class="menu">
                    <i class='bx bx-dots-horizontal-rounded icon'></i>
                    <ul class="menu-link">
                        <li>
                            ${commentData.canDelete ? 
                                `<button style="margin-left:17px; background:white; cursor:pointer;"
                                    onclick="deleteComment(${commentData.id}, ${postId})"
                                    class="btn btn-sm btn-danger ml-2"><i class="fas fa-trash"></i>
                                    Delete
                                </button>` : ''}
                        </li>
                    </ul>
                </div>
            </div>`;
        commentListElement.appendChild(newComment);

        contentInput.value = '';
    })
    .catch(error => console.error('Error:', error));
}
function deleteComment(commentId, postId) {
    const commentElement = document.getElementById(`comment-${postId}-${commentId}`);
    if (commentElement) {
        commentElement.remove();
    }

    fetch(`/delete-comment/${commentId}`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
        })
        .then(response => response.json())
        .then(data => {
            // Optional: Handle success response from the server if needed
        })
        .catch(error => console.error('Error:', error));
}
    </script>
@endsection
