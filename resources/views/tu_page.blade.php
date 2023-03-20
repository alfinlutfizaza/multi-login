@extends('layouts.main')

@section('container')

  @foreach ($tu_page as $tupost)
    <div class="card" style="width: 28rem; ">
            <div class="card-body">
            <h5 class="card-title">{{ $tupost->title }}</h5>
            <p class="card-text">{{ $tupost->deskripsi }}</p>
            <a href= {{ $tupost->link }} class="btn btn-primary">Go</a>
          </div>
        </div>
  @endforeach
@endsection