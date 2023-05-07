 <?php
    include 'includes/pre_header.php';
    include 'includes/header.php';
    $NoticeDetails = $FlatConn -> query("SELECT * FROM `notice_tbl` order by `id` DESC"); 
  ?>

<section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               NOTICE
                              <div class="pull-right"><a href="add_notice.php" class="btn btn-success">Add Notice</a></div>
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
                                while($Notice = $NoticeDetails -> fetch_assoc()){
                                    if($Notice['status'] == 1){
                                        $Status = 'Active';
                                        $btncls = 'btn-success';
                                        $changestatus = 0;
                                    }else{
                                        $Status = "Inactive";
                                        $btncls = 'btn-danger';
                                        $changestatus = 1;
                                    }
                                    ?>
                                    <tr>
                                        <td><?=$i++?></td>
                                        <td><?=$Notice['title']?></td>
                                        <td><?=$Notice['details']?></td>
                                        <td><?=date("d.m.Y H:i:s a", strtotime($Notice['created_at']))?></td>                                        
                                        <td><a href="notice_status_change.php?status=<?=$changestatus?>&id=<?=$Notice['id']?>"<button class="btn <?=$btncls?>"/><?=$Status?></a></td>
                                        <td><img src="<?php echo 'uploads/'.$Notice['image']?>" height="40px" width="40px"/></td>
                                        <td><a href="edit_notice.php?id=<?=$Notice['id']?>">Edit</a> | <a href="delete_notice.php?id=<?=$Notice['id']?>">Delete</a>

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