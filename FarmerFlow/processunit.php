<?php include 'header.php' ?>
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
                    
                   <a href="addunit.php"> <input type="button" class="btn add_unit" id="edit" value="Add Unit" ></a>
                    <input class="btn filter" type="submit" name="" id="" value="Filter" >
                    <img class="" src="images/filter.png" alt="" style="margin: -29px;">
                    
                   
                   
                </div>
                
            </div>
            <h6>Processing Units</h6>
            
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Unit Name</th>
                <th>Location</th>
                <th>Number of Farmers</th>
                <th>Member Since</th>
                <th>Performance</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
                <td><i class="fa fa-ellipsis-v" aria-hidden="true" data-toggle="modal" data-target="#myModal"></i></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>$170,750</td>
                <td><i class="fa fa-ellipsis-v" aria-hidden="true"></i></td>
            </tr>
            <tr>
                <td>3</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
                <td><i class="fa fa-ellipsis-v" aria-hidden="true"></i></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>$170,750</td>
                <td><i class="fa fa-ellipsis-v" aria-hidden="true"></i></td>
            </tr>
            <tr>
                <td>5</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
                <td><i class="fa fa-ellipsis-v" aria-hidden="true"></i></td>
            </tr>
            <tr>
                <td>6</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>$170,750</td>
                <td><i class="fa fa-ellipsis-v" aria-hidden="true"></i></td>
            </tr>
            
          
        </tbody>
       
    </table>
<!-- ./Tabs -->
 <!-- Modal -->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="btn" data-dismiss="modal">Attach Farmer</button><br>
          <button type="button" class="btn" style="color:red;">Delete Unit</button>
        </div>
      </div>
    </div>
  </div>


<?php include 'footer.php' ?>
