<?php 
    if(isset($_POST['submit'])){
        
        include('config.php');
         //echo "<script>alert('submit called');</script>";
        extract($_POST);
        $query=  mysqli_query($conn, "insert into add_farmer (name,unit_name,loc) VALUES ('$name','$unit_name','$loc')");
       // $count = mysqli_num_rows($query);
        if($query>0){
            //$rd = mysqli_fetch_assoc($query);
            header('Location:farmers.php'); 
        }
        
    }
?>
<?php include 'header.php'; ?>
   <!-- Page Content Holder -->
   <div class="container-fluid ">
            <div class="row">
                <div class="col clearfix mt-3">
                    <ul class="nav-ul float-left" style="padding-left: 0px;">
                        <li ><a class="pages" href="" >Pages <span>/</span> </a><a class="dashboard" href="" >Processing Units</a></li>
                        
                    </ul>
                    
                    <form class="form-inline float-right searchform">
                        <input  class="form-control " type="search" placeholder="Search" aria-label="Search" style="text-indent:30px;">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <a href=""><img style="margin-left:20px"src="images/bell.png" alt=""></a>
                        <a href=""><img style="margin-left:20px; margin-right:20px " src="images/setting.png" alt=""></a>
                    </form>

                   
                </div>
                
            </div>
            <ul class="nav-ul" style="padding-left: 0px;">
                <li>
                    <a class="pages" href="" >Processing Units <span>/</span> </a><a class="dashboard" href="" >Add Farmer</a>
                </li>
            </ul>
            
           
            <div class="col-md-12 unit_form">
                <div class="row progrss">
                    <div class="col-md-8 generalinfo">
                        <h4 class="info" >Add Farmer</h4>
                    </div>
                    <div class="col-md-4 ">
                        <a href=""><input class="btn cancel " type="submit" name="" id="" value="cancel" ></a>
                        <input class="btn save" name="submit" type="submit" value="Save" form="my-form">
                    </div>
                </div>

                <form class="check" action="add_farmers.php" method="post" id="my-form">
                <div class="row">
                    <div class="form-group col-md-4" >
                        <label for="name" >Farmer Name</label>
                        <input type="text" class="form-control" name="name" placeholder="" name="name" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="pswd" >Unit Name</label>
                        <input type="text" class="form-control" placeholder="" name="unit_name" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="pswd" >Location</label>
                        <input type="text" class="form-control" placeholder="" name="loc" >
                    </div>
                </div>  
                 
            </form>
            <div><input class="btn save" name="submit" type="submit" value="Add More"></div> 
            </div>

<?php include 'footer.php'; ?>
