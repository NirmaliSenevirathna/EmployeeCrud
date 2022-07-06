
@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">Show Product</div>
    <div class="card-body">

        <div class="card-body">
        <h5 class="card-title">Name : {{$employee->name}}</h5>

        <h5 class="card-title">Price : {{$employee->price}}</h5>
        <h5 class="card-title">Status : {{$employee->status}}</h5>
        </div>
    </div>

</div>
