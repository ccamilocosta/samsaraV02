<x-app-layout>
    <x-slot name="header">


    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <main>
                    {{ $slot ?? '' }}
                    </br>
                    <div class="flex items-center">
                        <div class="row">
                            <form action="/articles" method="post">
                                @csrf
                                <div class="col-4 sm">
                                    <input type="file" id="img_filename" name="img_filename" accept="image/png, image/jp">
                                </div><br>
                                <div class="row">
                                    <h1 class="text-lg text-gray-700 dark:text-gray-500 ">share your story </h1>

                                    <div class="col-4 sm">
                                        <input class="form-control me-2type" type="text" name="title" placeholder="Title">                                       
                                        <div class="input-holder">
                                            <textarea name="description" id="description" tabindex="4">
                                            </textarea></br>
                                            <button class="bg-purple-600 hover:bg-green-600 text-white font- py-1 px-2  rounded">publish</button></br>
                                        </div>
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