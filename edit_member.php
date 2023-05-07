 <?php
    include 'includes/pre_header.php';
    include 'includes/header.php';
    include 'helper.php';
    
    $MemberId = $_GET['id'];
    $query = $FlatConn -> query("SELECT * FROM `admin_tbl` WHERE `id` = '".$MemberId."'");
    $MemberDetails = $query ->  fetch_assoc();
    
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
                                Edit Member
                            </h2>
                        </div>
                        <div class="body">
                            <form action="edit_member_success.php" method="post" onsubmit="return valid()">
                                <input type="hidden" name="update_id" id="update_id" value="<?=$MemberDetails['id']?>"/>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                         <input type="text" class="form-control" placeholder="Member Name" name="name" id="name" value="<?=$MemberDetails['name']?>" />
   
                                        </div>
                                    </div>
                                </div>
                                  <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Mobile No" name="mobile_no" id="mobile_no" value="<?=$MemberDetails['mobile_no']?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Email ID" name="email_id" id="email_id" value="<?=$MemberDetails['email_id']?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" class="form-control" placeholder="Password" name="password" id="password" value="<?=base64_decode(base64_decode($MemberDetails['password']))?>" />
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
                                                <option value="<?=$key?>" <?=($MemberDetails['school_id'] == $key)?'Selected':''?>><?=$value?></option>
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

