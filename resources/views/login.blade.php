<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logging in</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v11.0&appId=317868489733953&autoLogAppEvents=1"
    nonce="iPTofnze"></script>
</head>
<body>
<div class="container">

    <form action="account" method="POST">
        @csrf
        <input type="text" required style="display: none;" name="Name" id="name">
        <input type="number" required style="display: none;" name="id" id="id">
<h1>الرجاء إثبات هويّتك</h1>
    <div class="fb-login-button" id="fbbutton">
        <div class="fb-login-button  " data-max-rows="2" data-size="large" data-button-type="continue_with"
            data-use-continue-as="true" onlogin="checkLoginState();" style="width: 100%;"></div>
    </div>
    <input type="submit">
</form>
</div>
<style>

@import url('https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap');
body{
    font-family: 'Almarai', sans-serif;
margin: 0% 0%;
text-align: center;
display: flex;
justify-content: center;
align-items: center;
background-image: url("imgs/bgdonate.jpg")}
.container{

    height: 100vh;
    width: 100%;
    text-align: center;
display: flex;
justify-content: center;
align-items: center;
background-color: rgba(19, 128, 252, 0.671)
}


form{
background-color: white;
height: 35vh;
width: 50%;
display: flex;
flex-direction: column;
justify-content: center;
border-radius: 40px;
font-size: 20px;
}
h1{
    margin-top: 0%;
    margin-bottom: 10px;
}




</style>

<script>



function statusChangeCallback(response) {

// Called with the results from FB.getLoginStatus().
console.log(response);         
if (response.status === 'connected') { 
FB.api('/me?fields=id,name', function(response) {
  console.log(response);
// $("#id").val(response.id);
// $("#profile").val("https://www.youtube.com/watch?v=-15VC4Yxzys&ab_channel=FRANKVILLEDA");

// $("#name").val(response.name);
$("#name").val("youssef Ben Arab");
$("#id").val("youssef Ben Arab");

$("#fbbutton").hide();

} );               
} 
}
var govs = ['أريانة','بن عروس','باجة','بنزرت','قابس','قفصة','جندوبة','قبلي','الكاف','القيروان','مدنين','المهدية','المنستير','نابل','صفاقس','سليانة','سوسة','تطاوين','توزر','تونس','زغوان','جربة','مدنين','منوبة','القصرين','سيدي','بوزيد'];
// var url_string = "https://www.facebook.com/profile.php?id=100002650321039";
// var url = new URL(url_string);
// var c = url.searchParams.get("id");
// console.log(c);
$("#id").val("3899324780165828");
$("#profile").val("www.facebook.com");
$("#name").val("Youssef Ben Arab");

function checkLoginState() {               // Called when a person is finished with the Login Button.
FB.getLoginStatus(function(response) {   // See the onlogin handler
  statusChangeCallback(response);
});
}


window.fbAsyncInit = function() {
FB.init({
  appId      : '317868489733953',
  cookie     : true,                     // Enable cookies to allow the server to access the session.
  xfbml      : true,                     // Parse social plugins on this webpage.
  version    : 'v10.0'          // Use this Graph API version for this call.
});
}



</script>






</body>
</html>