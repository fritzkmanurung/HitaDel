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
    const contentInput = document.querySelector(`#comment-form-${postId} textarea[name="content"]`);
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
            const newComment = document.createElement('li');
            newComment.innerHTML = `<strong>
                    <a href="{{ route('user-profile', Auth::id()) }}">
                        <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile Picture" class="rounded-circle" style="width: 20px; height: 20px;">
                        {{ Auth::user()->name }}
                    </a>
                </strong>: ${content}`;
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