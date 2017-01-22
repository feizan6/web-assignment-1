@extends('layout.main')

@section('content')


@if (count($items) === 0)

<h4> Sorry there were no items found. Please try searching again.</h4>

@elseif (count($items) >= 1)

<h4>Results for your query below : </h4>

<table style="width:100%" class="table table-hover">
	<tr>

		<th>Item Name</th>
		<th>Base Price</th>
		<th>Quantity ordered</th> 
		<th>Price x Qty</th>

	</tr>


	@foreach($items as $item)

	<tr style="border-bottom: 1px solid #CECECE;">

		<td>{{ $item->itemName}}</td>
		<td>£{{ number_format((float)$item->price, 2, '.', '') }}</td>
		<td>{{ $item->quantity}}</td>
		<td>£{{ number_format((float)$item->price * $item->quantity, 2, '.', '') }}</td> 

		<td><a href="{{route('items.show', $item->id) }}" class="btn btn-primary btn-sm">View Item</a></td>
		<td><a href="{{route('items.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit Item</a></td>
		
		<td>{!! Form::open([
			'method' => 'DELETE',
			'route' => ['items.destroy', $item->id]
			]) !!}
			{!! Form::submit('Delete Item', ['class' => 'btn btn-danger btn-sm']) !!}
			{!! Form::close() !!}</td>
			
		</tr>
		

		@endforeach

	</table>

	@endif

	@stop