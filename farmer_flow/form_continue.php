<?php 
    if(isset($_POST['submit'])){
        
        include('config.php');
         //echo "<script>alert('submit called');</script>";
        extract($_POST);
        $query=  mysqli_query($conn, "insert into form_data (dt_rec, dt_rep, lab_num, Organic,Soluble, ph, Nitrate_ppm,
         Phosphorus_ppm, Potassium_ppm, Sulfur_ppm, Zinc_ppm, Iron_ppm, 
         Manganese_ppm,Copper_ppm,Boron_ppm,Calcium_ppm,Magnesium_ppm,
         crop_planted,Landscape,Current_crop,States_Region,Well,City,
         Pump_type,Water_Ditch,Irrigation_Type) VALUES ('$dt_rec','$dt_rep',
         '$lab_num','$Organic','$Soluble','$ph','$Nitrate_ppm','$Phosphorus_ppm','$Potassium_ppm',
         '$Sulfur_ppm','$Zinc_ppm','$Iron_ppm','$Manganese_ppm','$Copper_ppm','$Boron_ppm','$Calcium_ppm','$Magnesium_ppm','$crop_planted',
         '$Landscape','$Current_crop','$States_Region','$Well','$City','$Pump_type','$Water_Ditch','$Irrigation_Type')");
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
                        <input class="form-control " type="search" placeholder="Search" aria-label="Search" style="text-indent:30px;">
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
                    <div class="col-md-4 ">
                        <a href="farm.php"><input class="btn back float-left" type="submit" name="" id="" value="Back" ></a>
                        <input class="btn save" name="submit" type="submit" value="Save & Continue" form="my-form">
                    </div>
                </div>
                <div class="progress" style="height:5px;">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" ></div>
                    <div class="progress-bar" role="progressbar"  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <!-- form start -->
                <form class="check" method="post" action="form_continue.php" id="my-form">
                <div class="row">
                    <div class="col-md-4">
                        <label for="text">Date test received</label>
                        <input type="date" class="form-control" id="date" placeholder="" name="dt_rec" autocomplete="off">
                    </div>
                    <div class="col-md-4">
                        <label for="name" >Date test reported</label>
                        <input type="date" class="form-control" placeholder="" name="dt_rep" >
                    </div>
                    <div class="col-md-4">
                        <label for="number" >Laboratory Number</label>
                        <input type="number" class="form-control" placeholder="" name="lab_num" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="name">Organic Matter%</label>
                        <input type="text" class="form-control" placeholder="" name="Organic" >
                    </div>
                    <div class="col-md-4">
                        <label for="name" >Soluble Salts mmhos/cm</label>
                        <input type="text" class="form-control" placeholder="" name="Soluble" >
                    </div>
                    <div class="col-md-4">
                        <label for="name" >pH</label>
                        <input type="number" class="form-control" placeholder="" name="ph" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="address1" >Nitrate ppm</label>
                        <input type="text" class="form-control" placeholder="" name="Nitrate_ppm">
                    </div>
                    <div class="col-md-4">
                        <label for="address1" >Phosphorus ppm</label>
                        <input type="text" class="form-control" placeholder="" name="Phosphorus_ppm" >
                    </div>
                    <div class="col-md-4">
                        <label for="address1" >Potassium ppm</label>
                        <input type="text" class="form-control" placeholder="" name="Potassium_ppm" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="text" >Sulfur ppm</label>
                        <input type="text" class="form-control" id="name2" placeholder="" name="Sulfur_ppm" >
                    </div>
                    <div class="col-md-4">
                        <label for="text" >Zinc ppm</label>
                        <input type="text" class="form-control" placeholder="" name="Zinc_ppm">
                    </div>
                    <div class="col-md-4">
                        <label for="text" >Iron ppm</label>
                        <input type="text" class="form-control" placeholder="" name="Iron_ppm" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="company_name" >Manganese ppm</label>
                        <input type="text" class="form-control" id="company_name" placeholder="" name="Manganese_ppm" >
                    </div>
                    <div class="col-md-4">
                        <label for="company_website" >Copper ppm</label>
                        <input type="text" class="form-control" placeholder="" name="Copper_ppm" >
                    </div>
                    <div class="col-md-4">
                        <label for="company_Facebook" >Boron ppm</label>
                        <input type="text" class="form-control" placeholder="" name="Boron_ppm" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="company_name" >Calcium ppm</label>
                        <input type="text" class="form-control" id="" placeholder="" name="Calcium_ppm" >
                    </div>
                    <div class="col-md-4">
                        <label for="company_website" >Magnesium ppm</label>
                        <input type="text" class="form-control" placeholder="" name="Magnesium_ppm" >
                    </div>
                    <div class="col-md-4">
                        <label for="company_Facebook" >The last crop planted</label>
                        <input type="text" class="form-control" placeholder="" name="crop_planted" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="company_name" >Landscape</label>
                        <input type="text" class="form-control" id="" placeholder="" name="Landscape" >
                    </div>
                    <div class="col-md-4">
                        <label for="company_website" >Current crop</label>
                        <input type="text" class="form-control" placeholder="" name="Current_crop" >
                    </div>
                    <div class="col-md-4">
                        <label for="company_Facebook">United States Region acreage is located</label>
                        <input type="text" class="form-control" placeholder="" name="States_Region" >
                    </div>
                </div>
                <div><h4 style="font-family: 'Helvetica';font-style: normal;font-weight: 700;font-size: 12px;">WATER SOURCE</h4></div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="company_Instagram" >Well</label>
                        <input type="text" class="form-control" id="" placeholder="" name="Well" >
                    </div>
                    <div class="col-md-4">
                        <label for="acres">City</label>
                        <input type="text" class="form-control" placeholder="" name="City" >
                    </div>
                    <div class="col-md-4">
                        <label for="company_Instagram" >Pump type</label>
                        <input type="text" class="form-control" id="" placeholder="" name="Pump_type" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="company_Instagram" >Water Ditch</label>
                        <input type="text" class="form-control" id="" placeholder="" name="Water_Ditch" >
                    </div>
                </div>  
                <div class="row">
                    <div class="col-md-4">
                        <label for="acres" >Irrigation Type</label>
                        <input type="text" class="form-control" placeholder="" name="Irrigation_Type">
                    </div>
                </div>
                
            </form>
            

              </div>


	

       


<?php include 'footer.php'; ?>