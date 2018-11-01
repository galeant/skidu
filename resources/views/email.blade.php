<!DOCTYPE html>
<html lang="en">
<head>
<style>
    .container{
        margin-left:25%;
        margin-right:25%;
    }
    .text{
        color:black;
        font-family: "Open Sans";
    }
    .align-left{
        text-align:left;
        align: left;
    }
    .justify{
        text-align:center;
        align: justify;
    }
    .header{
        font-size:24px;
    }
    img{
        width:100px;
    }
    .content{
        font-size:18px;
    }
</style>
</head>
<body>
    <div class='container'>
        <div class='header justify'>
            <h5>Selamat Datang Di Skydu</h5>
            <img class="media-object img-radius" src="{{ asset('images/skydu.jpg') }}" alt="E-mail User">
        </div>
        <div class="justify">
            <p><b>Hello {{ $user->name}}</b></p>
            <p>Mari berjelajah bersama skydu.</p>
            <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
            </p>
        </div>
    </div>
</body>



</html>
