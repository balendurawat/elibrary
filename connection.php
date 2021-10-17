<?php

   

    // Initialize a database connection
    $conn = mysqli_connect("localhost", "root", "", "elibrary");

    // Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }



    $sql = "SELECT * FROM books";
    $query = mysqli_query($conn, $sql);

    // if(isset($_REQUEST['sno'])){
    //     $id = $_REQUEST['sno'];
    //     $sql = "SELECT * FROM books WHERE sno = $id";
    //     $query = mysqli_query($conn, $sql);
    // }


    if(isset($_GET['id'])){
        
        $id = $_GET['id'];
        $que = "SELECT * FROM books WHERE sno = $id";
        
        $result = mysqli_query($conn, $que);


    }