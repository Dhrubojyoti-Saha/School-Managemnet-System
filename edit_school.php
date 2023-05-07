<?php
    include 'includes/pre_header.php';
    include 'includes/header.php';
    include 'helper.php';
    $CountryList = __getCountryName($FlatConn);  
    $StateList = __getStateName($FlatConn, 1);  
    $DistrictList = __getDistrictName($FlatConn, 1);
    $CityList = __getCityName($FlatConn);
    $SchoolId = $_GET['id'];
    $query = $FlatConn -> query("Select * FROM `school_tbl` WHERE `id`= '".$SchoolId."'");
    $SchoolDetails = $query -> fetch_assoc();
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
                                Update School Data
                            </h2>
                        </div>
                        <div class="body">
                            <form action="update_school_success.php" method="post" onsubmit="return valid()" enctype="multipart/form-data">
                                 <input type="hidden" name="update_id" id="update_id" value="<?=$SchoolDetails['id']?>"/>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="School/College name" id="name" name="name"value="<?=$SchoolDetails['name']?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Mobile No" id="mobile_no" name="mobile_no"value="<?=$SchoolDetails['mobile_no']?>"/>
                                        </div>
                                    </div>
                                </div>
                                  <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Email ID" name="email_id" id="email_id" value="<?=$SchoolDetails['email_id']?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                             <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="country_id" id="country_id" class="form-control"value="<?=$SchoolDetails['country_id']?>"/>
                                                <option value="">Select Country</option>
                                                <?php
                                                  foreach($CountryList as $key => $value){
                                                ?>
                                                <option value="<?=$key?>" <?=($key == $SchoolDetails['country_id'])?'Selected':''?>><?=strtoupper($value)?></option>
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
                                            <select name="state_id" id="state_id" class="form-control"value="<?=$SchoolDetails['state_id']?>"/>
                                                <option value="">Select State</option>
                                                <?php
                                                  foreach($StateList as $key => $value){
                                                ?>
                                                <option value="<?=$key?>" <?=($key == $SchoolDetails['state_id'])?'Selected':''?>><?=strtoupper($value)?></option>
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
                                            <select name="district_id" id="district_id" class="form-control" value="<?=$SchoolDetails['district_id']?>"/>
                                                <option value="">Select District</option>
                                                <?php
                                                  foreach($DistrictList as $key => $value){
                                                ?>
                                                <option value="<?=$key?>" <?=($key == $SchoolDetails['district_id'])?'Selected':''?>><?=strtoupper($value)?></option>
                                                <?php
                                                  }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                   <div>
                            </div>
                            </div>   
                            
                              <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="city_id" id="city_id" class="form-control" value="<?=$SchoolDetails['city_id']?>"/>
                                                <option value="">Select City</option>
                                                <?php
                                                  foreach($CityList as $key => $value){
                                                ?>
                                                <option value="<?=$key?>" <?=($key == $SchoolDetails['city_id'])?'Selected':''?>><?=strtoupper($value)?></option>
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
                                            <input type="password" class="form-control" placeholder="Password" id="password" name="password" value="<?=base64_decode(base64_decode($SchoolDetails['password']))?>" />
                                        </div>
                                    </div>
                                </div>
                                  
                                 <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Other mobile no" id="phone_no" name="phone_no" value="<?=$SchoolDetails['phone_no']?>"/>
                                        </div>
                                    </div>
                                </div> 
                                   <div>
                            </div>
                            </div>
                                
                             <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="file" name="logo" id="logo" class="form-control" placeholder="Logo" value="<?=$SchoolDetails['logo']?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Pincode" id="pincode" name="pincode" value="<?=$SchoolDetails['pincode']?>" />
                                        </div>
                                    </div>
                                </div>
                                  
                                 <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Grade" id="grade" name="grade" value="<?=$SchoolDetails['grade']?>"/>
                                        </div>
                                    </div>
                                </div> 
                                   <div>
                            </div>
                            </div>
                                
                                <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="address" id="address" class="form-control" placeholder="Address" ><?=$SchoolDetails['address']?></textarea>
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
  <script type="text/javascript">
      function valid(){
        if($("#name").val() ==''){
            alert("School/College name must be require");
            $("#name").focus();
            $("#name").css("color",'red');
            return false;
        }else if($("#mobile_number").val() ==''){
            alert("Mobile number must be require");
            $("#mobile_number").focus();
            $("#mobile_number").css("color",'red');
            return false;
        }else if($("#email_id").val() ==''){
            alert("Email id must be require");
            $("#email_id").focus();
            $("#email_id").css("color",'red');
            return false;
        }else if($("#country_id").val() ==''){
            alert("Country id must be require");
            $("#country_id").focus();
            $("#country_id").css("color",'red');
            return false;
        }else if($("#state_id").val() ==''){
            alert("State id must be require");
            $("#state_id").focus();
            $("#state_id").css("color",'red');
            return false;
        }else if($("#district_id").val() ==''){
            alert("District id must be require");
            $("#district_id").focus();
            $("#district_id").css("color",'red');
            return false;
        }else if($("#city_id").val() ==''){
            alert("City id must be require");
            $("#city_id").focus();
            $("#city_id").css("color",'red');
            return false;
        }else if($("#phone_no").val() ==''){
            alert("Phone number must be require");
            $("#phone_no").focus();
            $("#phone_no").css("color",'red');
            return false;
        }else if($("#password").val() ==''){
            alert("Password must be require");
            $("#password").focus();
            $("#password").css("color",'red');
            return false;
        }else if($("#pincode").val() ==''){
            alert("Pincode must be require");
            $("#pincode").focus();
            $("#pincode").css("color",'red');
            return false;
        }else if($("#grade").val() ==''){
            alert("Grade must be require");
            $("#grade").focus();
            $("#grade").css("color",'red');
            return false;
        }else if($("#address").val() ==''){
            alert("AddressAddress must be require");
            $("#address").focus();
            $("#address").css("color",'red');
            return false;
        }

      }
  </script>

