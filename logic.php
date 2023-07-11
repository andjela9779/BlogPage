<?php

    // Don't display server errors 
    ini_set("display_errors", "off");

    // Initialize a database connection - host name, username, password of the mysql account, database name
    $conn = mysqli_connect("localhost", "root", "", "blogpage");

    // Here we see if the connection was established or not - destroy if it's not possible to create a connection
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }

    // Get data to display on index page - we use this to actually display the data from the database in a new post
    $sql = "SELECT * FROM data";
    $query = mysqli_query($conn, $sql); // whatever we get from selecting data from the table - we save it to the query variable

    // Create a new post - checking if there is a post added, if the submit button was clicked - then check if there is new data in the table
    if(isset($_REQUEST['new_post'])){
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        // insert that submitted data into the database, we aren't adding id because it is automatically incremented

        $sql = "INSERT INTO data(title, content) VALUES('$title', '$content')";
        mysqli_query($conn, $sql);

        echo $sql;
        // we want to be redirected to the home page after saving the new blog
        header("Location: index.php?info=added");  // message displayed if it's saved successfully
        // then we can access the info parameter using the request method since we are getting it from the url
        exit();  // exit the if condition
    }

    // TO DISPLAY A FULL TEXT OF A BLOG POST IN VIEW.PHP - Get post data based on id.
    // first we check if the url actually has a variable called id in it
    // if it does - then that means that we are trying to access a particular blog post
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        // query to actually retrieve the data from the table that has that specific id
        $sql = "SELECT * FROM data WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post - if the delete button is clicked, if we have that inside the url - delete from data where id is equal to the provided one
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM data WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: index.php?info=deleted");
        exit();
    }

    // Update a post - if the update button is clicked (if the url consists of update), get the variables from the input and update the row inside the database with the new data
    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "UPDATE data SET title = '$title', content = '$content' WHERE id = $id";
        mysqli_query($conn, $sql);

        // redirect to the home page

        header("Location: index.php?info=updated");
        exit();
    }

?>
