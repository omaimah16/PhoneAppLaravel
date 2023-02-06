@extends('layouts.app')
@section('title')
Phone Product Page
@endsection
@section('content')
<h1 class="text-center p-5">Phone Product page</h1>
<div class="row g-3 p-3">
    @foreach($ph as $items)
    <div class="col-md-3">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" height="200" width="150" src="{{$items->Image}}" alt="Card image cap">
            <div class="text-center">
            <div class="card-body">
                <h5 class="card-title">Nmae: {{$items->Name}}</h5>
                <p class="card-text">QTY: {{$items->QTY}}</p>
                <p class="card-text">Praice: {{$items->Price}} Rs</p>
                <a href="{{  route('getPhonedataid',['id'=>$items->id])  }}" class="btn btn-secondary btn-block mb-4">add to cart</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection