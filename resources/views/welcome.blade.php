@extends('layouts.app')
@section('title')
Home Page
@endsection
@section('content')
<h1 class="text-center p-5">Welcome to the home page</h1>
<table class="table">
    <thead>
        <tr>
            <th>Type</th>
            <th>Price</th>
            <th>Color</th>
        </tr>
    </thead>

    <tbody>
        @foreach($phone as $items)
        <tr>
            <td> <img
              src="https://img.freepik.com/free-vector/realistic-white-smartphone-design-with-three-cameras_23-2148374059.jpg?w=740&t=st=1674756955~exp=1674757555~hmac=29452a03ae7ea7034baeac285d66720d7729c95880de6ed07fca51d544fc5c86"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
              {{$items['Type']}}
            </td>
            <td>{{$items['Price']}}</td>
            <td>{{$items['Color']}}</td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection
