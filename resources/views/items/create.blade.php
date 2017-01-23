@extends('layout.main')


@section('content')

<h1>Add a new item.</h1>
<h4>Or alternatively <a href="{{route('items.index') }}">go back to your shopping list.</a></h4>

<hr>

@include('partials.alerts.errors')


@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif


{!! Form::open([
    'route' => 'items.store'
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
    {!! Form::label('price', 'Price (per item) :', ['class' => 'control-label']) !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>


{!! Form::submit('Add a new item', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}


@stop