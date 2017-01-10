@extends('layout.main')

@section('content')

<h1>Your Shopping List</h1>
<p class="lead">All your items so far...<a href="{{ route('items.create')}}">Add another item?</a>

<hr>

<h3>Items to purchase <span style="float:right">Quantity</span></h3>

<hr>

@foreach($items as $item)


<h4>{{ $item->itemName}} <p style="float:right"> {{ $item->quantity}} </h4>

<hr>

@endforeach


@stop