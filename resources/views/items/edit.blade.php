@extends('layout.main')


@section('content')

<h1>Amend Item Details</h1>

<p class="lead">Update the details for the current shopping list item. <a href="{{route('items.index') }}">Go back to your shopping list.</a></p>
<hr>


{!! Form::model($item, [
    'method' => 'PATCH',
    'route' => ['items.update', $item->id]
]) !!}

<div class="form-group">
    {!! Form::label('itemName', 'Item Name:', ['class' => 'control-label']) !!}
    {!! Form::text('itemName', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('quantity', 'Quantity:', ['class' => 'control-label']) !!}
    {!! Form::text('quantity', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Amend Item', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop


