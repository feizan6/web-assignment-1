@extends('layout.main')

@section('content')

<h1>Item : {{ $item->itemName }}</h1>
<p class="lead">Quantity : {{ $item->quantity }}</p>

<div class="row">
    <div class="col-md-6">
        <a href="{{ route('items.index') }}" class="btn btn-info">Back to items list</a>
        <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary">Amend Item</a>
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