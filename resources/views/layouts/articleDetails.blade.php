@extends('layout.dashboard')

<!-- @section ('inc.search') -->
<!--  -->

@section('content')

<h2>Article Details</h2><br>
<h3>{{$article ?? ''->title}}</h>
<p>{{$article ?? ''->content}}</p>
<p>{{$article ?? ''->img_filename}}</p>

<form action="/articles/{{$article ?? ''->id}}" method="post">

    @csrf 
    @method('delete')
    <!-- @method('PUT')  -->
    <button class="btn" type="submit">delete</button>
</form>

@endsection