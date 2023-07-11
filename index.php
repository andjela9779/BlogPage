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

        <!-- Creating an alert when the blog is successfully saved inside logic.php-->
        
        <?php if(isset($_REQUEST['info'])){ ?>  <!-- info parameter that we added to the success message in logic.php-->
            <?php if($_REQUEST['info'] == "added"){?>  <!-- if the value of the parameter is added (inside the url)-->
                <div class="alert alert-success" role="alert">
                    Post has been added successfully.
                </div>
                <!-- same thing if the post was updated successfully-->
            <?php } else if($_REQUEST['info'] == "updated") { ?>
                <div class="alert alert-success" role="alert">
                    Post had been updated successfully.
                </div>

                <?php } else if($_REQUEST['info'] == "deleted") { ?>
                <div class="alert alert-danger" role="alert">
                    Post had been deleted successfully.
                </div>
        <?php } ?>
        <?php } ?>

        <!-- create a new post button that takes us to the create.php page where the form is -->
        <div class="text-center">
            <a href="create.php" class="btn btn-outline-dark">Create a new post</a>
        </div>

        <!-- Display posts from database using the bootstrap cards for displaying the content -->
        <div class="row">
            <!-- we are using a for each loop, to display each input from the database-->
            <?php foreach($query as $q){ ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $q['title'];?></h5>
                            <p class="card-text"><?php echo substr($q['content'], 0, 50);?>...</p>
                            <!-- we use this to pass a particular id of the blog post that we want to display, to view.php-->
                            <a href="view.php?id=<?php echo $q['id']?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
       
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>


