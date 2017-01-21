@extends('layout.main')

@section('content')


@if (count($items) === 0)

<h4> Sorry there were no items found. Please try searching again.</h4>

@elseif (count($items) >= 1)
	
	<h4>Results below : </h4>

	<hr>

    @foreach($items as $item)

    <h4>{{ $item->itemName}}  {{ $item->price * $item->quantity }}<p style="float:right"> {{ $item->quantity}} </h4>
<a href="{{route('items.show', $item->id) }}" class="btn btn-primary btn-sm">View Item</a>
<a href="{{route('items.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit Item</a>
<hr>

    @endforeach

@endif

@stop