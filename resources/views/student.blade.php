<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>
</head>
<body>

<div class="container">
 <div class="row">
 <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 ">
 
 </div>
 <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
 <form action="/studread" method="post">
 {{ csrf_field() }}
 <table class="table table-borderless">
 <br><br>
 <tr>
     <td>Name</td>
     <td><input name="sname" type="text" class="form-control"></td>
 </tr>
 <tr>
     <td>College</td>
     <td><input name="sclg" type="text" class="form-control"></td>
 </tr>
 <tr>
     <td>RollNo</td>
     <td><input name="sr" type="text" class="form-control"></td>
 </tr>
 <tr>
     <td>AddNo</td>
     <td><input name="sadd" type="text" class="form-control"></td>
 </tr>
 <tr>
     <td></td>
     <td><button class="btn btn-secondary">Sumbit</button></td>
 </tr>
 </table></form>
 </div>
 <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
</div>
 </div>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>   
</body>
</html>