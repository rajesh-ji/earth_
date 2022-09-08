<?php include('config.php');
if(!isset($_SESSION['login_id'])){
    header('Location:../farmer_flow/login.php');
}
 $login_id = $_SESSION['login_id'];
 $user_id = $_SESSION['user_id']; 
//  echo $_SESSION['login_id']; 
$query = mysqli_query($conn, "select * from users where id = '$user_id'");
$rd = mysqli_fetch_assoc($query);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/wallet.css">
    <link rel="stylesheet" href="css/profile.css">
    
   
    <title>Earth Merchant</title>
    
  </head>
  <body>
    <style>
        .dataTables_filter, .dataTables_info { display: none; }
        
    </style>

<div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header" style="padding-inline: 51px;">
                    <a href="dashboard.php"><img src="images/image 1 (1).png" alt="logo"></a>
                </div>
        
                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="admin_dashboard.php" ><img class="imageset"  width="30px"  height="30px" src="images/sidebar/home.png" alt="" >Dashboard</a>
                        
                    </li>
                    <li>
                        <a href="hemplex.php"><img class="imageset" src="images/sidebar/hexagons.png" width="30px"  height="30px" alt="">Hemplex</a>
                    </li>

                    <li>
                         <a href="farmers.php" ><img width="30px"  height="30px" class="imageset" src="images/sidebar/edit.png" alt="">Farmers</a>
                    </li>
                       
                
                    <li>
                        <a href="staff.php"><img class="imageset" width="30px"  height="30px" src="images/sidebar/black-wrench.png" alt="">Staff</a>
                       
                    </li>
                    <p class="account">ACCOUNT PAGES</p>
                    <li>
                        <a href="profile.php"><img class="imageset" width="30px"  height="30px" src="images/sidebar/user.png" alt="">Profile</a>
                       
                    </li>
                    <li>
                        <a href="../farmer_flow/signout.php"><img class="imageset" width="30px"  height="30px" src="images/sidebar/power-off.png" alt="">Signout</a>
                        
                    </li>
                </ul>
               
            </nav>

           