<div class="mb-n3">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <livewire:post-create>

    @foreach($posts as $post)
        <livewire:post-single :post="$post" :key="$post->id">
    @endforeach

    {{ $posts->links('pagination::bootstrap-4') }}
</div>
