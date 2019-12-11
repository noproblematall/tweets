<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>     
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" value="{{ csrf_token() }}" />

        <title>همة حتى القمة | اليوم الوطني السعودي</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
        <style>
            .content {
                margin: 100px auto;
                box-shadow: 2px 2px 5px #8e8e8e;
                padding: 30px;
            }
        </style>
    </head>
    <body>
        <input type="hidden" id="base_url" value="{{asset('/')}}">
        <div class="container" id="app" v-cloak>
            <section class="content text-center">
                <div>
                    {{-- <counter-component></counter-component>
                    <tweet-component></tweet-component> --}}
                        <h1>COOMING SOON</h1>
                </div>
                
            </section>           
            
        </div>

        
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
        {{-- <script src="{{asset('js/frontend.js')}}"></script> --}}
    </body>
</html>
