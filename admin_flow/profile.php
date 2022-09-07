<?php
if(isset($_REQUEST['id'])){
   
    $request_user_id = $_REQUEST['id'];
    $user_role = $_REQUEST['user_role'];
    // $user_id = $_SESSION['user_id'];
    $query = mysqli_query($conn, "select * from users where id = '$request_user_id'");
    $rd = mysqli_fetch_assoc($query);

   
}
?>
<?php  include('header.php');?>
     <!-- Page Content Holder -->
   <div class="container-fluid ">
            <div class="row">
                <div class="col clearfix mt-3">
                    <ul class="nav-ul float-left" style="padding-left: 0px;">
                        <li ><a class="pages" href="" >Pages <span>/</span> </a><a class="dashboard" href="" >Profile</a></li>
        
                    </ul>
                    
                    <form class="form-inline float-right searchform">
                        <input class="form-control " type="search" placeholder="Search" aria-label="Search" style="text-indent:30px;">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <a href=""><img style="margin-left:20px"src="images/bell.png" alt=""></a>
                        <a href=""><img style="margin-left:20px; margin-right:20px " src="images/setting.png" alt=""></a>
                    </form>

                   
                </div>
                
            </div>
            <h6>Profile</h6>
            
            <section id="tabs">
                <div class="row clearfix">
                    <div class="col-md-8">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"  href="" role="tab" aria-controls="nav-home" aria-selected="true" onclick="profile()">Basic Information</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="" role="tab" aria-controls="nav-profile" aria-selected="false" onclick="center()">Nearest Farmer Centers</a>

                            </div>
                        </nav>
                    </div>
                    <div class="col-md-4">
                            <input type="button" class="btn edit" id="edit" value="Edit" >
                    </div>

                </div>
                    <div id="nav-tabContent" style="margin: 10px;">
                        <div class="" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <form action="" class="">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="fname" >Full Name</label>
                                        <input type="text" class="form-control" id="fname" value="<?php echo $rd['name']?>" name="fname" >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="email" >Email id</label>
                                        <input type="email" class="form-control" value="<?php echo $rd['email']?>" name="email" >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="number" >Phone Number</label>
                                        <input type="text" class="form-control" value="<?php echo $rd['phone_num']?>" name="number" >
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="address" >Address</label>
                                        <input type="text" class="form-control" value="<?php echo $rd['address']?>" name="address" >
                                    </div>
                                </div>
                            
                            </form>
                        </div>
                        
                        
                    </div>
                
                
               
            </section>
<!-- ./Tabs -->



<?php include 'footer.php' ;?>