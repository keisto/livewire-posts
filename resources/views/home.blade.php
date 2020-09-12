@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="card-header h4">Posts</h1>

                <div class="card-body">
                    <livewire:post-index>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
