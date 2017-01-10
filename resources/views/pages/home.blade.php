@extends('layout.main')

@section('content')


<h1>Main Page - Shopping List Helper</h1>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

<hr>

<a href="{{ route('items.index') }}" class="btn btn-info">View shopping list</a>

<a href="{{ route('items.create') }}" class="btn btn-primary">Add new item</a>

@stop