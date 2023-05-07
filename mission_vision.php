   <?php
    include 'includes/pre_header.php';
    include 'includes/header.php';
    $MissionVisionDetails = $FlatConn -> query("SELECT * FROM `mission_vision_tbl` order by `id` DESC");

    
  ?>

<section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               MISSION & VISION
                              <div class="pull-right"><a href="add_mission_vision.php" class="btn btn-success">Add Mission & vision</a></div>
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Title</th>
                                        <th>Details</th>
                                        <th>Upload Date</th>
                                        <th>Status</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php 
                                $i = 1;
                                while($MissionVision = $MissionVisionDetails -> fetch_assoc()){
                                    ?>
                                    <tr>
                                        <td><?=$i++?></td>
                                        <td><?=$MissionVision['title']?></td>
                                        <td><?=$MissionVision['details']?></td>
                                        <td><?=$MissionVision['created_at']?></td>
                                        <td><?=$MissionVision['status']?></td>
                                        <td><img src="<?php echo 'uploads/'.$MissionVision['image']?>" height="40px" width="40px"/></td>
                                        <td><a href="edit_mission_vission.php?id=<?=$MissionVision['id']?>">Edit</a> | <a href="delete_mission_vission.php?id=<?=$MissionVision['id']?>">Delete</a>

                                        </td>
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