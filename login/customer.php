<?php
    include_once('funcIns.php');

    // $resgisterCustomer = new DB_con(); 

    // if(isset($_POST['insert'])){ 
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];
    //     $repeat = $_POST['repeat'];
    //     $name = $_POST['name'];
    //     $tel  = $_POST['tel'];
    //     $permission = "3";
    //     $check = strcmp($password, $repeat);

    //     $sql = $resgisterCustomer->resgisterCustomer($email, $password, $name, $tel, $permission);
    //     if($sql && $check == 0){
    //         echo "<script>alert('สมัครสมาชิกสำเร็จ ^^');</script>";
    //         // echo "<script>window.location.href='login.php'</script>";
    //      }
    //     else{
    //         echo "<script>alert('ข้อมูลรหัสผ่านไม่ตรงกัน กรุณาลองใหม่อีกครั้ง');</script>";
    //         echo "<script>window.location.href='register.php'</script>";
    //     }
    // }
 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 50px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<!-- <form action="/action_page.php"> -->
<!-- <form role="form" action="" method="POST"> -->
  <div class="container">
    <h1>Register</h1>
    <p>สมัครสมาชิกร้าน MB Car care.</p>
    <hr>
    <?php
      // $id = $_GET['id'];
      $email  = $_GET['email'];
      $password = $_GET['password'];
      $name = $_GET['name'];
      $tel = $_GET['tel'];

      $NewCustomer = new DB_con();
      $sql = $NewCustomer->NewCustomer($email, $password, $name, $tel);
      while($row = mysqli_fetch_array($sql)){
    ?>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" value="<?php echo $row['email'] ?>" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" value="<?php echo $row['password'] ?>" id="myInput" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="repeat" value="<?php echo $row['password'] ?>" id="myInput2" required>
    
    <input type="checkbox" onclick="myFunction()">Show Password <br><br>

    <label for="psw-repeat"><b>Name - Lastname</b></label>
    <input type="text" placeholder="Enter Name - Lastname" name="name" value="<?php echo $row['name'] ?>" id="name" required>

    <label for="psw-repeat"><b>Telephone Number</b></label>
    <input type="text" placeholder="Enter Telephone" name="tel" value="<?php echo $row['tel'] ?>" id="tel" required>

    <!-- <hr> -->
    <!-- <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> -->

    <!-- <button type="submit" name ="insert" class="registerbtn">Register</button> -->
  </div>

  <?php } ?>

  <div class="container signin">
    <p>เข้าสู่ระบบ <a href="index.php">Sign in</a>.</p>
  </div>
<!-- </form> -->
<script>
  function myFunction() {
    var x = document.getElementById("myInput");
    var y = document.getElementById("myInput2");
    if (x.type === "password" || y.type === "password") {
      x.type = "text";
      y.type = "text";
    } else {
      x.type = "password";
      y.type = "password";
    }
  }
</script>
</body>
</html>
