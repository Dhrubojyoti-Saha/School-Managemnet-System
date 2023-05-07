<?php
    include 'includes/pre_header.php';
    include 'includes/header.php';
    $CourseId = $_GET['id'];
    $query = $FlatConn -> query("SELECT * FROM `course_details_tbl` WHERE `id` = '".$CourseId."'");
    $CourseDetails = $query ->  fetch_assoc();
  ?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                &nbsp;
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit Course
                            </h2>
                        </div>
                        <div class="body">
                            <form action="edit_course_success.php" method="post" onsubmit="return valid()">
                                <input type="hidden" name="update_id" id="update_id" value="<?=$CourseDetails['id']?>"/>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Title" id="title" name="title"  value="<?=$CourseDetails['title']?>"/>
                                        </div>
                                    </div>
                                </div>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Details" name="details" id="details"  value="<?=$CourseDetails['details']?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Course Duration" name="course_duration" id="course_duration"  value="<?=$CourseDetails['course_duration']?>" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Course Fees" name="course_fees" id="course_fees" value="<?=$CourseDetails['course_fees']?>" />
                                        </div>
                                    </div>
                                </div>
                                  
                                 
                                <div>
                                    <input type="submit" name="submit" id="submit" class="btn btn-success pull-right" value="Update"/>
                                </div>
                            </div>
                            </div>
                            </form>
                           
        </div>
    </section>

<?php
    include 'includes/footer.php';
  ?>

