@extends('layouts.app')
@section('title')
check out
@endsection
@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8 order-md-1">
            <a href="{{  route('getPhonedata')  }}" class="btn btn-secondary">back</a>
            <h4 class="text-center mb-3">checkout address</h4>
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
            </h4>
            <ul class="list-group mb-3 sticky-top">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Product name</h6>
                        <small class="text-muted"> <img height="60" width="60" src="{{$ph->Image}}">
                            {{$ph->Name}}</small>
                    </div>
                    <span class="text-muted"></span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">product price</h6>
                    </div>
                    <span class="text-muted">{{$ph->Price}} Rs</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Quntity</h6>
                    </div>
                    <span class="text-muted">1</span>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                        <h6 class="my-0">Vat</h6>
                        <small>15%</small>
                    </div>
                    <span class="text-success">{{$ph->Price*0.15}} Rs</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (Rs)</span>
                    <strong>{{$ph->Price+$ph->Price*0.15}} Rs</strong>
                </li>
            </ul>
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your Information</span>
            </h4>
            <form  class="card p-3" method="POST" action="{{ route('getinvoic') }}">
                @csrf
                <div class="row mb-4">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3">First name</label>
                        <input type="text" id="form3Example1" name="Fname" class="form-control" />
                    </div>
                    <input type="hidden" id="PName" name="PName" value="{{$ph->Name}}">
                    <input type="hidden" id="price" name="price" value="{{$ph->Price}}">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3">Email address</label>
                        <input type="email" id="form3Example3" name="email" class="form-control" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example4">address information</label>
                        <input type="text" id="form3Example4" name="address" class="form-control" />
                    </div>
                </div>
                <form class="d-grid gap-3 p-6 g-4">
                    <button type="submit" class="btn btn-secondary btn-block mb-4">Order now</button>
                </form>
            </form>
        </div>
    </div>
</div>
@endsection