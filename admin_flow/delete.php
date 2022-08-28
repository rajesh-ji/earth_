<?php 
    if(isset($_POST['submit'])){
		include 'config.php';
        extract($_POST);
        $userid = $_POST['delete_id'];

        $query = "delete from add_unit where id= '$userid' ";
        $result = mysqli_query($conn, $query);
    }
?>