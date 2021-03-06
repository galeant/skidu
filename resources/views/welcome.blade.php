<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145110849-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-145110849-1');
        </script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .a{
                color:white;
            }
            .bg-blue{
                background-color:#99FFFF;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-messaging.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->

    <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyB7nPq48neNCYdlIpvBwyXJvLe46KAcGsg",
        authDomain: "larabase-83799.firebaseapp.com",
        databaseURL: "https://larabase-83799.firebaseio.com",
        projectId: "larabase-83799",
        storageBucket: "larabase-83799.appspot.com",
        messagingSenderId: "321077544402",
        appId: "1:321077544402:web:057382c2a2b4b6eb27740b"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    // 
    const messaging = firebase.messaging();
    messaging.usePublicVapidKey("BNBZORcCzFI-eKTxAq_TAln7NiEW6Y9XYlnspR1Kt_sftyzaCKkjBzSt4igRval1PzGH0fOe2mtL7WqzXEjjoXQ");


    // 
    //   `messaging.setBackgroundMessageHandler` handler.
    messaging.onMessage((payload) => {
    console.log('Message received. ', payload);
    // ...
    });
    // // 
    // // Get Instance ID token. Initially this makes a network call, once retrieved
    // // subsequent calls to getToken will return from cache.
    // messaging.getToken().then((currentToken) => {
    // if (currentToken) {
    //     sendTokenToServer(currentToken);
    //     updateUIForPushEnabled(currentToken);
    // } else {
    //     // Show permission request.
    //     console.log('No Instance ID token available. Request permission to generate one.');
    //     // Show permission UI.
    //     updateUIForPushPermissionRequired();
    //     setTokenSentToServer(false);
    // }
    // }).catch((err) => {
    // console.log('An error occurred while retrieving token. ', err);
    // showToken('Error retrieving Instance ID token. ', err);
    // setTokenSentToServer(false);
    // });

    // // Callback fired if Instance ID token is updated.
    // messaging.onTokenRefresh(() => {
    // messaging.getToken().then((refreshedToken) => {
    //     console.log('Token refreshed.');
    //     // Indicate that the new Instance ID token has not yet been sent to the
    //     // app server.
    //     setTokenSentToServer(false);
    //     // Send Instance ID token to app server.
    //     sendTokenToServer(refreshedToken);
    //     // ...
    // }).catch((err) => {
    //     console.log('Unable to retrieve refreshed token ', err);
    //     showToken('Unable to retrieve refreshed token ', err);
    // });
    // });


    </script>
</html>
