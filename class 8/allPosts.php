<<?php 
    session_start();
    include "./database/env.php";
    $query= "SELECT * FROM users WHERE password = 'admin'";
    $response= mysqli_query($conn, $query);
    $users= mysqli_fetch_all($response, 1);
 ?>


 <!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
        <nav class="navbar navbar-expand-lg bg-warning" >
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


<!-- table -->
<div class="col-lg-6 m-auto mt-5">
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <?php 
            if (count($users)>0) {
            foreach ($users as $key => $user) {
        ?>      
                <tr>
                    <td><?= ++$key ?></td>
                    <td><?= $user['email']?></td>
                    <td><?= strlen($user['password']) > 5 ? substr($user['password'],0,5) . '...' : $user['password']?></td>
                </tr>
    <?php         
            }
         }
         else{
        ?>
            <tr>
            <td colspan="3" class="text-center">
                <h2>Mis-match!</h2>
                <iframe src="https://giphy.com/embed/3o7qEciAHeStgj1idG" width="385" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a> 
            </td>
        </tr> 
    <?php
         }
    ?> 
        


       
    </table>
</div>

     <div class="toast <?= isset($_SESSION['msg']) ? "show" : "" ?>" style="position: absolute; top: 50px; right: 50px" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">

            <strong class="me-auto">Post SYS</strong>
            <small>1 sec ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <?= isset($_SESSION['msg']) ? $_SESSION['msg'] : "" ?>
        </div>
    </div>





   
</body>

</html>


<?php

session_unset();
?>


