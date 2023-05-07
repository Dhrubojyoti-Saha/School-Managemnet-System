<?php
    include 'includes/pre_header.php';
    include 'includes/header.php';
    $ImageDetails = $FlatConn -> query("SELECT * FROM `gallery_tbl`  ORDER BY `id` DESC");
    
  ?>

<section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               GELLARY
                              <div class="pull-right"><a href="add_image.php" class="btn btn-success">Add Image</a></div>
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php 
                                $i=1;
                                while($Images = $ImageDetails -> fetch_assoc()){
                                    ?>
                                <tr>
                                    <td><?=$i++?></td>
                                    <td><?=$Images['name']?></td>
                                    <td><img src="<?php echo 'uploads/'.$Images['image']?>" height="40px" width="40px"/></td>
                                    <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                                </tr>
                                <?php
                                }
                                ?>
                               
                                <tbody>
                                   
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