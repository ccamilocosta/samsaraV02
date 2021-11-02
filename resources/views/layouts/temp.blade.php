@extends('layouts.app')

@section('content')


<div class="md:container md:mx-auto">
    <h2 class="text-2xl" > Latest Posts </h2>
         <div class="box-content-around-between h-100 w-300 p-4 border-0 ...">
             <ul class="bg-grey-200	 text-blck text-md">
                @if(isset($articles))
                @else 
                        <li class="box-content  h-100 w-300 p-4 border-0 ...">
                            <p>no articles found</p>
                        </li>
                @endif      
                </ul>      
            </div>

            <ul class=" box-content  h-100 w-300 p-4 border-2 ...">
                @foreach ($articles as $article)  
                        <li class= "box-content-between  h-100 w-150 p-4 border-2 rounded-t-md...">
                        <h3 class= "box-content-around-between  h-100 w-150 p-4 border-0 ...">
                            <a href="/article/{{$article->id}}">{{$article->title}}</a></h3>
                            {{$article->img_filename}}
                            {{$article->description}}

                            <!-- @if(!is_null($article->created_at   ))
                                {{$article->created_at->diffForHumans()}} -->
                            @endif
                        </li>
                        
                    @endforeach
               
                    </ul>           
               
                            
                </div>
            </div>      
                       
            <br>

@endsection








   