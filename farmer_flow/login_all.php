<?php 
include('config.php');
if(!isset($_SESSION['login_id'])==''){
    header('Location: dashbord.php');
}?>
<?php
    if(isset($_POST['submit'])){
        
        
        // echo "<script>alert('submit called');</script>";
        extract($_POST);
       // print_r($_POST);
       // die;
     // echo $sql = "select *from users where email = '$email' and role_id  = '1'  ";
       
        
        $result = mysqli_query($conn, "select *from users where email = '$email' and role_id  = '1' ");
        $count = mysqli_num_rows($result);
       
        if($count>0){
            $rd = mysqli_fetch_assoc($result);
             // print_r($rd);
            if($rd['password']==$password){
               
          $_SESSION['login_id'] = $rd['status'];
          $_SESSION['user_id'] = $rd['id'];
          // echo $_SESSION['login_id'];
          // echo $_SESSION['user_id'];
        // $last_login = date('Y-m-d h:i:s');
        // $id = $row['id'];
        // $query = mysqli_query($conn,"update users set last_login = '$last_login' where id = '$id'");
               header('Location: dashbord.php');
             die;
            }else{
                $_SESSION['error'] = "Password missmatch !";
            }
            
        }
        else{
           $_SESSION['error'] =  "cann't find details with this username";
        }
          
    }
    

?>