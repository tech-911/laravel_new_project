<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        /* ---------------General styles---------------- */
        html,
        body {
            margin: 0;
            height: 100vh;
        }

        /* ---------------Navbar styles---------------- */
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

        /* ---------------body styles---------------- */

        .body {
            display: flex;
            flex-direction: column;

        }

        .item1-about {
            height: 100vh;
            width: 100vw;
            background-image: url({{ url('../assets/index.jpg') }});
            background-repeat: no-repeat;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .text1-about {
            color: white;
            font-weight: bold;
            font-size: 80px;
            font-family: Roboto;
            border: 10px solid black;
            padding: 40px;
            text-shadow: 5px 6px 5px rgba(0, 0, 0, 0.25);
        }

        /* ---------------skillset styles---------------- */
        .skillset {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }

        .sk1 {
            border-bottom: 1px solid black;
        }

        .sk2 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 1%;
            width: 60%;

        }

        .about-img1 {
            height: 300px;
            width: 280px;
        }

        widget1 {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .span_about {
            align: center
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
            <div class="item1-about">
                <h1 class="text1-about">About Me</h1>
            </div>
            <div class="skillset">
                <h1 class="sk1">Skillset</h1>
                <div class="sk2">
                    <div class="widget1">
                        <img src="/assets/react.jpg" alt="noimage" class="about-img1">
                        <h1>Web Development</h1>
                        <span>Im into web development using React frame work. Also i aspire to extend my knowledge of
                            web to backend with any backend technology. </span>
                    </div>
                    <div class="widget1">
                        <img src="/assets/solidworks.jpg" alt="noimage" class="about-img1">
                        <h1>Web Development</h1>
                        <span>Im into web development using React frame work. Also i aspire to extend my knowledge of
                            web to backend with any backend technology. </span>
                    </div>
                    <div class="widget1">
                        <img src="/assets/figma.jpg" alt="noimage" class="about-img1">
                        <h1>Web Development</h1>
                        <span>Im into web development using React frame work. Also i aspire to extend my knowledge of
                            web to backend with any backend technology. </span>
                    </div>
                    <div class="widget1">
                        <img src="/assets/proteus.jpg" alt="noimage" class="about-img1">
                        <h1>Web Development</h1>
                        <span>Im into web development using React frame work. Also i aspire to extend my knowledge of
                            web to backend with any backend technology. </span>
                    </div>
                    <div class="widget1">
                        <img src="/assets/arduino.jpg" alt="noimage" class="about-img1">
                        <h1>Web Development</h1>
                        <span>Im into web development using React frame work. Also i aspire to extend my knowledge of
                            web to backend with any backend technology. </span>
                    </div>
                    <div class="widget1">
                        <img src="/assets/eagle.jpg" alt="noimage" class="about-img1">
                        <h1>Web Development</h1>
                        <span class="span_about">Im into web development using React frame work. Also i aspire to
                            extend my knowledge of
                            web to backend with any backend technology. </span>
                    </div>
                </div>

            </div>

        </div>


    </div>
</body>

</html>
