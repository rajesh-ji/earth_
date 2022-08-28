<?php 
    if(isset($_POST['submit'])){
        
        include('config.php');
         //echo "<script>alert('submit called');</script>";
        extract($_POST);
        $query=  mysqli_query($conn, "insert into add_staff (f_name,l_name,phone_num,email) VALUES ('$f_name','$l_name','$phone_num','$email')");
       // $count = mysqli_num_rows($query);
        if($query>0){
            //$rd = mysqli_fetch_assoc($query);
            header('Location:staff.php'); 
        }
        
    }
?>
<?php include 'header.php'; ?>
   <!-- Page Content Holder -->
   <div class="container-fluid ">
            <div class="row">
                <div class="col clearfix mt-3">
                    <ul class="nav-ul float-left" style="padding-left: 0px;">
                        <li ><a class="pages" href="" >Pages <span>/</span> </a><a class="dashboard" href="" >Staff</a></li>
                        
                    </ul>
                    
                    <form class="form-inline float-right searchform">
                        <input style="" class="form-control " type="search" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search" aria-label="Search">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <a href=""><img style="margin-left:20px"src="images/bell.png" alt=""></a>
                        <a href=""><img style="margin-left:20px; margin-right:20px " src="images/setting.png" alt=""></a>
                    </form>

                   
                </div>
                
            </div>
            <ul class="nav-ul" style="padding-left: 0px;">
                <li>
                    <a class="pages" href="" >Hemplex<span>/</span> </a><a class="dashboard" href="" >Add Staff</a>
                </li>
            </ul>
            
           
            <div class="col-md-12 unit_form">
                <div class="row progrss">
                    <div class="col-md-8 generalinfo">
                        <h4 class="info" >Add Staff</h4>
                    </div>
                    <div class="col-md-4 ">
                        <a href=""><input class="btn cancel " type="submit" name="" id="" value="cancel" ></a>
                        <input class="btn save" name="submit" type="submit" value="Save" form="my-form">
                    </div>
                </div>

                <form class="check" action="add_staff.php" method="post" id="my-form">
                <div class="row">
                    <div class="form-group col-md-4" >
                        <label for="name" >First Name</label>
                        <input type="text" class="form-control" placeholder="" name="f_name" >
                    </div>
                    <div class="form-group col-md-4" >
                        <label for="lname" >Last Name</label>
                        <input type="text" class="form-control" placeholder="" name="l_name" >
                    </div>
                    <div class="form-group col-md-4" >
                        <label for="num" >Phone Number</label>
                        <input type="text" class="form-control" placeholder="" name="phone_num" >
                    </div>
                </div>    
                <div class="row">
                    <div class="form-group col-md-4" >
                        <label for="email" >Email</label>
                        <input type="email" class="form-control" placeholder="" name="email" >
                    </div>
                    <div class="form-group col-md-4">
                        <label hidden for="pswd" >Location</label>
                        <input type="hidden" class="form-control" placeholder="" name="unit_loc" >
                    </div>
                    <div class="form-group col-md-4">
                        <label hidden for="pswd" >Number of farmers</label>
                        <input type="hidden" class="form-control" placeholder="" name="num_farmer" >
                    </div>
                </div>  
                 
            </form>
            <div><input class="btn save" name="submit" type="submit" value="Add More"></div> 
            </div>

<?php include 'footer.php'; ?>
