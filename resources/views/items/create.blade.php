@extends('layout.main')


@section('content')

<h1>Add to your shopping list.</h1>

<hr>

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
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