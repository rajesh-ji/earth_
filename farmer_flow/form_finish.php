<?php 
    if(isset($_POST['submit'])){
        
        include('config.php');
         //echo "<script>alert('submit called');</script>";
        extract($_POST);
        // $Equipment = $_POST['Equipment'];
        $query=  mysqli_query($conn, "insert into form_data (erosion, Pest, Costs_Water, Costs_Electric,Costs_average, Costs_overall, Equipment,
        Custom_equip, facility, wifi, Cell_Service, radio) VALUES ('$erosion','$Pest','$Costs_Water','$Costs_Electric','$Costs_average',
        '$Costs_overall','$Equipment','$Custom_equip','$facility','$wifi','$Cell_Service','$radio')");
       // $count = mysqli_num_rows($query);
        if($query>0){
            //$rd = mysqli_fetch_assoc($query);
            header('Location:form_finish.php'); 
        }
        
    }
?>
<?php include 'header.php'; ?>
   <!-- Page Content Holder -->
   <div class="container-fluid ">
            <div class="row">
                <div class="col clearfix mt-3">
                    <ul class="nav-ul float-left" style="padding-left: 0px;">
                        <li ><a class="pages" href="" >Pages <span>/</span> </a><a class="dashboard" href="" >Insert Form</a></li>
                        
                    </ul>
                    
                    <form class="form-inline float-right searchform">
                        <input  class="form-control " type="search" placeholder="Search" aria-label="Search" style="text-indent:30px;">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <a href=""><img style="margin-left:20px"src="images/bell.png" alt=""></a>
                        <a href=""><img style="margin-left:20px; margin-right:20px " src="images/setting.png" alt=""></a>
                    </form>

                   
                </div>
                
            </div>
            <h6>Edit/Update Farm</h6>

            <div class="col-md-12 form">
                <div class="row progrss">
                    <div class="col-md-8 generalinfo">
                    <h4 ><a href="" class="info" >General Information/</a><a href="" class="heading1" >heading/</a><a href="" class="heading1" >heading</a></h4>
                    </div>
                    <div class="col-md-4">
                        <a href="form_continue.php"><input class="btn back float-left mr-0" type="submit" name="" id="" value="Back" ></a>
                        <input class="btn save" name="submit" type="submit" value="Save & Submit" form="my-form">
                    </div>
                </div>
                <div class="progress" style="height:5px;">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" ></div>
                    <div class="progress-bar" role="progressbar"  aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <form class="check" action="form_finish.php" method="post" id="my-form">
                <div class="row">
                    <div class="col-md-8">
                        <label for="name" >Any erosion Prevention Measures taken</label>
                        <input type="text" class="form-control" id="name" placeholder="" name="erosion">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="name" >Pest measures taken</label>
                        <input type="text" class="form-control" placeholder="" name="Pest">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="address1" >Daily operational Costs Water ($$)</label>
                        <input type="text" class="form-control" placeholder="" name="Costs_Water">
                    </div>
                    <div class="col-md-4">
                        <label for="address1">Daily operational Costs Electric ($$)</label>
                        <input type="text" class="form-control" placeholder="" name="Costs_Electric">
                    </div>
                    <div class="col-md-4">
                        <label for="address1">Daily operational Costs average ($$)</label>
                        <input type="text" class="form-control" placeholder="" name="Costs_average">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="text">Daily Production Costs overall ($$)</label>
                        <input type="text" class="form-control" id="name2" placeholder="" name="Costs_overall">
                    </div>
                    <div class="col-md-4">
                        <label for="text">Type of Equipment</label>
                        <select type="text" class="form-control" name="Equipment" id="">
                            <option value="">Choose</option>
                            <option value="">demo2</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="text" >Custom Combining Equipment</label>
                        <input type="text" class="form-control" placeholder="" name="Custom_equip" >
                    </div>
                </div>
               
                
                <div class="row">
                    <div class="col-md-8">
                        <label for="company_name" >Pick up facility if other than farm address</label>
                        <input type="text" class="form-control" id="" placeholder="" name="facility" >
                    </div>
                </div>
                <div><h4 style="font-family: 'Helvetica';font-style: normal;font-weight: 700;font-size: 12px;">COMMUNICATION NETWORK</h4></div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="text">Wiﬁ</label>
                        <select type="text"  class="form-control" name="wifi" id="">
                            <option value="">Choose</option>
                            <option value="">demo2</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="text" >Cell Service</label>
                        <select type="text" class="form-control" name="Cell_Service" id="" >
                            <option value="">Choose</option>
                            <option value="">demo2</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8" >
                        <p style="">Have you worked with RFID technology before?</p>
                        <input name="18+" value="yes" id="18" type="radio">Yes
                        <input name="18+" value="No" id="bel" type="radio">No
                    </div>
                </div>  
               
                
            </form>

            </div>


	

       


<?php include 'footer.php'; ?>