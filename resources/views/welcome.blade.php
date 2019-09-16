<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ url('/css/bootstrap-4.3.1/css/bootstrap.min.css') }}">
        <title>Storage Service</title>
        <!-- Styles -->
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Anton|Roboto');

        .word {
            font-family: 'Anton', sans-serif;
            perspective: 1000px; 
            perspective-origin: 200px 40px;
        }

        .word span {
            cursor: pointer;
            display: inline-block;
            font-size: 80px;
            user-select: none;
            line-height: .8;
        }

        .word span:nth-child(1).active {
            animation: balance 1.5s ease-out;
            transform-origin: 0% 100% 0px;
        }

        @keyframes balance {
            0%, 100% {
                transform: rotate(0deg);
            }
            
            30%, 60% {
                transform: rotate(-45deg);
            }
        }

        /* Other styles */
        body {
            /* background-color: skyblue; */
            /* color: #fff; */
            display: flex;
            font-family: 'Roboto', sans-serif;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            height: 100vh;
            margin: 0;
        }

        .fixed {
            position: fixed;
            top: 40px;
            left: 50%;
            transform: translateX(-50%);
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            letter-spacing: 1px;
        }

        footer i {
            color: red;
        }

        footer a {
            color: #3C97BF;
            text-decoration: none;
        }

        a, a:hover {
            color: black;
            text-decoration: none !important;
            text-transform: uppercase !important;
        }
    </style>
    <body>
        <div class="centered vertical-center">
            <div class="content">
                <div class="word">
                    <span>S</span>
                    <span>T</span>
                    <span>O</span>
                    <span>R</span>
                    <span>A</span>
                    <span>G</span>
                    <span>E</span>
                    &emsp;
                    <span>S</span>
                    <span>E</span>
                    <span>R</span>
                    <span>V</span>
                    <span>I</span>
                    <span>C</span>
                    <span>E</span>
                </div>            
                <div style="text-align: right;">
                    Let me keep your files.
                </div>
                <div style="text-align: center;">
                    <a href="{{ route('login') }}" role="button" class="btn btn-outline-dark"> Login </a>
                    or
                    <a href="{{ route('register') }}" role="button" class="btn btn-outline-secondary"> Register </a>
                </div>
            </div>
        </div>
        <footer>
            <p></p>
        </footer>
    </body>
    <script>
        let spans = document.querySelectorAll('.word span');
        spans.forEach((span, idx) => {
            span.addEventListener('click', (e) => {
                e.target.classList.add('active');
            });
            span.addEventListener('animationend', (e) => {
                e.target.classList.remove('active');
            });
            
            // Initial animation
            setTimeout(() => {
                span.classList.add('active');
            }, 750 * (idx+1))
        });
    </script>
</html>
