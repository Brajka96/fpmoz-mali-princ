<?php

    include("php/login.php");//uključujemo login
		if(isset($_SESSION['login_user'])){
		if($_SESSION["user_type"] == "admin" || $_SESSION["user_type"] == "superadmin"){
			header("Location: admin/index.php");//preusmjeravanje na admin panel
		}else{
			header("location: index.php");
		}
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <div id="app">
      <Navbar></Navbar>
      <main>
        <div class="login-form">
            <h1>Login</h1>
            <form method="POST">
              <div class="form-group">
                <label>User Name</label>
                <input id="user" name="user" type="text" class="form-control" placeholder="User Name">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input id="pass" name="pass" type="password" class="form-control" placeholder="Password">
              </div>
              <select name="user_type" id="user_type" class="custom-select">
               <option selected>Select your role</option>
               <option value="basic">Basic</option>
               <option value="member">Member</option>
               <option value="admin">Admin</option>
              </select>
              <button type="submit" style="margin-right: 5px" class="btn btn-primary" name="login">Login</button>
                <a type="submit" href="register.php" class="btn btn-success">Register</a>
                <h6 style="color:red; text-align: right"><?php echo $error; ?></h6>

            </form>
          </div>
      </main>
      <Bottom></Bottom>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="main.js"></script>
  </body>
</html>
