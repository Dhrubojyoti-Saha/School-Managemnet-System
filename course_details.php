<?php
    include 'includes/pre_header.php';
    include 'includes/header.php';
    $course_details = $FlatConn -> query("SELECT * FROM `course_details_tbl` ORDER BY `id` DESC");
    
  ?>

<section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               COURSE
                              <div class="pull-right"><a href="add_course.php" class="btn btn-success">Add Course</a></div>
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Title</th>
                                        <th>Details</th>
                                        <th>Course Duration</th>
                                        <th>Course Fees</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                    <?php
                                    $i=1;
                                    while($CourseDetails = $course_details -> fetch_assoc()){
                                    ?>
                                <tr>
                                    <td><?=$i++?></td>
                                    <td><?=$CourseDetails['title']?></td>
                                    <td><?=$CourseDetails['details']?></td>
                                    <td><?=$CourseDetails['course_duration']?></td>
                                    <td><?=number_format($CourseDetails['course_fees'], 2)?></td>
                                    <td><a href="edit_course_details.php?id=<?=$CourseDetails['id']?>">Edit</a> | <a href="delete_course_details.php?id=<?=$CourseDetails['id']?>">Delete</a></td>
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