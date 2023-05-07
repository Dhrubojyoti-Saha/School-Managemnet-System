<?php
    include 'includes/pre_header.php';
    include 'includes/header.php';
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
                                Add Course
                            </h2>
                        </div>
                        <div class="body">
                            <form action="add_course_success.php" method="post" onsubmit="return valid()">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Title" id="title" name="title" />
                                        </div>
                                    </div>
                                </div>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Details" name="details" id="details"  />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Course Duration" name="course_duration" id="course_duration"  />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Course Fees" name="course_fees" id="course_fees"  />
                                        </div>
                                    </div>
                                </div>
                                  
                                 
                                <div>
                                    <input type="submit" name="submit" id="submit" class="btn btn-success pull-right" value="Add New"/>
                                </div>
                            </div>
                            </div>
                            </form>
                           
        </div>
    </section>

<?php
    include 'includes/footer.php';
  ?>
  <script>
      function valid(){
        if($("#title").val() == ''){
            alert("Title must be require");
            $("#title").focus();
            $("#title").css("color", 'red');
            return false;
        }else if($("#details").val() == ''){
            alert("Details must be require");
            $("#details").focus();
            $("#details").css("color", 'red');
            return false;
        }else if($("#course_duration").val() == ''){
            alert("Course Duration must be require");
            $("#course_duration").focus();
            $("#course_duration").css("color", 'red');
            return false;
        }else if($("#course_fees").val() == ''){
            alert("Course Fees must be require");
            $("#course_fees").focus();
            $("#course_fees").css("color", 'red');
            return false;
        }
      }
  </script>

