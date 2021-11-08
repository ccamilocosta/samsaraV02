<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>samsara</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <a name="top"></a>
       
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

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
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-lg  ">Samsara</div>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-500  sm:rounded-md">
                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center" m-8 >
                            <img src="{{ asset('images/indrasnet.jpg') }}" width="900px" height="300px" >
                                
                            </div> 

                                    <div class="ml-12">
                                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                            >
                                
                                                "Far away in the heavenly abode, there is a wonderful net which has been hung by some cunning artificer in such a manner
                                                that it stretches out infinitely in all directions. The artificer has hung a single glittering jewel in each "eye" of the net, and since the net itself is infinite in dimension, the jewels are infinite in number. There hang the jewels, glittering "like" stars in the first magnitude, a wonderful sight to behold. 
                                                If we now arbitrarily select one of these jewels for inspection and look closely at it, we will discover that in its polished surface there are reflected all the other jewels in the net, infinite in number. Not only that, but each of the jewels reflected in this one jewel is also reflecting all the other jewels, so that there is an infinite reflecting process occurring.".
                                                We are here to reflect our selvies through our stories.</br> 
                                                <strong>Please sign in.</strong>

                                </div>
                            </div>
                        </div>


                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                                <div class="flex items-center">
                                    <svg class="svg-icon" style="width: 2em; height: 2em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M510.293637 60.72299c-247.537769 0-448.208115 200.670346-448.208115 448.208115 0 247.538793 200.670346 448.208115 448.208115 448.208115 247.538793 0 448.208115-200.670346 448.208115-448.208115C958.501752 261.392312 757.83243 60.72299 510.293637 60.72299zM664.825153 874.792747c-48.916083 20.690228-100.908224 31.181163-154.531516 31.181163s-105.614409-10.490935-154.531516-31.181163c-47.273676-19.99438-89.73986-48.629557-126.220726-85.110423-0.058328-0.059352-0.11461-0.118704-0.172939-0.178055 48.310286-113.693412 158.834518-186.952926 282.632055-186.952926 121.626082 0 233.232972 73.65758 281.588283 184.526667-0.850367 0.865717-1.684362 1.744737-2.542916 2.604314C754.565013 826.163189 712.098829 854.798367 664.825153 874.792747zM511.999488 532.465101c-70.532403 0-127.914298-57.381895-127.914298-127.913275 0-70.53138 57.381895-127.913275 127.914298-127.913275 70.53138 0 127.912251 57.381895 127.912251 127.913275C639.91174 475.083206 582.530868 532.465101 511.999488 532.465101zM829.959144 744.498238c-26.631544-51.340295-65.291029-95.443769-113.349581-128.948861-36.33351-25.330922-76.510558-43.442418-118.842689-53.833069 55.555294-30.439266 93.310176-89.473801 93.310176-157.164482 0-98.743932-80.33363-179.078585-179.077561-179.078585-98.744955 0-179.079608 80.33363-179.079608 179.078585 0 67.692728 37.756929 126.72931 93.315292 157.167552-41.219797 10.122545-80.416518 27.567869-115.981525 51.853995-50.135864 34.235732-90.362031 80.069617-117.597325 133.654023-19.404955-25.794479-35.555797-53.81158-48.224328-83.764775-20.689205-48.917106-31.18014-100.908224-31.18014-154.531516 0-53.622268 10.490935-105.614409 31.18014-154.531516 19.995403-47.273676 48.63058-89.73986 85.110423-126.220726s78.94705-65.11502 126.220726-85.110423c48.916083-20.689205 100.908224-31.18014 154.531516-31.18014s105.615433 10.490935 154.531516 31.18014c47.273676 19.995403 89.73986 48.63058 126.220726 85.110423s65.116043 78.94705 85.110423 126.220726c20.690228 48.916083 31.181163 100.908224 31.181163 154.531516 0 53.623291-10.490935 105.614409-31.181163 154.531516C863.930863 692.364881 848.46052 719.458959 829.959144 744.498238z"  />
                                 
                                    </svg>
                                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="" class=" text-gray-900 dark:text-white">About Us</a>
                                
                                         </div>
                                </div> 

                                        <div class="ml-12">
                                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-lg">
                                                <img src="{{ asset('images/holding-hands.jpg')}}" width="150" height="150px"></br>
                                                Samsara is community driven</br>
                                            </div>    
                                        </div> 
                         </div>
                                                <p class= "text-purple-600 text-l" > <strong>Share and Support </strong></p>
                                                    <div class="grid grid-cols-3 gap-1 place-items-center h-40 grid-flow-col ...">
                                                    
                                                            <a href= ""><img src="{{ asset('images/instagramlogo.jpg') }}" width="60px" height="60px" ></a>
                                                            <a href=""><img src="{{ asset('images/facebooklogo.jpg') }}" width="60px" height="60px"></a>
                                                            <a href=""> <img src="{{ asset('images/twitterlogo.jpg') }}" width="60px" height="60px"></a>
                                </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg class="svg-icon" style="width: 2em; height: 2em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M673.1776 480.4608l270.165333-263.543467C950.9888 224.494933 955.733333 235.008 955.733333 246.6816l0 530.602667c0 11.025067-4.3008 20.957867-11.229867 28.433067L673.1776 480.4608zM82.1248 215.688533C89.4976 208.9984 99.157333 204.8 109.8752 204.8l804.283733 0c10.717867 0 20.3776 4.1984 27.7504 10.888533L512 553.8816 82.1248 215.688533zM79.496533 805.751467C72.567467 798.276267 68.266667 788.343467 68.266667 777.284267L68.266667 246.6816c0-11.6736 4.744533-22.186667 12.3904-29.7984l270.165333 263.543467L79.496533 805.751467zM512 637.678933l112.810667-110.045867 317.8496 280.029867C935.2192 814.762667 925.218133 819.2 914.1248 819.2L109.8752 819.2c-11.0592 0-21.060267-4.437333-28.535467-11.537067l317.8496-280.029867L512 637.678933z"  /></svg>
                                 <div class="ml-4 text-lg leading-7 font-semibold">Contact Us</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Send us an email for any inquire or suggestions.
                            </div>
                        
                       
                        <div class="page-content theme-content">
                            <form method="post" action="/contact" class="contact-form">
                            <div class="contact-form-block contact-name">
                                <label class="contact-label" for="name">Name</label>
                                <div class="input-holder">
                                <input type="text" name="name" id="name" value="" tabindex="1" />
                                </div>
                            </div>
                            <div class="contact-form-block contact-email">
                                <label class="contact-label" for="email">Email</label>
                                <div class="input-holder">
                                <input type="text" name="email" id="email" value="" tabindex="2" />
                                </div>
                            </div>
                            <div class="contact-form-block contact-subject">
                                <label class="contact-label" for="subject">Subject</label>
                                <div class="input-holder">
                                <input type="text" name="subject" id="subject" value="" tabindex="3" />
                                </div>
                            </div>
                            <div class="contact-form-block contact-message">
                                <label class="contact-label" for="message">Message</label>
                                <div class="input-holder">
                                <textarea name="message" id="message" tabindex="4">
                        </textarea>
                                </div>
                            </div>
                            <div class="contact-form-block contact-send">
                                <button class="send-message-button button" type="submit" name="submit" title="Send message" tabindex="6">Send message</button>
                            </div>
                            <div class="contact-form-block contact-recaptcha"></br>
                                <div class="recaptcha-note">
                                <script src="https://www.google.com/recaptcha/api.js"></script><script src="/assets/contact-f51a3186ef7555bfa4120f445cc0da56a45f7438219f2facd21441a27bb64956.js"></script><style>.grecaptcha-badge { visibility: hidden; }</style>This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy"><strong>Privacy Policy</strong></a> and <a href="https://policies.google.com/terms"><strong>Terms of Service</strong></a> apply.
                                </div>
                            </div>
                            
                            </form>
                            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0"> 
                                    <a href="#top" class="ml-5">
                                    <img src="{{ asset('images/back to top.png') }}" width="60px" height="60px"></a>
                                    <p>back to the top</p>
                             </div>                   

                </div>
                        </div>
                                </div>
                            </div>

                        </div>
                    </div>
               
                <div class="flex justify-center mt-4 sm:items-center sm:">
                            
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <img src="{{ asset('images/c3logo.jpg')}}" width="60px" height="30px" >
                        </div></br>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
