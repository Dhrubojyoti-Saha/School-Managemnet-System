<?php
    include 'includes/pre_header.php';
    include 'includes/header.php';
    include 'helper.php';
    $MemberDetails = $FlatConn -> query("SELECT * FROM `admin_tbl` order by `id` DESC");
?>

<section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Member Details
                              <div class="pull-right"><a href="add_member.php" class="btn btn-success">Add Member</a></div>
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Member name</th>
                                        <th>Mobile No</th>
                                        <th>Email ID</th>   
                                        <th>Password</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                    <?php    
                                     $i = 1;
                                      while($Member = $MemberDetails -> fetch_assoc()){
                                    if($Member['is_active'] == 1){
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
                                        <td><?=$Member['name']?></td>
                                        <td><?=$Member['mobile_no']?></td>
                                        <td><?=$Member['email_id']?></td>
                                        <td><?=base64_decode(base64_decode($Member['password']))?></td>
                                        <td><a href="member_status_change.php?status=<?=$changestatus?>&id=<?=$Member['id']?>"<button class="btn <?=$btncls?>"/><?=$Status?></a></td>
                                        <td><a href="edit_member.php?id=<?=$Member['id']?>">Edit</a> | <a href="delete_member.php?id=<?=$Member['id']?>">Delete</a></td>
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