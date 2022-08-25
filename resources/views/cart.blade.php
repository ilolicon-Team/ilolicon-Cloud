<!DOCTYPE html>
<html>
    <head>
        <title>{{ env('APP_NAME') }} | 购物车</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="/css/pico.min.css">
            
        <script>
            @media screen and (max-width: 600px) {
                #a60_img {
                    width: 100%;
                }
            }
    
            @media screen and (min-width: 600px) {
                #a60_img {
                    width: 50%;
                }
            }
    
            footer {
                text-align: center;
                font-size: 0.8em;
            }
    
            #main_content {
                border-radius: 1rem;
            }
        </style>
    
    
        <script>
            function random(max) {
                var r, v;
                var arr = [];
                return function create() {
                    if (arr.length === 0) {
                        for (var i = 0; i < max; i++) {
                            arr.push(i + 1)
                        }
                    }
                    r = Math.ceil(Math.random() * (arr.length - 1));
                    v = arr[r];
                    if (arr.length === 1) {
                        arr = []
                    } else {
                        arr.splice(r, r);
                    }
    
                    return v;
                }
            };
        </script>
    </head>

    <body>

<main class="container">

    <nav>
        <ul>
            <li><strong>{{ env('APP_URL') }}</strong></li>
        </ul>
        <ul>
            <li><a href="{{ env('APP_URL')}}/cart" target="_blank">{{ env('APP_NAME')}}</a></li>
            </u>
    </nav>

    <hgroup>
        <h1>{{ env('APP_NAME') }}</h1>
        <h2>购物车</h2>
    </hgroup>

    <article id="main_content">

        <h3 id="index_show">#</h3>

        <center>
        </center>

        <script>
            changePic();
            const img = document.getElementById("a60_img")
            img.onload = function () {
                document.getElementById("index_show").setAttribute("aria-busy", "false");
            }
        </script>
    </article>

    <footer>
        <p>
            Copyright © 2022 {{ env('APP_NAME') }}. All Rights Reserved.
        </p>
    </footer>

</main>

</body>

</html>
    