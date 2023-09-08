<<?php 
    session_start();

 ?>


 <!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title><h3>Log In Validation Form</h3></title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
</nav>

<nav class="navbar bg-warning" data-bs-theme="dark">

</nav>

<nav class="navbar" style="background-color: #ffc107;">

    <div class="card col-lg-4 m-auto mt-3">
    <div class="card-header">
        <legend>Validation System</legend>
    </div>
    <div class="card-body">
        <form action="./controller/control.php" method="POST">

      <label for="email" class="form-label">Email</label>
      <input name="email"  
      value= "<?= isset($_SESSION['userData']['email']) ? $_SESSION['userData']['email'] : " " ?>"
      type="text" class="form-control my-3" placeholder="Enter Your Email">

      <?php
        if (isset($_SESSION['form_error']['email_error'])) {
           ?>
      <span class="text-danger"><?= $_SESSION['form_error']['email_error']?><br><br></span>
        <?php
            }
        ?>
 
    <label for="password" class="form-label">Password</label>
    <input name="password"
        value= "<?= isset($_SESSION['userData']['password']) ? $_SESSION['userData']['password'] : " " ?>"
        type="password" class="form-control my-3" placeholder="Enter Your password">
    <?php
        if (isset($_SESSION['form_error']['password_error'])) {
           ?>
      <span class="text-danger"><?= $_SESSION['form_error']['password_error']?><br><br></span>
        <?php
            }
        ?>
    
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</form>
</nav>
