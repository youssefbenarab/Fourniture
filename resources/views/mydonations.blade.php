<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تبرعاتي</title>
    <link rel="icon" href="imgs/d.png">

    <!-- CSS -->
    <link rel="stylesheet" href="style/all.css">
    <link rel="stylesheet" href="style/mydonations.css">
    <!-- <link rel="stylesheet" href="../../public/style/search.css"> -->
    
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    <!-- LIB -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
        <!-- MAGNIFIC POPUP  -->
        <link rel="stylesheet" href="lib/Magnific-Popup-master/dist/magnific-popup.css">
        <link rel="stylesheet" href="style/MPdialogue.css">

</head>
<body>
    @php
    $govs = ['أريانة','بن عروس','باجة','بنزرت','قابس','قفصة','جندوبة','قبلي','الكاف','القيروان','مدنين','المهدية','المنستير','نابل','صفاقس','سليانة','سوسة','تطاوين','توزر','تونس','زغوان','جربة','مدنين','منوبة','القصرين','سيدي بوزيد'];

   $classes = ['سابعة أساسي','ثامنة أساسي','تاسعة أساسي','أولى ثانوي','ثانية علوم','ثانية علوم الإعلاميّة','ثانية اداب','ثانية اقتصاد','ثالثة رياضيات','ثالثة علوم تقنيّة','ثالثة علوم تجريبيّة','ثالثة علوم إعلاميّة','ثالثة اداب','ثالثة اقتصاد','بكالوريا رياضيات','بكالوريا علوم تقنيّة','بكالوريا علوم تجريبيّة','بكالوريا علوم الاعلاميّة','بكالوريا اداب','بكالوريا اقتصاد'];            

@endphp
    <div class="container">
        <aside>
            <button class="hide" ></button>
            <div class="account">
                <div class="image">
                <img src="https://graph.facebook.com/{{$id}}/picture?type=large" alt="">
                </div>
            <div class="name">{{$name}}</div>
            </div>
            <div class="info" dir="rtl">
            <p>معرف الفيسبوك: <br><span>{{$id}}</span></p>
            <p>عدد التبرعات: <br><span>{{$table->count()}}</span></p>
                <p>عدد الطلبات: <br><span>15</span></p>
            </div>
            <div class="nav">
                <a href="">
                    <button class="theme-btn">تبرع الآن</button>
                </a>
                <a href="">
                    <button class="theme-btn">البحث عن التبرعات</button>
                </a>
            </div>
        </aside>
        <div class="main">
            <div class="title">
                <h1>تبرّعاتي</h1>
                <p>تحقق من كل تبرعاتك وطلباتك هنا</p>
            </div>
                <ul class="responsive-table">
                    <li class="table-header">
                        <div class="col col-4"></div>
                        <div class="col col-1">الطلبات</div>
                        <div class="col col-2 nophone ">التاريخ</div>
                        <div class="col col-2 nophone ">السنة</div>
                        <div class="col col-1">  الكتب</div>
                        <div class="col col-3"> </div>
                        <div class="col col-1">الولاية</div>
                    </li>    
                    @foreach ($table as $item)
                    @php
                    $govindex = $item->gouver;
                    $gouvername = $govs[$govindex];
                    $classindex = $item->year;
                    $classname = $classes[$classindex-1];
                @endphp
                    <li class="table-row">
                        <div class="col col-4">
                            <form id="delete">
                                <a class="popup-with-move-anim" href="#delete-confirm">
                                    <button class="trigger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </a>
                                <div id="delete-confirm" class="zoom-anim-dialog mfp-hide">
                                    <h1>هل أنت متأكد أنك تريد حذف هذا التبرع؟</h1>
                                    <div class="btns">
                                        <div class="confirm">
                                            <button type="submit">تأكيد</button>
                                        </div>
                                        <div class="decline">
                                            <button>الغاء</button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="col col-1" data-label="Payment Status">
                            <a class="popup-with-move-anim" href="#small-dialog">
                                <div class="request-nb">
                                    5
                                </div>
                            </a>
                        </div>
                        
                        <div id="small-dialog" class="zoom-anim-dialog mfp-hide" >
                            <div class="request-container">
                                <h1>طلبات هذا التبرع</h1>
                            <div class="list">
                                <br>
                                <ul>
                                    <li>
                                        <div class="request" dir="rtl">
                                            <div class="data">
                                                <div class="image">
                                                    <a href="">
                                                        <img src="../../public/imgs/4.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="details" >
                                                    <div class="primary">
                                                        <div class="name">
                                                            Mahdi Ayadi
                                                        </div>
                                                        <div class="location" >
                                                            المكان: <span>صفاقس</span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="date">
                                                        <p>التاريخ</p>
                                                        <p class="value">18/08/2021</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btns">
                                                <div class="contact">
                                                    <a href="">
                                                        <i class="fab fa-facebook-messenger" style="font-size: 25px;"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="request" dir="rtl">
                                            <div class="data">
                                                <div class="image">
                                                    <a href="">
                                                        <img src="../../public/imgs/4.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="details" >
                                                    <div class="primary">
                                                        <div class="name">
                                                            Mahdi Ayadi
                                                        </div>
                                                        <div class="location" >
                                                            المكان: <span>صفاقس</span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="date">
                                                        <p>التاريخ</p>
                                                        <p class="value">18/08/2021</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btns">
                                                <div class="contact">
                                                    <a href="">
                                                        <i class="fab fa-facebook-messenger" style="font-size: 25px;"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li><li>
                                        <div class="request" dir="rtl">
                                            <div class="data">
                                                <div class="image">
                                                    <a href="">
                                                        <img src="../../public/imgs/4.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="details" >
                                                    <div class="primary">
                                                        <div class="name">
                                                            Mahdi Ayadi
                                                        </div>
                                                        <div class="location" >
                                                            المكان: <span>صفاقس</span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="date">
                                                        <p>التاريخ</p>
                                                        <p class="value">18/08/2021</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btns">
                                                <div class="contact">
                                                    <a href="">
                                                        <i class="fab fa-facebook-messenger" style="font-size: 25px;"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li><li>
                                        <div class="request" dir="rtl">
                                            <div class="data">
                                                <div class="image">
                                                    <a href="">
                                                        <img src="../../public/imgs/4.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="details" >
                                                    <div class="primary">
                                                        <div class="name">
                                                            Mahdi Ayadi
                                                        </div>
                                                        <div class="location" >
                                                            المكان: <span>صفاقس</span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="date">
                                                        <p>التاريخ</p>
                                                        <p class="value">18/08/2021</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btns">
                                                <div class="contact">
                                                    <a href="">
                                                        <i class="fab fa-facebook-messenger" style="font-size: 25px;"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li><li>
                                        <div class="request" dir="rtl">
                                            <div class="data">
                                                <div class="image">
                                                    <a href="">
                                                        <img src="../../public/imgs/4.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="details" >
                                                    <div class="primary">
                                                        <div class="name">
                                                            Mahdi Ayadi
                                                        </div>
                                                        <div class="location" >
                                                            المكان: <span>صفاقس</span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="date">
                                                        <p>التاريخ</p>
                                                        <p class="value">18/08/2021</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btns">
                                                <div class="contact">
                                                    <a href="">
                                                        <i class="fab fa-facebook-messenger" style="font-size: 25px;"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li><li>
                                        <div class="request" dir="rtl">
                                            <div class="data">
                                                <div class="image">
                                                    <a href="">
                                                        <img src="../../public/imgs/4.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="details" >
                                                    <div class="primary">
                                                        <div class="name">
                                                            Mahdi Ayadi
                                                        </div>
                                                        <div class="location" >
                                                            المكان: <span>صفاقس</span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="date">
                                                        <p>التاريخ</p>
                                                        <p class="value">18/08/2021</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btns">
                                                <div class="contact">
                                                    <a href="">
                                                        <i class="fab fa-facebook-messenger" style="font-size: 25px;"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li><li>
                                        <div class="request" dir="rtl">
                                            <div class="data">
                                                <div class="image">
                                                    <a href="">
                                                        <img src="../../public/imgs/4.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="details" >
                                                    <div class="primary">
                                                        <div class="name">
                                                            Mahdi Ayadi
                                                        </div>
                                                        <div class="location" >
                                                            المكان: <span>صفاقس</span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="date">
                                                        <p>التاريخ</p>
                                                        <p class="value">18/08/2021</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btns">
                                                <div class="contact">
                                                    <a href="">
                                                        <i class="fab fa-facebook-messenger" style="font-size: 25px;"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            </div>
                            
                        </div>
                        <div class="col col-2 nophone" data-label="Job Id">{{$item->created_at}}</div>
                    <div class="col col-2 nophone" data-label="Job Id ">{{$classname}}</div>
                        <div class="col col-1" data-label="Customer Name">{{$item->nbbooks}}</div>
                        <div class="col col-3" data-label="Amount"></div>
                        <div class="col col-1" data-label="Payment Status">{{$gouvername}}</div>
                    </li>
                    @endforeach              

                </ul>
        </div>
    </div>




    <!-- SCRIPTS -->
        <!-- LIBRARIES -->
            <!-- MAGNIFIC POPUP -->
                <script src="lib/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
                <script src="script/MPdialogue.js"></script>
</body>
</html>