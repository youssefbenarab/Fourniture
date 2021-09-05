
  function statusChangeCallback(response) {

    // Called with the results from FB.getLoginStatus().
    console.log(response);         
    if (response.status === 'connected') { 
    FB.api('/me?fields=id,name,link', function(response) {
      console.log(response);
// $("#id").val(response.id);
// $("#profile").val(response.link);
// $("#profile").val("https://www.youtube.com/watch?v=-15VC4Yxzys&ab_channel=FRANKVILLEDA");

$("#name").val(response.name);
$("#submit").show();
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
  $("#profile").val("https://www.youtube.com/watch?v=-15VC4Yxzys&ab_channel=FRANKVILLEDA");
  $("#name").val("sahbiiiiss");
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

