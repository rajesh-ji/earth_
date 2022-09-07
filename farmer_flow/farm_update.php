<?php include('config.php');
if(!isset($_SESSION['login_id'])){
    header('Location: login.php');
}
 $login_id = $_SESSION['login_id'];
 $user_id = $_SESSION['user_id']; 

if (isset($_POST['mgs'])) {
    extract($_POST);
    print_r($_POST);
    $id = $_POST['id'];
   
   $sql1 = mysqli_query($conn,"UPDATE `gen_info` SET `name`='$name',`phone_num`='$phone_num',`email`='$email',`address`='$address',`acreage_add`='$acreage_add',`sec_cont`='$sec_cont',
   `phone_sec`='$phone_sec',`email_sec`='$email_sec',`farm_name`='$farm_name',`farm_web`='$farm_web',`farm_fb`='$farm_fb',`farm_insta`='$farm_insta',
   `num_acres`='$num_acres' WHERE id='$id'");
   if ($sql1) {
       alert('success');
   }else
   {
    alert('error');
   }
      
}
  
?>