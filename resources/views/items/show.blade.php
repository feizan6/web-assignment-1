@extends('layout.main')

@section('content')

<h1>Item : {{ $item->itemName }}</h1>
<p class="lead">Quantity : {{ $item->quantity }}</p>
<a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary">Edit Item</a>

@stop