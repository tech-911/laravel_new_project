<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reference</title>
   
 <style>
        *{
            box-sizing: border-box;
        }
        
         .nav{
             position: fixed;
             right: 5%;
             width: 100%;
            display: flex;
            list-style-type:none;
            align-items: center;
            justify-content: flex-end;
            
         }
         .nav > #li{
            margin-right: 5%;
         }

        .nav > .font{
            font-family: Roboto;
            font-style: normal;
            font-weight: bold;
            font-size: 20px;
        }

         a{
             outline: none;
             text-decoration: none;
             color: black;

         }
    </style>

</head>
<body>
    
<div class="reference">
    <ul class="nav">
  <li id="li" class="font">
  <a href="/home">Home</a>    
  </li>
  <li id="li" class="font">
   <a href="/about">About</a>       
  </li>
  <li id="li" class="font">
  <a href="/contact">Contact</a>   
  </li>
  <li class="font">
  <a href="/reference">Reference</a>   
  </li>
</ul>
</div>

</body>
</html>