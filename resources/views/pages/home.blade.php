@extends('layout.main')

@section('content')


<h1>Shopping List Manager - Laravel App</h1>
<p class="lead">Please click one of the below links to get started!</p>

<hr>

<a href="{{ route('items.index') }}" class="btn btn-info">View shopping list</a>

<a href="{{ route('items.create') }}" class="btn btn-primary">Add new item</a>

@stop