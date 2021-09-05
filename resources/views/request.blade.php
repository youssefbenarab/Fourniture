<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ارسال طلب</title>

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
    <div class="form-container">
        <h1>ارسال طلب</h1>
        <div class="donation-details">
            @php
                    $govs = ['أريانة','بن عروس','باجة','بنزرت','قابس','قفصة','جندوبة','قبلي','الكاف','القيروان','مدنين','المهدية','المنستير','نابل','صفاقس','سليانة','سوسة','تطاوين','توزر','تونس','زغوان','جربة','مدنين','منوبة','القصرين','سيدي بوزيد'];
        
                   $classes = ['سابعة أساسي','ثامنة أساسي','تاسعة أساسي','أولى ثانوي','ثانية علوم','ثانية علوم الإعلاميّة','ثانية اداب','ثانية اقتصاد','ثالثة رياضيات','ثالثة علوم تقنيّة','ثالثة علوم تجريبيّة','ثالثة علوم إعلاميّة','ثالثة اداب','ثالثة اقتصاد','بكالوريا رياضيات','بكالوريا علوم تقنيّة','بكالوريا علوم تجريبيّة','بكالوريا علوم الاعلاميّة','بكالوريا اداب','بكالوريا اقتصاد'];            
        
              @endphp
            @foreach($posts as $post)
                @php
                    $govindex = $post->gouver;
                    $gouvername = $govs[$govindex];
                    $classindex = $post->year;
                    $classname = $classes[$classindex-1];
                @endphp
                <p><b>المتبرّع:</b>{{$post->name}}</p>
                <p><b>الولاية:</b>{{$govername}}</p>
                <p><b>عدد الكتب:</b>{{$post->nbbooks}}</p>
                <p><b>السنة:</b>{{$classname}}</p>
            @endforeach
        </div>
        <form action="">
            <div class="form-floating">
                <select class="form-select" id="floatingSelect" name="region"
                    aria-label="Floating label select example">
                    
              @foreach ($govs as $item)
        <option value="{{array_search($item, $govs)}}">{{$item}}</option>
        
              @endforeach
                </select>
                <label for="floatingSelect"> اختر الولاية </label>
            </div>

            <div class="form-floating mb-3">
                <input type="url" class="form-control" onchange="changeid()"   name="ProfileUrl" id="profile" placeholder="example: www.facebook.com/profile">
                <label for="floatingInput">رابط الفايسبوك </label>
              </div>
        </form>
    </div>
</body>
</html>