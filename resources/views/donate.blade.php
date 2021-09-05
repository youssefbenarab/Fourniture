<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة التبرّع</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        <link rel="icon" href="imgs/d.png">
    <link rel="stylesheet" href="style/donate.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v11.0&appId=317868489733953&autoLogAppEvents=1"
        nonce="iPTofnze"></script>

</head>

<body>
    <div class="home">

        <div class="overlay">
<div class="form">     <h1 class="mb-3"> إضافة متبرّع جديد</h1>
 <form action="Donate" method="POST">
@csrf
                <div class="form-floating mb-3">
                    <select class="form-select" name="classe" id="floatingSelect"
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
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" name="region"
                        aria-label="Floating label select example">
                        @php
                              $govs = ['أريانة','بن عروس','باجة','بنزرت','قابس','قفصة','جندوبة','قبلي','الكاف','القيروان','مدنين','المهدية','المنستير','نابل','صفاقس','سليانة','سوسة','تطاوين','توزر','تونس','زغوان','جربة','مدنين','منوبة','القصرين','سيدي بوزيد'];

                        @endphp
                        @foreach ($govs as $item)
                <option value="{{array_search($item, $govs)}}">{{$item}}</option>

                        @endforeach

                        
                    </select>
                    <label for="floatingSelect"> اختر الولاية </label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" min="1" required name="nbbooks" max="15" value="1"   class="form-control" id="floatingInput" >
                    <label for="floatingInput">عدد الكتب </label>
                </div>
                <div class="form-floating mb-3">
                    <input type="url" class="form-control" onchange="changeid()"   name="ProfileUrl" id="profile" placeholder="example: www.facebook.com/profile">
                    <label for="floatingInput">رابط الفايسبوك </label>
                  </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" required type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label"  for="flexCheckDefault" style="color: black; ">
                        أوافق أن يتمّ التواصل معي و أنّ المعلومات التي شاركتها صحيحة </label>
                </div>
                <input type="text" required style="display: none;" name="Name" id="name">
                <input type="number" required style="display: none;" name="id" id="id">
                <input type="number" required style="display: none;"   name="publicid" id="publicid">

                <div class="fb-login-button" id="fbbutton">
                    <div class="fb-login-button  " data-max-rows="2" data-size="large" data-button-type="continue_with"
                        data-use-continue-as="true" onlogin="checkLoginState();" style="width: 100%;"></div>
                </div>
                <input type="submit" class="btn btn-primary mb-3" id="submit" value="تبرّع الان">

            </form>
        </div>       
        </div>

    </div>


   
</body>
<script src="script/facebook.js"></script>

</html>