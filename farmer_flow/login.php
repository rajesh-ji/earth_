<?php 
include('config.php');
if(!isset($_SESSION['login_id'])==''){
    header('Location: login.php');
}?>
<?php
    if(isset($_POST['submit'])){
        
        
        // echo "<script>alert('submit called');</script>";
        extract($_POST);
       // print_r($_POST);
       // die;
     // echo $sql = "select *from users where email = '$email' and role_id  = '2'  ";
       
        
        $result = mysqli_query($conn, "select * from users where email = '$email' and role_id  = '$login_with' ");
        $count = mysqli_num_rows($result);
       
        if($count>0){
            $rd = mysqli_fetch_assoc($result);
         
            if($rd['password']==$password){
                if($rd['role_id']==1){   
                    $_SESSION['login_id'] = $rd['role_id'];
                    $_SESSION['user_id'] = $rd['id'];
                    // echo $_SESSION['login_id'];
                    // echo $_SESSION['user_id'];
                        header('Location:dashboard.php');
                        // die;
            }else{
                if ($rd['role_id']==2){
                    $_SESSION['login_id'] = $rd['role_id'];
                    $_SESSION['user_id'] = $rd['id'];
                    header('Location:../admin_flow/admin_dashboard.php');
                    die;
                }
            }
        }
            else{
                $_SESSION['error'] = "Password missmatch !";
            }
            
        }
        else{
           $_SESSION['error'] =  "can't find details with this username!";
        }
          
    }
    

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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <!-- <link rel="stylesheet" href="css/wallet.css"> -->
    <!-- <link rel="stylesheet" href="css/profile.css"> -->
    <title>Earth Merchant</title>
  </head>
  <body>
    
<div class="container-fluid">
        <div class="col-md-6" style="left: 50px;">
            <div class="logo">
                    <img src="images/image 1 (1).png" alt="image not found">
                    <p class="hemp">Process of Making Hemp</p>
            </div>
            <div class="filecheck" style="margin-top: 66px;">
            <div class="fix">
                <img src="images/MicrosoftTeams-image (8).png" alt="image not found" style=""/>
                
                <p >In collaboration with student teams at Oregon  State University and University of Tennessee (UT),  are working to reduce carbon dioxide (CO2) from the environment (specifically, air and land).</p>
            </div>

            <div class="fix1">
                <img src="images/MicrosoftTeams-image (10).png" alt="image not found"/>
                
                <p>In collaboration with student teams at Oregon  State University and University of Tennessee (UT), are working to reduce carbon dioxide (CO2) from the environment (specifically, air and land).</p>
            </div>   
            <div class="fix2">
                <img src="images/MicrosoftTeams-image (9).png" alt="image not found"/>
            
                <p>In collaboration with student teams at Oregon  State University and University of Tennessee (UT),  are working to reduce carbon dioxide (CO2) from the environment (specifically, air and land).</p>  
            </div>
            </div>
        </div>
        
        <!--signin div -->
        <div class="col-md-6 loginutside float-right " style="background-color:#fafafa;">
            <div class="inside">
            <p class="hello">Hello!</p>
            <p class="signin">Signin to your account</p>
            <form class="form_data" action="login.php" method="POST">
            <?php if(isset($_SESSION['error'])){
                        echo "<p style='color:red;'>".$_SESSION['error']."</p>";
                        $_SESSION['error'] = '';
                    }?>
                <div class="form-group">
                    <label for="login" class="" style="color: #BAB9B9;">Select Usertype</label>
                    <select name="login_with" class="form-control login_with" style="background:white;">
                        <option value="">select</option>
                        <option value="1">Farmer</option>
                        <option value="2">Admin</option>
                        <option value="3">Hemplex</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Email" class="" style="color: #BAB9B9;" >Email</label>
                    <input type="email" name="email" class="form-control " placeholder="Enter email..." required>
                </div>
                <div class="form-group">
                    <label for="password" class="" style="color: #BAB9B9;">Password</label>
                    <div style="position: relative;display: flex;">
                    <input type="password" name="password" id="id_password" class="form-control " placeholder="Enter password..." required >
                    <div class="password-visibility"><i class="fa fa-eye" id="togglePassword" style="color: #A7BF58;"></i></div>
                </div> 
                </div>
                <div class="forgot"><p>Forgot your password?<a href="reset_pass.php" style="color:#A7BF58">Reset here</a></p></div>
                <div class="form-group remember">
                    <label> <input type="checkbox" name="remember" value="remember" >  Remember Me</label>
                </div>
                <div class="form-group">
                    <input class="btn" type="submit" name="submit" id="login" value="Login">
                </div>
                <div class="forgot"><p >New to EM? <a href="signup.php" style="color:#A7BF58">Create Account</a></p></div>
            </form>
            </div>
        </div>
</div>
<script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#id_password");

        togglePassword.addEventListener("click", function (e) {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("fa-eye-slash");
        });
    </script>
</body>
</html>