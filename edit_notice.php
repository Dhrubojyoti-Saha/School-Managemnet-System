  <?php
    include 'includes/pre_header.php';
    include 'includes/header.php';
    $NoticeId = $_GET['id'];
    $query = $FlatConn -> query("SELECT * FROM `notice_tbl` WHERE `id` = '".$NoticeId."'");
    $NoticeDetails = $query ->  fetch_assoc();
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
                                Update Notice Data
                            </h2>
                        </div>
                        <div class="body">
                            <form action="edit_notice_success.php" method="post" onsubmit="return valid()" enctype="multipart/form-data">
                                <input type="hidden" name="update_id" id="update_id" value="<?=$NoticeDetails['id']?>"/>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Title" id="title" name="title" value="<?=$NoticeDetails['title']?>" />
                                        </div>
                                    </div>
                                </div>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Details" name="details" id="details" value="<?=$NoticeDetails['details']?>"  />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="file" name="image" id="image" class="form-control" placeholder="Image" value="<?=$NoticeDetails['image']?>" />
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
  

