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
                                Add Subject
                            </h2>
                        </div>
                        <div class="body">
                            <form action="add_subject_success.php" method="post" onsubmit="return valid()">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="course" id="course" class="form-control">
                                                <option value="" >Select Course</option>
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
                                            <input type="text" class="form-control" placeholder="Subject Name" name="subject_name" id="subject_name"  />
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
        if($("#subject_name").val() == ''){
            alert("Subject must be require");
            $("#subject_name").focus();
            $("#subject_name").css("color", 'red');
            return false;
        }else if($("#course").val() == ''){
            alert("Select any course");
            $("#course").focus();
            $("#course").css("color", 'red');
            return false;
        }else if($("#details").val() == ''){
            alert("Details must be require");
            $("#details").focus();
            $("#details").css("color", 'red');
            return false;
        }
      }
  </script>

