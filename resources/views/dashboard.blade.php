

<x-app-layout>
    <x-slot name="header">
                            
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <main>
                {{ $slot ?? '' }}
                    <div class="row">
                        <h1 class="text-lg text-gray-700 dark:text-gray-500 ">share your story </h1class>
                        <form action="/articles" method="post">
                            <div class="col-4 sm">
                            <input class="form-control me-2type" type="text" name="title" placeholder="Title">
                            </div>
                            <br>
                            
                            <div class="input-holder">
                             <textarea name="message" id="message" tabindex="4">
                             </textarea></br>
                             <button class="bg-purple-600 hover:bg-green-600 text-white font- py-1 px-2  rounded">publish</button></br>
                        </form>
                    </div>   
                </main>
            </div>
        </div>
    </div>

</x-app-layout>
