
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>simple store</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
   
</head>

<body>
   <!----------start nav-------------->
    <?php include("navbar.php");?> 
   <!------------end nav-------------->


   <!-----header 1------->
    <div class="container">
       <img  class="img-header" src="./images/header.jpg">
       <div class="title">
       <h1>أجعل مساحة في منزلك لـ</h1>
       <h1 style="color: #176a23 ; margin-right: 20rem;">نـــبـــتـــة</h1>

       </div>


      <!-----header 2 ------->
      <div class="row row-cols-2 mt-3 ">
        <div class="col header2-img">
        <img class="rounded-circle" src="./images/plant1.jpg" width="50%" height="80%">
        </div>
          <div>
       <h1 class=" header2" >أختر ماتريده من مجموعتنا الجميلة</h1>
       <h4>النباتات تشعرنا بالتحسن و, والعناية بها تسعدنا</h4> <br>
       <a class="buttnStyle primary-font " id="" href="plants.php">تسوق الآن</a>
        </div>

      </div>
    
  
   <!-----products cards-------->

 <section id="products" class="mt-5">
 <div class="row">
  <div class="col-2">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action " id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">كل المنتجات</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">نباتات داخلية</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">نباتات خارجية</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">زهور مجففة</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">اكسسوارات</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
      <div class="card-group">
       <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 2 (3).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 2 (4).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 3 (4).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
</div>
<div class="card-group">
       <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 2 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 2 (2).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 3 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
</div>
<div class="card-group b-none">
       <div class="card b-none" style="height: 18rem ;">
    <img src="./images/Rectangle 2 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 3 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 3 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
</div>

      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
      <div class="card-group">
       <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 2 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 2 (2).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 3 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
</div>
<div class="card-group">
       <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 2 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 2 (2).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 3 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
</div>
<div class="card-group b-none">
       <div class="card b-none" style="height: 18rem ;">
    <img src="./images/Rectangle 2 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 2 (2).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 3 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
</div>
      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
      <div class="card-group">
       <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 2 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 2 (2).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 3 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
</div>
<div class="card-group">
       <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 2 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 2 (2).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 3 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
</div>
<div class="card-group b-none">
       <div class="card b-none" style="height: 18rem ;">
    <img src="./images/Rectangle 2 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 2 (2).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 3 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
</div>
      </div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list"> <div class="card-group">
       <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 2 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 2 (2).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 3 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
</div>
<div class="card-group">
       <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 2 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 2 (2).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 3 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
</div>
<div class="card-group b-none">
       <div class="card b-none" style="height: 18rem ;">
    <img src="./images/Rectangle 2 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 2 (2).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 3 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
</div></div>
      <div class="tab-pane fade" id="list-acssi" role="tabpanel" aria-labelledby="list-acssi-list"> <div class="card-group">
       <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 2 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 2 (2).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 3 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
</div>
<div class="card-group">
       <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 2 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 2 (2).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 3 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
</div>
<div class="card-group b-none">
       <div class="card b-none" style="height: 18rem ;">
    <img src="./images/Rectangle 2 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 2 (2).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
  </div>
  <div class="card " style="height: 18rem ;">
    <img src="./images/Rectangle 3 (1).png" class="card-img-top p-2" alt="...">
    <div class="card-body">
      <h6 class=" d-inline">الياسمين الصيني</h6>
      <h6 class=" d-inline mx-5 ">120 ريال</h6>
    </div>
 </div>
</div>
</div>
 </div>
  </div>
</div>
 </section>   



 <section class="row m-5 primary-font " >
  <div class="col align-items-start shadow p-5 rounded-5">
    <h1>كيف نعمل ؟</h1>
    <p>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg>
      اختر النباتات 
    </p>

    <p>  
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
      حدد موقعك
    </p>
    <p>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gift" viewBox="0 0 16 16">
  <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z"/>
</svg>
      استلم الطلب 
    </p>
  </div>

 
<div class="col align-items-center">
<img class="shadow rounded-5" src="./images/Rectangle 3 (4).png">
</div>
 </section>


 <section class="shadow rounded-5" style="background-color: #1b492f;">
 <h2 class="primary-font text-center pt-4" style="color: white;">اراء العملاء</h2>
 <div class="p-5 text-center">
  <img src="./images/Rectangle 3 (1).png " class=" img-thumbnail rounded-5">
  <img src="./images/Rectangle 3 (2).png" class="rounded-5 img-thumbnail">
  <img src="./images/Rectangle 2 (1).png" class="rounded-5 img-thumbnail">
  <img src="./images/Rectangle 2 (2).png" class="rounded-5 img-thumbnail">
  <img src="./images/Rectangle 2 (3).png" class="rounded-5 img-thumbnail">
  
 </div>

 </section>










   


  
<!-------end container-------------------->
   </div>
   
  


  





<section>
    <!-------start footer-------->
    <?php include("footer.php") ?>
    <!--------End footer---------------->
  
</section>


<script src="main.js"></script>
<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>
</body>
</html>