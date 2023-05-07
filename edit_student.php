<?php
    include 'includes/pre_header.php';
    include 'includes/header.php';
    $StudentId = $_GET['id'];
    $query = $FlatConn -> query("Select * FROM `student_tbl` WHERE `id`= '".$StudentId."'");
    $StudentDetails = $query -> fetch_assoc();
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
                                Update Student data
                            </h2>
                        </div>
                        <div class="body">
                            <form action="update_student_success.php" method="post" onsubmit="return valid()">
                            <input type="hidden" name="update_id" id="update_id" value="<?=$StudentDetails['id']?>"/>	
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Student name" id="name" name="name" value="<?=$StudentDetails['name']?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Mobile No" id="mobile_no" name="mobile_no" value="<?=$StudentDetails['mobile_no']?>"/>
                                        </div>
                                    </div>
                                </div>
                                  <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Email ID" name="email_id" id="email_id" value="<?=$StudentDetails['email_id']?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Address" id="address" name="address" value="<?=$StudentDetails['address']?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Subject Name" id="subject_name" name="subject_name" value="<?=$StudentDetails['subject']?>"  />
                                        </div>
                                    </div>
                                </div>
                                  
                                 <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" class="form-control" placeholder="password" id="password" name="password"  value="<?=$StudentDetails['password']?>"/>
                                        </div>
                                    </div>
                                </div> 
                                   <div>
                                <input type="submit" name="submit" id="submit" class="btn btn-success pull-right" value="Update"/>
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
        if($("#name").val() == ''){
            alert("Student name must be require");
            $("#name").focus();
            $("#name").css("color", 'red');
            return false;
        }else if($("#mobile_no").val() == ''){
            alert("Mobile number must be require");
            $("#mobile_no").focus();
            $("#mobile_no").css("color", 'red');
            return false;
        }else if($("#email_id").val() == ''){
            alert("Email id must be require");
            $("#email_id").focus();
            $("#email_id").css("color", 'red');
            return false;
        }else if($("#address").val() == ''){
            alert("Address must be require");
            $("#address").focus();
            $("#address").css("color", 'red');
            return false;
        }else if($("#subject_name").val() == ''){
            alert("Subject name must be require");
            $("#subject_name").focus();
            $("#subject_name").css("color", 'red');
            return false;
        }else if($("#password").val() == ''){
            alert("Password must be require");
            $("#password").focus();
            $("#password").css("color", 'red');
            return false;
        }
      }
  </script>

