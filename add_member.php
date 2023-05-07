 <?php
    include 'includes/pre_header.php';
    include 'includes/header.php';
    include 'helper.php';

    
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
                                Add Member
                            </h2>
                        </div>
                        <div class="body">
                            <form action="add_member_success.php" method="post" onsubmit="return valid()">
                                
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                         <input type="text" class="form-control" placeholder="Member Name" name="name" id="name"  />
   
                                        </div>
                                    </div>
                                </div>
                                  <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Mobile No" name="mobile_no" id="mobile_no" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Email ID" name="email_id" id="email_id"  />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" class="form-control" placeholder="Password" name="password" id="password"  />
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    $SchoolArray = __getSchoolName($FlatConn);
                                ?>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="school_id" id="school_id" class="form-control">
                                                <option value="">School Name</option>
                                                <?php
                                                foreach($SchoolArray as $key => $value){
                                                ?>
                                                <option value="<?=$key?>" <?=($key == 1)?'Selected':''?>><?=$value?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <select name="is_active" id="is_active" class="form-control">
                                                <option value="">Status</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
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
        if($("#name").val() == ''){
            alert("Name must be require");
            $("#name").focus();
            $("#name").css("color", 'red');
            return false;
        }else if($("#mobile_no").val() == ''){
            alert("Mobile number must be require");
            $("#mobile_no").focus();
            $("#mobile_no").css("color", 'red');
            return false;
        }else if($("#email_id").val() == ''){
            alert("Email_id must be require");
            $("#email_id").focus();
            $("#email_id").css("color", 'red');
            return false;
        }else if($("#password").val() == ''){
            alert("Password id must be require");
            $("#passwotd").focus();
            $("#password").css("color", 'red');
            return false;
        }else if($("#school_id").val() == ''){
            alert("School name must be require");
            $("#school_id").focus();
            $("#school_id").css("color", 'red');
            return false;
        }else if($("#is_active").val() == ''){
            alert("Choose status Active or inactive");
            $("#is_active").focus();
            $("#is_active").css("color", 'red');
            return false;
        }
      }
  </script>

