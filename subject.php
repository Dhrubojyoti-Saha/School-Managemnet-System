<?php
    include 'includes/pre_header.php';
    include 'includes/header.php';
    $SubjectDetails = $FlatConn -> query("SELECT * FROM `subject_tbl`  ORDER BY `id` DESC");
    
  ?>

<section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               SUBJECT
                              <div class="pull-right"><a href="add_subject.php" class="btn btn-success">Add Subject</a></div>
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Course</th>
                                        <th>Subject Name</th>
                                        <th>Details</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php 
                                $i=1;
                                while($Subject = $SubjectDetails -> fetch_assoc()){
                                    ?>
                                <tr>
                                    <td><?=$i++?></td>
                                    <td><?=$Subject['course']?></td>
                                    <td><?=$Subject['subject_name']?></td>
                                    <td><?=$Subject['details']?></td>
                                    <td><a href="edit_subject.php?id=<?=$Subject['id']?>">Edit</a> | <a href="delete_subject.php?id=<?=$Subject['id']?>">Delete</a></td>
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