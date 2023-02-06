@extends('layouts.app')
@section('title')
check out
@endsection
@section('content')
<div class="card">
    <div class="card-body mx-4">
        <div class="container">
            <p class="my-5 mx-5" style="font-size: 30px;">Thank for your purchase</p>
            <div class="row">
                <ul class="list-unstyled">
                    <li class="text-black">{{$inv->CostName}}</li>
                    <li class="text-muted mt-1"><span class="text-black">Invoice</span> {{$inv->id}}</li>
                    <li class="text-black mt-1">{{$inv->invDate}}</li>
                </ul>
                <hr>
                <div class="col-xl-10">
                    <p>Pro Name</p>
                </div>
                <div class="col-xl-2">
                    <p class="float-end">{{$inv->ProductName}}
                    </p>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-xl-10">
                    <p>price</p>
                </div>
                <div class="col-xl-2">
                    <p class="float-end">{{$inv->Price}}
                    </p>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-xl-10">
                    <p>Descount</p>
                </div>
                <div class="col-xl-2">
                    <p class="float-end">{{$inv->Descount}}
                    </p>
                </div>
                <hr style="border: 2px solid black;">
            </div>
            <div class="row text-black">

                <div class="col-xl-12">
                    <p class="float-end fw-bold">Total: {{$inv->Net}}
                    </p>
                </div>
                <hr style="border: 2px solid black;">
            </div>
            <form class="d-grid gap-3 p-6 g-4">
            <a href="{{  route('getPhonedata')  }}" class="btn btn-secondary">back</a>
            </form>

        </div>
    </div>
</div>
@endsection