<!DOCTYPE html>
<html lang="en">
<head>
    <title>Family Network</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }
        html, body, section, div {
            height: 100%;
        }

        body {
            color: black;
            font-family: sans-serif;
            font-size: 1.25rem;
            line-height: 150%;
            text-align: center;
        }

        section {
            width: 100%;
        }

        .article1 {
            position: relative;
            top: 50%;
            left: 50%;
            padding: 1rem;
            text-align: center;
            transform: translate(-50%, -50%);
        }

        .article2 {
            position: relative;
            top: 40%;
            left: 50%;
            padding: 8rem;
            text-align: center;
            transform: translate(-50%, -50%);
        }

        /* Pattern styles */
        .left-half {
            background-color: dodgerblue;
            float: left;
            width: 50%;
        }
        .right-half {
            background-color: white;
            float: left;
            width: 50%;
        }

        .myButton {
            background-color: dodgerblue;
            -moz-border-radius:28px;
            -webkit-border-radius:28px;
            border-radius:28px;
            border:1px solid dodgerblue;
            display:inline-block;
            cursor:pointer;
            color: white;
            font-family:Arial;
            font-size:17px;
            padding:5px 38%;
            text-decoration:none;
            text-shadow:0px 0px 0px #2f6627;
        }
        .myButton:hover {
            background-color:royalblue;
        }
        .myButton:active {
            position:relative;
            top:1px;
        }
        .myButton2 {
            background-color: white;
            -moz-border-radius:28px;
            -webkit-border-radius:28px;
            border-radius:28px;
            border:1px solid dodgerblue;
            display:inline-block;
            cursor:pointer;
            color: dodgerblue;
            font-family:Arial;
            font-size:17px;
            padding:5px 40%;
            text-decoration:none;
            text-shadow:0px 0px 0px dodgerblue;
        }
        .myButton2:hover {
            background-color:lightsteelblue;
        }
        .myButton2:active {
            position:relative;
            top:1px;
        }
        .myButton3 {
            background-color: white;
            -moz-border-radius:28px;
            -webkit-border-radius:28px;
            border-radius:28px;
            border:1px solid dodgerblue;
            display:inline-block;
            cursor:pointer;
            color: dodgerblue;
            font-family:Arial;
            font-size:14px;
            padding:10px 2%;
            text-decoration:none;
            text-shadow:0px 0px 0px dodgerblue;
        }
        .myButton3:hover {
            background-color:lightsteelblue;
        }
        .myButton3:active {
            position:relative;
            top:1px;
        }

        input[type=text] {
            width: 25%;
            padding: 15px 10px;
            margin: 30px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            outline: none;
            font-size: 12.5px;
        }

        input[type=text]:focus {
            border: 1px solid dodgerblue;
        }

        input[type=password] {
            width: 25%;
            padding: 15px 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            outline: none;
            font-size: 12.5px;
        }

        input[type=password]:focus {
            border: 1px solid dodgerblue;
        }
    </style>
</head>
<body>

<section class="container">
    <div class="left-half">

        <article class="article1">
            <p style="color: white; font-weight: bold">Know your family.</p>
            <p style="color: white; font-weight: bold">Find your family.</p>
            <p style="color: white; font-weight: bold">Connect with them.</p>
        </article>
    </div>
    <div class="right-half">
        <form role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <input type="text"required autocomplete="off" placeholder="Username"/>
            <input type="password"required autocomplete="off" placeholder="Password"/>
            <button type="submit" href="{{ url('home') }}" class="myButton3">Log in</button>
        </form>
        <article class="article2">
            <h1 style="font-size: 22px">Find out what is going on with your family</h1><br/>
            <p style="text-align: left; font-size: 16px; font-weight: bold">Join Family Tree</p>
            <button onclick="location.href='{{ url('register') }}'" class="myButton">Sign Up</button><br/><br/>
            <button onclick="location.href='{{ url('login') }}'" class="myButton2">Log in</button>
        </article>
    </div>
</section>

</body>
</html>
