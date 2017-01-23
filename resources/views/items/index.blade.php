@extends('layout.main')

@section('content')


<h1>Your Shopping List</h1>

<p class="lead">All your items so far...<a href="{{ route('items.create')}}">Add another item?</a>


	<table style="width:100%" class="table table-hover">
		<tr>

			<th>No.</th>
			<th>Item Name</th>
			<th>Base Price</th>
			<th>Quantity</th> 
			<th>Price x Qty</th>

		</tr>

		<?php $counter = 1; ?> 

		@foreach($items as $item)



		<tr style="border-bottom: 1px solid #CECECE;">

			<td>{{ $counter }}</td>
			<td>{{ $item->itemName}}</td>
			<td>£{{ number_format((float)$item->price, 2, '.', '') }}</td>
			<td>{{ $item->quantity}}</td>
			<td>£{{ number_format((float)$item->price * $item->quantity, 2, '.', '') }}</td> 

			<td width="5%"><a href="{{route('items.show', $item->id) }}" class="btn btn-primary btn-sm"><span title = "view this item" class="glyphicon glyphicon-eye-open"></span></a></td>

			<td width="5%"><a href="{{route('items.edit', $item->id) }}"  class="btn btn-primary btn-sm"><span title = "amend this item" class="glyphicon glyphicon-edit"></span></a></td>
			
			<td width="5%">
			{!! Form::open([
			'method' => 'DELETE',
			'route' => ['items.destroy', $item->id]
			]) !!}

			{{ Form::button('<span title="remove this item " class="glyphicon glyphicon-remove"></span>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm'])}}
			{!! Form::close() !!}</td>

			<?php $counter++; ?>
			
		</tr>
		

		@endforeach

	</table>

	<h4>Total : £<?php use App\Http\Controllers\ItemsController;
		echo ItemsController::total(); ?></h4>


		@stop