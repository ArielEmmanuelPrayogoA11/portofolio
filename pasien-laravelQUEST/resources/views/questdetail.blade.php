@extends('layouts.main')

@include('partial.navbar')


@section('container')
   @foreach ($dataquest as $dq)
   <div class="card bg-dark alert alert-warning text-white">
    <div class="card-header">
        <h3>{{ $dq->namaq }}</h3>
        <small>Quest from : {{ $dq->client }}</small>
         <br>
        <small>Quest id : {{ $dq->id }}</small>
        <hr>
    </div>
    <div class="card-body">
        <p>Description : {{ $dq->deskripsi }}</p>
        <p>Reward : {{ $dq->reward }} gold</p>
    </div>
</div>
   @endforeach
@endsection