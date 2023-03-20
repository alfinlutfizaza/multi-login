@extends('layouts.main')

@section('container')

    @foreach ($appc_page as $appcpost)
        <div class="card mb-2" style="width: 28rem; ">
            <div class="card-body">
            <h5 class="card-title">{{ $appcpost->title }}</h5>
            <p class="card-text">{{ $appcpost->deskripsi }}</p>
            <a href={{ $appcpost->link }} class="btn btn-primary">Go</a>
            </div>
        </div>
    @endforeach
@endsection