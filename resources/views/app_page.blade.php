@extends('layouts.main')

@section('container')

    @foreach ($app_page as $apppost)
        <div class="card mb-2" style="width: 28rem; ">
            <div class="card-body">
            <h5 class="card-title">{{ $apppost->title }}</h5>
            <p class="card-text">{{ $apppost->deskripsi }}</p>
            <a href={{ $apppost->link }} class="btn btn-primary">Go</a>
            </div>
        </div>
    @endforeach
@endsection