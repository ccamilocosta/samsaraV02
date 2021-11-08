<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> -->
        <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
        <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
       
    </head>
    <body class="antialiased">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-center sm:pt-0" >
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="25.5mm" height="25.25mm" viewBox="-1375 -875 6550 5125">
                    <g id="Endless_Knot_by_Adam_Stanislav" transform="rotate(45,2250,2750)">
                    <path id="Fill" fill="rgb(50%,50%,100%)" d="M0,0h1500v1000h500v-1000h1500v1500h-1000v500h1000v1500h-1000v1000h-1500v-1000h-500v1000h-1500v-1500h1000v-500h-1000v-1500h1000ZM500,500v500h500v-500ZM2550,500v500h500v-500ZM1500,1500v500h500v-500ZM500,1500v500h500v-500ZM-500,1500v500h500v-500ZM500,2500v500h500v-500ZM1500,2500v500h500v-500ZM2500,2500v500h500v-500ZM1500,3500v500h500v-500ZM-500,3500v500h500v-500Z" />
                    <g id="Strokes" fill="none" stroke="rgb(0%,0%,0%)" stroke-width="50">
                        <polyline points="0 2000 0 0 1500 0 1500 1000" />
                        <polyline points="2000 2000 2000 0 3500 0 3500 1500 2500 1500" />
                        <polyline points="500 2000 500 500 1000 500 1000 1000" />
                        <polyline points="2500 2000 2500 500 3000 500 3000 1000 2500 1000" />
                        <polyline points="0 1000-1000 1000-1000 2500 1000 2500" />
                        <polyline points="0 1500-500 1500-500 2000 1000 2000" />
                        <polyline points="1500 2000 3500 2000 3500 3500 2500 3500" />
                        <polyline points="1500 2500 3000 2500 3000 3000 2500 3000" />
                        <polyline points="1000 1500 1000 3000" />
                        <polyline points="1500 1500 1500 3000" />
                        <polyline points="500 1000 2000 1000" />
                        <polyline points="500 1500 2000 1500" />
                        <polyline points="500 3000 2000 3000" />
                        <polyline points="500 3500 2000 3500" />
                        <polyline points="2500 2500 2500 4500 1000 4500 1000 3500" />
                        <polyline points="500 2500 500 4500-1000 4500-1000 3000 0 3000" />
                        <polyline points="2000 2500 2000 4000 1500 4000 1500 3500" />
                        <polyline points="0 2500 0 4000 -500 4000 -500 3500 0 3500" />
                    </g>
                    </g>
                </svg>
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-lg  ">Samsara</div></br>
            </div> 
     
                <h2>Share your Story </h2>
                <div class="row">
                    <form action="/create" method="post">
                        <div class="col-4 sm">
                        <input class="form-control me-2type" type="text" name="title" placeholder="Title">
                </div>
                <br>
                <div class="col-4 sm">
                <input class="form-control me-2type" type="text" name="content" placeholder="Content">
                </div>
                <button class="btn" type="submit">Submit</button>
            </form>
        </div>                                         
    </div>
    </body>
</html>
    
    



