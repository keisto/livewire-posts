<div class="media mb-3">
    <img src="{{ $post->user->avatar() }}" alt="{{ $post->user->name }} Avatar" class="mr-3 rounded w-25 shadow-sm">

    <div class="media-body">
        <h2 class="mt-0 h5"><strong>{{ $post->user->name }}</strong></h2>
        {{ $post->body }}
    </div>
</div>
