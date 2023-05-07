 <?php
    include 'includes/pre_header.php';
    include 'includes/header.php';
    $subjectId = $_GET['id'];
    $query = $FlatConn -> query("SELECT * FROM `subject_tbl` WHERE `id` = '".$subjectId."'");
    $SubjectDetails = $query ->  fetch_assoc();
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
                                Add Subject
                            </h2>
                        </div>
                        <div class="body">
                            <form action="edit_subject_success.php" method="post" onsubmit="return valid()">
                                <input type="hidden" name="update_id" id="update_id" value="<?=$SubjectDetails['id']?>"/>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="course" id="course" class="form-control">
                                                <option value="<?=$SubjectDetails['course']?>" >Select Course</option>
                                                <option value="Diploma" >Diploma</option>
                                                <option value="Btech" >Btech</option>
                                                <option value="Mtech">Mtech</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Subject Name" name="subject_name" id="subject_name" value="<?=$SubjectDetails['subject_name']?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Details" name="details" id="details" value="<?=$SubjectDetails['details']?>" />
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

