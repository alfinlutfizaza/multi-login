@extends('layouts.main')

@section('container')

    @foreach ($auditor_page as $auditorpost)
        <div class="card mb-2" style="width: 28rem; ">
            <div class="card-body">
            <h5 class="card-title">{{ $auditorpost->title }}</h5>
            <p class="card-text">{{ $auditorpost->deskripsi }}</p>
            <a href={{ $auditorpost->link }} class="btn btn-primary">Go</a>
            </div>
        </div>
    @endforeach
@endsection