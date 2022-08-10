<?php include 'header.php'; ?>
   <!-- Page Content Holder -->
   <div class="container-fluid ">
            <div class="row">
                <div class="col clearfix mt-3">
                    <ul class="nav-ul float-left" style="padding-left: 0px;">
                        <li ><a class="pages" href="" >Pages <span>/</span> </a><a class="dashboard" href="" >Insert Form</a></li>
                        
                    </ul>
                    
                    <form class="form-inline float-right searchform">
                        <input style="" class="form-control " type="search" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search" aria-label="Search">
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
                        <a href="form_continue.php"><input class="save float-right" type="submit" value="Save & Continue" ></a>
                    </div>
                </div>
                <div class="progress" style="height:5px;">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" ></div>
                    <div class="progress-bar" role="progressbar"  aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

            <form class="check" action="">
                <div class="row">
                    <div class="form-group col-md-4" >
                        <label for="name" >Primary Contact Name</label>
                        <input type="text" class="form-control" id="name" placeholder="" name="name" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="pswd" >Phone Number</label>
                        <input type="number" class="form-control" placeholder="" name="number" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="pswd" >Email address</label>
                        <input type="email" class="form-control" placeholder="" name="email">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-8" >
                        <label for="address" >Address</label>
                        <input type="text" class="form-control" placeholder="" name="address" >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="address1" >Acreage address/location if different from address above</label>
                        <input type="text" class="form-control" placeholder="" name="address1">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="contact2" >Contact secondary</label>
                        <input type="text" class="form-control" id="name2" placeholder="" name="name2" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="number2" >Phone Number secondary</label>
                        <input type="number" class="form-control" placeholder="" name="number2" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email" >Email address secondary</label>
                        <input type="email" class="form-control" placeholder="" name="email2">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="company_name" >Farm/company name</label>
                        <input type="text" class="form-control" id="company_name" placeholder="" name="company_name" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="company_website">Farm/company website address</label>
                        <input type="text" class="form-control" placeholder="" name="company_website" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="company_Facebook">Farm/company Facebook handle</label>
                        <input type="text" class="form-control" placeholder="" name="company_Facebook" >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="company_Instagram">Farm/company Instagram handle</label>
                        <input type="text" class="form-control" id="company_Instagram" placeholder="" name="company_Instagram" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="acres">Number of Acres? 50 minimum required</label>
                        <input type="number" class="form-control" placeholder="" name="acres" >
                    </div>
                </div>
                
            </form>

            </div>


	

       


<?php include 'footer.php'; ?>