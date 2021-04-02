<?php
    require '../admin/config.php';
    if(isset($_POST['request'])){
        $studentName = $_POST['student'];
        $requestType = $_POST['requesttype'];
        $requestSubject = $_POST['requestsubject'];

        $query = "INSERT INTO requests(name,type,subject) VALUES('$studentName','$requestType','$requestSubject')";
        $action = mysqli_query($conn,$query);
        if($action){
            echo 'Request Made';
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Make request</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Make Request</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      
    </ul>
  </div>
</nav> 


<br> <br>
<div class="container">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <div class="form-group">
  <label>Name</label>
  <input type="text" name="student" class="form-control" required>
  </div>

    <div class="form-group">
        <label>Type of request</label>

            <select name="requesttype" class="form-control" id="">
            <option value="">--SELECT--</option>
            <option value="Assignment request">Assignment request</option>
            <option value="Exam request">Exam Request</option>
            </select>
    </div>
    <div class="form-group">
        <label>Subject </label>
        <input type="text" name="requestsubject" class="form-control" required>
    </div>
    <div class="form-group">
        <input type="submit" name="request" value="Make request" class="form-control btn btn-primary">
    </div>
</form>
</body>
</html>