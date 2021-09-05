<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
crossorigin="anonymous"></script>
    <title>شكرا, تمّ التبرّع</title>
</head>
<body>
    <div class="overlay">
    <h3>شكرا, تمّ إضافة مشاركتك</h3>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v11.0&appId=317868489733953&autoLogAppEvents=1" nonce="yKcLPVik"></script>
<div class="fb-share-button" data-href="https://fourniture.dot-devs.tn" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager avec vos amis</a></div>   
</div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap');

        body{
background-image: url("pexels-element-digital-1370296.jpg");
margin: 0% 0%;
font-family: 'Almarai', sans-serif;
        }

        .overlay{
            height: 100vh;
            width: 100%;
            text-align: center;

display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
background-color: rgba(16, 115, 245, 0.657);

        }

        h3{
            color: white;
            font-size: 80px;
            margin: 0% 0%;
        }

        p{
            color: white;
        }


        @media screen and (max-width: 900px) {
        
        
            h3{
            color: white;
            font-size: 40px;
            margin: 0% 0%;
        }
        
        }
    </style>
</body>
<script>


$("body").click(function (e) { 
    e.preventDefault();
    window.location.href="/";
});
</script>

</html>