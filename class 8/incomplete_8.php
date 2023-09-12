
<?php
session_start();

$title = $_REQUEST ['title'];
$detail = $_REQUEST ['detail'];
$author = $_REQUEST ['author'];
$error = [];


//validation rules


if(empty($title)){
    $error['title_error'] = "Submit your Title";
}

if(empty($detail)){
    $error['detail_error'] = "Submit your Details";
}
else if(strlen($detail) > 50){
    $error ['detail_error'] =  "Detail must be 50 characters or less";
}
if(empty($author)){
    $error['author_error'] = "Submit Author's Name";
}


//used count

if(count($error) > 0 ){

     $_SESSION['userData'] = $_REQUEST;
   
    $_SESSION['form_error'] = $error;

    header("Location: ../post_system.php");
}

else{
	
}




    <div class="card-body">


<!-- form action -->
        <form action="./cntr/controll.php" method="POST">

      <label for="title" class="form-label">Title</label>
      <input name="title"  
      value= "<?= isset($_SESSION['userData']['title']) ? $_SESSION['userData']['title'] : " " ?>"
      type="text" class="form-control my-3" placeholder="Enter the title of the Book">

      <?php
        if (isset($_SESSION['form_error']['title_error'])) {
           ?>
      <span class="text-danger"><?= $_SESSION['form_error']['title_error']?><br><br></span>
        <?php
            }
        ?>

<!-- //detail form -->

        <label for="detail" class="form-label">Detail</label>
      <input name="detail"  
      value= "<?= isset($_SESSION['userData']['detail']) ? $_SESSION['userData']['detail'] : " " ?>"
      type="text" class="form-control my-3" placeholder="Details of the Book">

      <?php
        if (isset($_SESSION['form_error']['detail_error'])) {
           ?>
      <span class="text-danger"><?= $_SESSION['form_error']['detail_error']?><br><br></span>
        <?php
            }
        ?>


<!-- //author form -->

        <label for="author" class="form-label">Author's Name</label>
      <input name="author"  
      value= "<?= isset($_SESSION['userData']['author']) ? $_SESSION['userData']['author'] : " " ?>"
      type="text" class="form-control my-3" placeholder="Author's Name">

      <?php
        if (isset($_SESSION['form_error']['author_error'])) {
           ?>
      <span class="text-danger"><?= $_SESSION['form_error']['author_error']?><br><br></span>
        <?php
            }
        ?>
 
  <!-- form ends here  -->
    
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</form>
</nav>