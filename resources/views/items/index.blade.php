@extends('layout.main')

@section('content')

{!! Form::open(array('route' => 'items.searchresults', 'class'=>'form navbar-form navbar-right searchform')) !!}
    {!! Form::text('search', null,
                           array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Search for a tutorial...')) !!}
     {!! Form::submit('Search',
                                array('class'=>'btn btn-default')) !!}
 {!! Form::close() !!}

<h1>Your Shopping List</h1>

<p class="lead">All your items so far...<a href="{{ route('items.create')}}">Add another item?</a>
<hr>

<h3>Items to purchase <span style="float:right">Quantity</span></h3>
<hr>

@foreach($items as $item)

<h4>{{ $item->itemName}} -  {{ $item->price * $item->quantity }}<p style="float:right"> {{ $item->quantity}} </h4>
<a href="{{route('items.show', $item->id) }}" class="btn btn-primary btn-sm">View Item</a>
<a href="{{route('items.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit Item</a>
<hr>

@endforeach

<h3>Price : £<?php use App\Http\Controllers\ItemsController;
echo ItemsController::total(); ?></h3>


@stop