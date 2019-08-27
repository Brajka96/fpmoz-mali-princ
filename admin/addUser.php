<?php
include('../php/session.php');
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
    <link rel="stylesheet" href="admin.css" />
  </head>
  <body>
    <div id="admin">
      <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Admin Panel</a>
      </nav>
      <main>
        <div class="container">
        <form action="php/addUser.php" method="POST">
              <div class="form-group">
                <label>Full Name</label>
                <input id="full_name" name="full_name" type="text" class="form-control" placeholder="Full Name">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input id="email" name="email" type="text" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input id="password" name="password" type="text" class="form-control" placeholder="Password">
              </div>
              <div class="form-group">
                <label>Username</label>
                <input id="username" name="username" type="text" class="form-control" placeholder="Username">
              </div>
              <button type="submit" style="margin-right: 5px" class="btn btn-primary">Register</button>
            </form>
        </div>
      </main>
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
    <script src="admin.js"></script>
  </body>
</html>
