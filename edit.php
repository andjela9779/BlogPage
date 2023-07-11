<?php

    include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Blog</title>
</head>
<body>

   <div class="container mt-5">
        <?php foreach($query as $q){ ?>
            <form method="POST"> 
                <!-- we need the id to know which post to update but we don't want it to be visible -->
                <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                <!-- here we want to see the previous form input from when the post was first being created - so actually it's current values, so that we know what to change
                that's why we have to add a value to the input elements and through php we echo the current title -->
                <input type="text" placeholder="Blog Title" class="form-control my-3 bg-dark text-white text-center" name="title" value="<?php echo $q['title']?>">
                <textarea name="content" class="form-control my-3 bg-dark text-white" cols="30" rows="10"><?php echo $q['content']?></textarea>
                <!-- when we click this button, the current data in the database should be updated-->
                <button class="btn btn-dark" name="update">Update</button>
            </form>
        <?php } ?>    
   </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>