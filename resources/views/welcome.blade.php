@extends('layouts.layout')
@section('body')
    @foreach ($categories as $category)
        <ul>
            <li>{{ $category->name }}</li>
        </ul>
    @endforeach
@endsection
