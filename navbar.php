<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="container navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand logo" href="#index.php">
        <img src="./images/plant.png" style="width: 35px; height:35px;">
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-center ">
        <li class="nav-item">
          <a class="nav-link active  nav-color" aria-current="page" href="index.php">الرئيسية</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active nav-color" aria-current="page" href="<?php echo 'plants.php'; ?> ">النباتات</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active nav-color" aria-current="page" href="<?php echo 'plants.php'; ?> ">العناية بالنباتات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active nav-color" aria-current="page" href="<?php echo 'contact.php'; ?> ">تواصل معنا</a>
        </li>
      </ul>
      <button class="btn nav-color" type="submit"  data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-whatever="@mdo">
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
</svg>
    </button>

    <button class="btn nav-color" type="submit">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
</svg>
</button>


    </div>
  </div>
</nav>


<!---------login-model--------------->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ">
        <h1 class="modal-title fs-3 justify-content-center" id="exampleModalLabel">تسجيل الدخول</h1>
        <button type="button" class="btn-close mx-5" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name"  class="col-form-label">اسم المستخدم:</label>
            <input type="text" name="email" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">كلمة المرور:</label>
            <input class="form-control" name="password" id="message-text"></input>
           
          </div>
        </form>
      </div>
      <div  class="modal-footer justify-content-center">
      <button type="button" name="submit" class=" buttnStyle " id="">تسجيل الدخول</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
      </div>
      <div class="modal-footer justify-content-center">
      <label for="message-text" class="">لاتملك حساب ؟</label>
      <a class="" href="" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-whatever="@mdo">تسجيل مستخدم جديد</a>
      </div>
    </div>
  </div>
</div>






<!-----------register model---------------->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ">
        <h1 class="modal-title fs-3 justify-content-center" id="exampleModalLabel">تسجيل مستخدم جديد</h1>
        <button type="button" class="btn-close mx-5" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">اسم المستخدم:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">الايميل:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">كلمة المرور:</label>
            <input class="form-control" id="message-text"></input>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">تأكيد كلمة المرور :</label>
            <input class="form-control" id="message-text"></input>
          </div>
        </form>
      </div>
      <div  class="modal-footer justify-content-center">
        <button type="button" class="buttnStyle ">تسجيل جديد</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
      </div>
      <div class="modal-footer justify-content-center">
      <label for="message-text" class="">هل تملك حساب ؟</label>
      <a class=""   data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-whatever="@mdo">تسجيل دخول</a>
      </div>
    </div>
  </div>
</div>





<script src="main.js"></script>
<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>
</body>
</html>