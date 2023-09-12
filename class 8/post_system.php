<<?php 
    session_start();

 ?>


 <!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>



<!-- //body starts here -->

<body>
    <nav class="navbar navbar-expand-lg bg-body-warning" >
        <div class="container">
            <a class="navbar-brand" href="./post_system.php"> Log In Form</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSuppo">
                <span class= "navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <a class="nav-link active" aria-current="page" href="./post_system.php"><b>Users</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./allPosts.php"> <b>All Users</b></a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>

 <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
</nav>

<nav class="navbar bg-warning" data-bs-theme="dark" ></nav>


<nav class="navbar" style="background-color: "success;>     

    <div class="card col-lg-5 m-auto ">
    <div class="card-header">
        <legend>Library Data entry form</legend>
    </div>

<!-- title form -->
<div class="card-body">
<form class=" col-lg-6 mx-auto " action="./cntr/controll.php" method="POST">

    <div class="mb-3 mt-2 ">
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


<div class="toast <?= isset($_SESSION['msg']) ? "show" : "" ?>" style="position: absolute; top: 150px; right: 50px" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">

            <strong class="me-auto">Post SYS</strong>
            <small>1 sec ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <?= isset($_SESSION['msg']) ? $_SESSION['msg'] : "" ?>
        </div>

  </div>


<nav class="navbar bg-warning" text-dark >
<div class="card-col-g m-auto my-5">
  <div class="card-header">
    <h4>Quote of the Day</h4>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p><h5>A well-known quote, contained in a blockquote element.</h5></p>
      <footer class="blockquote-footer">Someone famous on <cite title="Source Title">the Earth</cite></footer>
    </blockquote>
  </div>
</div>
</nav>

</body>
</html>