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

        .body {
            width: 100vw;
            margin-top: 2.5%;
            background-image: url({{ url('../assets/index.jpg') }});
            background-repeat: no-repeat;
            background-position: center;


        }

        .image {
            width: 100vw;
            height: 100vh;
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
            <img src="{{ URL::to('assets/index.jpg') }}" alt="no image" class="image" />
            jdsalkgj;lkfsjdaok flj;kl jadskljfd
        </div>

    </div>
</body>

</html>
