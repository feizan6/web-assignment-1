@extends('layout.main')

@section('content')

<h1>Your Shopping List</h1>

<p class="lead">All your items so far...<a href="{{ route('items.create')}}">Add another item?</a>
<hr>

<h3>Items to purchase <span style="float:right">Quantity</span></h3>
<hr>

@foreach($items as $item)

<h4>{{ $item->itemName}} <p style="float:right"> {{ $item->quantity}} </h4>
<a href="{{route('items.show', $item->id) }}" class="btn btn-primary btn-sm">View Item</a>
<a href="{{route('items.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit Item</a>
<hr>

@endforeach

<h4>Total no. of items in the basket : {{ $item->sum('quantity') }}</h4>


@stop