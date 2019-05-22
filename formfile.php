<?php

 
    $conn=mysqli_connect("localhost", "root", "", "registrations")or die(mysql_error($conn));

    $name = $_POST['person_name'];

    if(isset($_POST['submit'])){
        $name=$_POST['person_name'];
    }

    $query=mysqli_query($conn, "INSERT INTO studentregistration(name)VALUES('$name')")or die(mysqli_error($conn));
    if($query){
        echo"Success";
        
    }else{
        echo"Failed";
    }

    $data=mysqli_query($conn, "SELECT * FROM studentregistration WHERE name='$name'")or die(mysqli_error($conn));
    $row=mysqli_num_rows($data);
    while($row=mysqli_fetch_array($data)){
        echo$name."<br>";
        header('refresh:2;url=form.html');
    }


?>