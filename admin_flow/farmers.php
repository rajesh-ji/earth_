<?php include 'header.php' ?>
     <!-- Page Content Holder -->
   <div class="container-fluid ">
            <div class="row">
                <div class="col clearfix mt-3">
                    <ul class="nav-ul float-left" style="padding-left: 0px;">
                        <li ><a class="pages" href="" >Pages <span>/</span> </a><a class="dashboard" href="" >Farmers</a></li>
        
                    </ul>
                    
                    <form class="form-inline float-right searchform">
                        <input  class="form-control " type="search" id="myInputTextField" placeholder="Search" aria-label="Search" style="text-indent:30px;">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <a href=""><img style="margin-left:20px"src="images/bell.png" alt=""></a>
                        <a href=""><img style="margin-left:20px; margin-right:20px " src="images/setting.png" alt=""></a>
                    </form>
                    
                    <input class="btn filter_f" type="submit" name="" id="" value="Filters" >
                    <img class="" src="images/filter.png" alt="" style="margin: -29px;">
                    
                   
                   
                </div>
                
            </div>
            <h6>Farmers</h6>
            
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Location</th>
                <th>Unit Name</th>
                <th>Member Since</th>
                <th>Performance</th>
            </tr>
        </thead>
        <tbody>
        <?php $query = mysqli_query($conn, "select * from add_farmer");
                    while($rd=mysqli_fetch_assoc($query)){?>
            <tr>
                <td><?php echo $rd['id']?></td>
                <td><?php echo $rd['name']?></td>
                <td><?php echo $rd['unit_name']?></td>
                <td><?php echo $rd['loc']?></td>
                <td><?php echo $rd['mem_since']?></td>
                <td>High</td>
            </tr>
            <?php } ?>   
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
