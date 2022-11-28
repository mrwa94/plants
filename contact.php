<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>contact us</title>
</head>
<body>
    <!------------->
    <?php  include('navbar.php') ?>


<div class="container ">
<div class="row p-5 m-5 shadow rounded-5">
    <div class="col">
        
    <h1 class="pb-5">تواصل معنا</h1>

    <form class="row g-3">
  <div class="col-md-6">
  <div class="col-12">
    <label for="inputName" class="form-label">الاسم</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="">
  </div>
    <label for="inputEmail4" class="form-label">الايميل</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-12">
    <label for="inputName" class="form-label">الرسالة</label>
    <textarea  class="form-control" id="inputAddress" placeholder=""> </textarea>
  </div>

  <div class="col-12 pb-5">
    <button type="submit" class="btn buttnStyle" style="background-color:#1b492f; color:white ;">ارسال</button>
  </div>
</form>

    </div>
    <div class="col">
        <img src="./images/Rectangle 1 (1).png" width="100%">
        
    </div>

</div>
</div>









    <!----------------->
    
</body>
</html>