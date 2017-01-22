@extends('layout.main')

@section('content')

<h2>Item Name : {{ $item->itemName }}</h2>
<h4>Quantity ordered: {{ $item->quantity }}</h4>
<h4>Price (per item) : £{{ number_format((float)$item->price, 2, '.', '') }}</h4>
<hr>

<div class="row">
    <div class="col-md-6">
        <a href="{{ route('items.index') }}" class="btn btn-info">Back to items list</a>
        <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary">Amend Item / Quantity</a>
    </div>
    <div class="col-md-6 text-right">

        {!! Form::open([
        'method' => 'DELETE',
        'route' => ['items.destroy', $item->id]
        ]) !!}
        {!! Form::submit('Remove this item?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}

    </div>
</div>

@stop