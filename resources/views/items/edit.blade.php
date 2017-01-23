@extends('layout.main')


@section('content')

<h1>Amend Item Details</h1>

<p class="lead">Update the details for the current shopping list item. <a href="{{route('items.index') }}">Go back to your shopping list.</a></p>
<hr>

@include('partials.alerts.errors')

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

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

<div class="form-group">
    {!! Form::label('price', 'Price:', ['class' => 'control-label']) !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
    
</div>


{!! Form::submit('Amend Item', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop


