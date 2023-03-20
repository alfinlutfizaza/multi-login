@extends('layouts.main')

@section('container')

    @foreach ($appb_page as $appbpost)
        <div class="card mb-2" style="width: 28rem; ">
            <div class="card-body">
            <h5 class="card-title">{{ $appbpost->title }}</h5>
            <p class="card-text">{{ $appbpost->deskripsi }}</p>
            <a href={{ $appbpost->link }} class="btn btn-primary">Go</a>
            </div>
        </div>
    @endforeach
@endsection