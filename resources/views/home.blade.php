@extends('layouts.app')

@section('content')
<section class="container">
    <h1>Home page</h1>
    <a href="{{route('books.index')}}">Vai ai books</a>
</section>
@endsection
