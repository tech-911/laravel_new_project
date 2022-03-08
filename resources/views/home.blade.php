<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        html,
        body {
            margin: 0;
            height: 100vh;
        }

        .nav {
            position: fixed;
            top: 0px;
            width: 100%;
            background: rgba(33, 33, 33, 1);
            z-index: 4;
            padding: 20px;
        }

        .nav-child {

            display: flex;
            list-style-type: none;
            align-items: center;
            justify-content: flex-end;


        }

        #li {
            margin-right: 5%;
        }

        .nav>.font {
            font-family: Roboto;
            font-style: normal;
            font-weight: bold;
            font-size: 20px;

        }

        a {
            outline: none;
            text-decoration: none;
            color: white;

        }

        .item1 {
            height: 100vh;
            width: 100vw;
            background-image: url({{ url('../assets/index.jpg') }});
            background-repeat: no-repeat;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .body {
            display: flex;
            flex-direction: column;

        }

        .text1 {
            color: white;
            font-weight: bold;
            font-size: 80px;
            font-family: Roboto;
            border: 10px solid black;
            padding: 40px;
            text-shadow: 5px 6px 5px rgba(0, 0, 0, 0.25);
        }

        .item2 {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            color: black;
            margin-top: 80px;

        }

        .img1 {

            height: 499px;
            width: 392px;

        }

        .item3 {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-left: 2%;
            font-size: 26px;

        }

    </style>
</head>

<body>
    <div class="container">
        <div class="nav">
            <ul class="nav-child">
                <li id="li" class="font">
                    <a href="/home">Home</a>
                </li>
                <li id="li" class="font">
                    <a href="/about">About</a>
                </li>
                <li id="li" class="font">
                    <a href="/contact">Contact</a>
                </li>
                <li id="li" class="font">
                    <a href="/reference">Reference</a>
                </li>
            </ul>
        </div>

        <div class="body">
            <div class="item1">
                <h1 class="text1">Babatunde Eric Olatunji</h1>
            </div>
            <div class="item2">

                <img src="/assets/Profile_image.png" alt="noimage" class="img1">
                <div class="item3">
                    <h1 class="">Introduction</h1>
                    <span>I am Babatunde Eric Olatunji a student of Mechatronics engineering Federal University of<br>
                        Technology Minna. I worked with the Advnced Engineering Innovation Reaserch Group (AEIRG) as
                        a<br>
                        student Research Assistant.<br>
                        My area of interest are:</span>
                    <ul>
                        <li>IoT</li>
                        <li>web development</li>
                        <li>Artificial intellegence</li>
                        <li>3D design</li>
                    </ul>
                </div>

            </div>
        </div>


    </div>
</body>

</html>
