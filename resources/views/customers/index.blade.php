@extends('layout')

@section('title','Customer List')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Customer List</h1>
        <p><a href="customers/create">Add New Customer</a></p>
    </div>
</div>


@foreach($customers as $customers)
<div class="row">
    <div class="col-2">{{ $customers->id }}</div>
    <div class="col-4"><a href="/customers/{{ $customers->id }}">{{ $customers->name }}</a></div>
    <div class="col-4">{{ $customers->company->name }}</div>
    <div class="col-2">{{ $customers->active }}</div>
</div>


    
@endforeach

@endsection