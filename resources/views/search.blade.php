<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قائمة المتبرّعين</title>
<link rel="stylesheet" href="style/search.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>
<link rel="icon" href="imgs/d.png">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
crossorigin="anonymous"></script>
<link rel="stylesheet" href="style/font-awesome.css">
<link rel="stylesheet" href="style/all.css">
</head>
<body> 
    <nav>
    <a href="/" style="position: absolute; left: 2%; top: 3.5%; font-size: 25px; "><i class="fas fa-arrow-left "></i> </a>
    <h1>  قائمة المتبرّعين بالكتب المدرسيّة</h1>
    <hr>

<form action="">
    <input type="submit" value="البحث">

    <div class="form-floating">
        <select class="form-select" id="classselect" name="classe" id="floatingSelect"
            aria-label="Floating label select example">
            <option value="0" disabled="true" class="section"> المرحلة الأعداديّة </option>
            <option value="1"> سابعة أساسي</option>
            <option value="2"> ثامنة أساسي</option>
            <option value="3"> تاسعة أساسي</option>
            <option value="0" disabled="true" class="section"> المرحلة الثانويّة </option>
            <option value="4"> أولى ثانوي</option>
            <option value="0" disabled="true" class="section"> السنوات الثانية </option>
            <option value="5"> ثانية علوم</option>
            <option value="6"> ثانية علوم الإعلاميّة</option>
            <option value="7"> ثانية اداب</option>
            <option value="8"> ثانية اقتصاد</option>

            <option value="0" disabled="true" class="section"> السنوات الثالثة </option>

            <option value="9"> ثالثة رياضيات</option>
            <option value="10"> ثالثة علوم تقنيّة</option>
            <option value="11"> ثالثة علوم تجريبيّة</option>
            <option value="12"> ثالثة علوم إعلاميّة</option>
            <option value="13"> ثالثة اداب</option>
            <option value="14"> ثالثة اقتصاد</option>


            <option value="0" disabled="true" class="section"> السنوات الرابعة </option>

            <option value="15">بكالوريا رياضيات</option>
            <option value="16">بكالوريا علوم تقنيّة</option>
            <option value="17">بكالوريا علوم تجريبيّة</option>
            <option value="18"> بكالوريا علوم الاعلاميّة</option>
            <option value="19"> بكالوريا اداب</option>
            <option value="20"> بكالوريا اقتصاد</option>
        </select>
        <label for="floatingSelect">أدوات المستوى الدراسي</label>
    </div>
    <div class="form-floating">
        <select class="form-select" id="floatingSelect" name="region"
            aria-label="Floating label select example">
            @php
            $govs = ['أريانة','بن عروس','باجة','بنزرت','قابس','قفصة','جندوبة','قبلي','الكاف','القيروان','مدنين','المهدية','المنستير','نابل','صفاقس','سليانة','سوسة','تطاوين','توزر','تونس','زغوان','جربة','مدنين','منوبة','القصرين','سيدي بوزيد'];

           $classes = ['سابعة أساسي','ثامنة أساسي','تاسعة أساسي','أولى ثانوي','ثانية علوم','ثانية علوم الإعلاميّة','ثانية اداب','ثانية اقتصاد','ثالثة رياضيات','ثالثة علوم تقنيّة','ثالثة علوم تجريبيّة','ثالثة علوم إعلاميّة','ثالثة اداب','ثالثة اقتصاد','بكالوريا رياضيات','بكالوريا علوم تقنيّة','بكالوريا علوم تجريبيّة','بكالوريا علوم الاعلاميّة','بكالوريا اداب','بكالوريا اقتصاد'];            

      @endphp
      @foreach ($govs as $item)
<option value="{{array_search($item, $govs)}}">{{$item}}</option>

      @endforeach
        </select>
        <label for="floatingSelect"> اختر الولاية </label>
    </div>
    <hr>

</nav>

<!-- Posts here -->
<p> {{$length}} résultats trouvés </p>
<div class="container">
    <ul class="responsive-table">
      <li class="table-header">
          <div class="col col-1">التواصل</div>
        <div class="col col-2 nophone ">الولاية</div>
        <div class="col col-2 nophone ">السنة</div>
        <div class="col col-1">  الكتب</div>
        <div class="col col-3"> الاسم</div>
        <div class="col col-1">الحساب</div>
      </li>
      @php
          $itemcheck = count($table);
      @endphp
      @if ($itemcheck == 0)
      <br><br>  
      <h5>لم نجد أيّ نتيجة</h5>
      <br><br>
   @endif
     @foreach ($table as $item)
         @php
             $govindex = $item->gouver;
             $gouvername = $govs[$govindex];
             $classindex = $item->year;
             $classname = $classes[$classindex-1];
         @endphp
        
      <li class="table-row">
        <div class="col col-1" data-label="Payment Status"><a href="{{$item->profileurl}}"><i class="fab fa-facebook-messenger" style="font-size: 25px;"></i></a></div>
        <div class="col col-2 nophone" data-label="Job Id">{{$gouvername}}</div>
        <div class="col col-2 nophone" data-label="Job Id ">{{$classname}}</div>
        <div class="col col-1" data-label="Customer Name">{{$item->nbbooks}} </div>
      <div class="col col-3" data-label="Amount">{{$item->name}}</div>
        <div class="col col-1" data-label="Payment Status"><a href="{{$item->profileurl}} "><img id="profilepic" src="https://graph.facebook.com/{{$item->fbid}}/picture?type=large" alt=""></a></div>
      </li>
      @endforeach

    </ul>
  </div>






  @php
  $nb = $length;
  $pages = ($nb /8)+1;

@endphp

  <nav aria-label="Page navigation example" class="paginate">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link"  aria-label="Previous" id="previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      @if ($pages>5)

    @for ($i = 1; $i <= 5; $i++)
    
    <li class="page-item"><input name="page" class="pageradio" type="radio" id="page{{$i}}" value="{{$i}}" onchange="submit()" ><label  class="page-link " for="page{{$i}}" id="label{{$i}}">{{$i}}</label></li>
    @endfor
    <li class="page-item"><input name="page" class="pageradio" type="radio" id="page6" value="6" onchange="submit()" ><label  class="page-link " for="page6" id="label6">...</label></li>
   @else
   @for ($i = 1; $i <= $pages; $i++)
    
   <li class="page-item"><input name="page" class="pageradio" type="radio" id="page{{$i}}" value="{{$i}}" onchange="submit()" ><label  class="page-link " for="page{{$i}}" id="label{{$i}}">{{$i}}</label></li>
   @endfor
    @endif
   
   
      <li class="page-item">
        <a class="page-link" aria-label="Next" id="next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>
  </nav>
  <input type="radio" name="page" id="pagebox" value="0" style="display: none">
</form>
</body>

<script>

 var url_string = document.location.href;
  var url = new URL(url_string);
  var c = url.searchParams.get("classe");
  var r = url.searchParams.get("region");
  var p = url.searchParams.get("page");

  document.getElementById("classselect").value = c;
  document.getElementById("floatingSelect").value = r;
$("#label"+p).addClass("selectedradio");

function submit(){
$("form").submit();

}

$("#next").click(function (e) { 
  e.preventDefault();

  var p = url.searchParams.get("page");
if (p != ''){
  // $("#pagebox").val(parseInt(p)+1);
  $("#pagebox").attr("value", parseInt(p)+1);
  $("#pagebox").attr('checked', true);
  $("form").submit();
}
});

$("#previous").click(function (e) { 
  e.preventDefault();

  var p = url.searchParams.get("page");
if (p != '' & p != 0){
  $("#pagebox").attr("value", parseInt(p)-1);
  $("#pagebox").attr('checked', true);
  $("form").submit();
}
});

</script>


</html>