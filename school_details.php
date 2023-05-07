<?php
    include 'includes/pre_header.php';
    include 'includes/header.php';
    include 'helper.php';
    $SchoolDetails = $FlatConn -> query("SELECT * FROM `school_tbl` order by `id` DESC");
    $CityName = __getCityName($FlatConn);
    $CountryName = __getCountryName($FlatConn);
    $StateName = __getStateName($FlatConn);
    $DistrictName = __getDistrictName($FlatConn);
  
  ?>

<section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               School Details
                              <div class="pull-right"><a href="add_school.php" class="btn btn-success">Add School</a></div>
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>School name</th>
                                        <th>Mobile No</th>
                                        <th>Email ID</th>                                       
                                        <th>City name</th>
                                        <th>Pin code</th>
                                        <th>Grade</th>
                                        <th>Address</th>
                                        <th>Logo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                    <?php    
                                     $i = 1;
                                      while($School = $SchoolDetails -> fetch_assoc()){
                                    ?>
                                    <tr>
                                        <td><?=$i++?></td>
                                        <td><?=$School['name']?></td>
                                        <td><?=$School['mobile_no']?></td>
                                        <td><?=$School['email_id']?></td>
                                        <td><?=$CityName[$School['city_id']]?></td>
                                        <td><?=$School['pincode']?></td>
                                        <td><?=$School['grade']?></td>
                                        <td><?=$School['address']?></td>
                                        <td><img src="<?php echo 'uploads/'.$School['logo']?>" height="40px" width="40px"/></td>
                                         <td><a href="edit_school.php?id=<?=$School['id']?>">Edit</a> | <a href="delete_school.php?id=<?=$School['id']?>">Delete</a></td>
                                    </tr>   
                                    <?php
                                      }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
           
        </div>
    </section>

 <?php
    include 'includes/footer.php';
  ?>