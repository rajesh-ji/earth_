<?php include 'header.php'; ?>
   <!-- Page Content Holder -->
   <div class="container-fluid ">
            <div class="row">
                <div class="col clearfix mt-3">
                    <ul class="nav-ul float-left" style="padding-left: 0px;">
                        <li ><a class="pages" href="" >Pages <span>/</span> </a><a class="dashboard" href="" >Processing Units</a></li>
                        
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
                    <a class="pages" href="" >Processing Units <span>/</span> </a><a class="dashboard" href="" >Add Unit</a>
                </li>
            </ul>
            
           
            <div class="col-md-12 unit_form">
                <div class="row progrss">
                    <div class="col-md-8 generalinfo">
                        <h4 class="info" >Add Unit</h4>
                    </div>
                    <div class="col-md-4 ">
                        <a href=""><input class="btn cancel " type="submit" name="" id="" value="cancel" ></a>
                        <input class="btn save" name="submit" type="submit" value="Save" form="my-form">
                    </div>
                </div>

                <form class="check" action="" method="post" id="my-form">
                <div class="row">
                    <div class="form-group col-md-4" >
                        <label for="name" >Unit Name</label>
                        <input type="text" class="form-control" name="name" placeholder="" name="name" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="pswd" >Location</label>
                        <input type="text" class="form-control" placeholder="" name="number" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="pswd" >Number of farmers</label>
                        <input type="email" class="form-control" placeholder="" name="email" >
                    </div>
                </div>  
                 
            </form>
            <div><input class="btn save" name="submit" type="submit" value="Add More"></div> 
            </div>

<?php include 'footer.php'; ?>
