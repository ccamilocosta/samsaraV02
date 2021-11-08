<!-- @extends ('master') -->
<!-- @section ('inc.search') -->
<!-- @section ('content') -->
<!-- @section('footer') -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('recent stories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<h2> Recent messages </h2>
<ul> 
         @if($articles->isNotEmpty())
           @foreach ($articles as $article)  
        <li>
        <h3><a href="/articles/{{$article->id}}">{{$message->title}}</a></h3>
            {{$article->content}}<br>
            {{$article->created_at->diffForHumans()}}            
        </li>
    @endforeach
@else 
        <li>
            <p>No articles found</p>
        </li>
@endif
</ul>
