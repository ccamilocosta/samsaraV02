@extends('master')

@section ('inc.search')


@section('content')

<h2>Article Details</h2>
<br>
<h3>{{$article->title}}</h3>

<p>{{$article->content}}</p>


<form action="/articles/{{$article->id}}" method="post">
    <!-- @csrf -->
    @method('delete')
    <button class="btn" type="submit">delete</button>
</form>

@endsection