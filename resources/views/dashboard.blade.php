<x-app-layout>
    <x-slot name="header">


    </x-slot>

    <div class="flex-wrap py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="md-white overflow-hidden shadow-sm sm:rounded-lg">
                <main>
                    {{ $slot ?? '' }}
                    </br>
                    <div class=" flex items-center justify-center rounded-l-lg rounded-r-lg p-8 border-t mr-10 border-b border-l text-gray-800 border-gray-200 bg-white">
                        <div class="flex-wrap row border: gray-700">
                        <h1 class=" text-3xl text-purple-600 font-semibold  ">share your story </h1></br>

                            <form action="/articles" method="post" enctype="multipart/form-data">
                                @csrf
                                
                                <div class=" col-4 sm align-self-center md-auto ">
                                    <img src="{{ asset('images/camera-4-24.png')}}">
                                    <input type="file" id="img_filename" name="img_filename">
                                </div><br>
                                <div class="row border: gray-700">
                                    <div class="col-4 md"></br>
                                        <input class="form-control me-4type" type="text" name="title" placeholder="Title">

                                        <div class="input-holder"></br>
                                            <textarea name="description" id="description" tabindex="4">
                                            </textarea></br></br>
                                            <button class="bg-purple-600 hover:bg-green-600 text-white font- py-1 px-2  rounded">publish</button></br>
                                        </div>
                                            <x-nav-link
                                              :href="route('articles')" :active="request()->routeIS('articles')"> 
                                              {{__('articles')}}
                                          </x-nav-link> 
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

</x-app-layout>