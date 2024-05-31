<?php include 'db-conn.php';
$sql ="SELECT * FROM ec_categories ORDER BY id DESC";
$check = mysqli_query($conn,$sql);


?>
<!DOCTYPE html>
<html lang="zxx">
  
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Sales</title>
    <link rel="icon" href="assets/img/logo.png" type="image/png">
    <?php include 'links.php';?>
  </head>
  <body class="crm_body_bg">
  <?php include 'header.php';?>
    <section class="main_content dashboard_part large_header_bg">
      <div class="container-fluid g-0">
        <div class="row">
          <div class="col-lg-12 p-0 ">
            <div class="header_iner d-flex justify-content-between align-items-center">
              <div class="sidebar_icon d-lg-none">
                <i class="ti-menu"></i>
              </div>
              <div class="serach_field-area d-flex align-items-center">
                <div class="search_inner">
                  <form action="#">
                    <div class="search_field">
                      <input type="text" placeholder="Search here...">
                    </div>
                    <button type="submit">
                      <img src="assets/img/icon/icon_search.svg" alt>
                    </button>
                  </form>
                </div>
                <span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span>
              </div>
              <div class="header_right d-flex justify-content-between align-items-center">
                <div class="header_notification_warp d-flex align-items-center">
                  <li>
                    <a class="bell_notification_clicker nav-link-notify" href="#">
                      <img src="assets/img/icon/bell.svg" alt>
                    </a>
                    <div class="Menu_NOtification_Wrap">
                      <div class="notification_Header">
                        <h4>Notifications</h4>
                      </div>
                      <div class="Notification_body">
                        <div class="single_notify d-flex align-items-center">
                          <div class="notify_thumb">
                            <a href="#">
                              <img src="assets/img/staf/2.png" alt>
                            </a>
                          </div>
                          <div class="notify_content">
                            <a href="#">
                              <h5>Cool Marketing </h5>
                            </a>
                            <p>Lorem ipsum dolor sit amet</p>
                          </div>
                        </div>
                        <div class="single_notify d-flex align-items-center">
                          <div class="notify_thumb">
                            <a href="#">
                              <img src="assets/img/staf/4.png" alt>
                            </a>
                          </div>
                          <div class="notify_content">
                            <a href="#">
                              <h5>Awesome packages</h5>
                            </a>
                            <p>Lorem ipsum dolor sit amet</p>
                          </div>
                        </div>
                        <div class="single_notify d-flex align-items-center">
                          <div class="notify_thumb">
                            <a href="#">
                              <img src="assets/img/staf/3.png" alt>
                            </a>
                          </div>
                          <div class="notify_content">
                            <a href="#">
                              <h5>what a packages</h5>
                            </a>
                            <p>Lorem ipsum dolor sit amet</p>
                          </div>
                        </div>
                        <div class="single_notify d-flex align-items-center">
                          <div class="notify_thumb">
                            <a href="#">
                              <img src="assets/img/staf/2.png" alt>
                            </a>
                          </div>
                          <div class="notify_content">
                            <a href="#">
                              <h5>Cool Marketing </h5>
                            </a>
                            <p>Lorem ipsum dolor sit amet</p>
                          </div>
                        </div>
                        <div class="single_notify d-flex align-items-center">
                          <div class="notify_thumb">
                            <a href="#">
                              <img src="assets/img/staf/4.png" alt>
                            </a>
                          </div>
                          <div class="notify_content">
                            <a href="#">
                              <h5>Awesome packages</h5>
                            </a>
                            <p>Lorem ipsum dolor sit amet</p>
                          </div>
                        </div>
                        <div class="single_notify d-flex align-items-center">
                          <div class="notify_thumb">
                            <a href="#">
                              <img src="assets/img/staf/3.png" alt>
                            </a>
                          </div>
                          <div class="notify_content">
                            <a href="#">
                              <h5>what a packages</h5>
                            </a>
                            <p>Lorem ipsum dolor sit amet</p>
                          </div>
                        </div>
                      </div>
                      <div class="nofity_footer">
                        <div class="submit_button text-center pt_20">
                          <a href="#" class="btn_1">See More</a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <a class="CHATBOX_open nav-link-notify" href="#">
                      <img src="assets/img/icon/msg.svg" alt>
                    </a>
                  </li>
                </div>
                <div class="profile_info">
                  <img src="assets/img/client_img.png" alt="#">
                  <div class="profile_info_iner">
                    <div class="profile_author_name">
                      <p>Neurologist </p>
                      <h5>Dr. Robar Smith</h5>
                    </div>
                    <div class="profile_info_details">
                      <a href="#">My Profile </a>
                      <a href="#">Settings</a>
                      <a href="#">Log Out </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main_content_iner ">
        <div class="container-fluid p-0 sm_padding_15px">
          <div class="row justify-content-center">
           
            <div class="col-lg-12">
              <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                  <div class="box_header m-0">
                    <div class="main-title">
                      <h3 class="m-0">Fill all the categories</h3>
                    </div>
                  </div>
                </div>
                <div class="white_card_body">
                  <div class="card-body">
                    <form action="functions.php" method="post">
                      <div class="row mb-3">
                        <div class="col-md-6 mb-3 ">
                          <label class="form-label" for="inputEmail4">Product Name</label>
                          <input type="text" class="form-control" name="cate_name" id="inputEmail4" placeholder="Name">
                        </div>

                        <div class="col-md-6 mb-3 ">
                          <label class="form-label" for="inputEmail4">Parent Category Name</label>
                          <select name="parent_id" class="form-control">
                          <option value=" ">-----select-----</option>
                          <?php foreach ($check as $val){ ?>
                            <option value="<?php echo $val['cate_id'];?>"><?php echo ucwords 
                            ($val['cate_name'])?></option>
                         <?php } ?>
                          </select>
                         </div>
                         <div class="col-md-6 mb-3 ">
                          <label class="form-label" for="inputEmail4">Sub Category Name</label>
                          <select name="parent_id" class="form-control">
                          <option value=" ">-----select-----</option>
                          <?php foreach ($check as $val){ ?>
                            <option value="<?php echo $val['cate_id'];?>"><?php echo ucwords 
                            ($val['cate_name'])?></option>
                         <?php } ?>
                          </select>
                         </div>
                         <div class="col-md-6 mb-3">
                          <label class="form-label" for="inputEmail4">Pro Desc</label>
                          <textarea name="pro_desc" class="form-control"></textarea>
                          </div>
                         <div class="col-md-6 mb-3">
                          <label class="form-label" for="inputEmail4">Stocks</label>
                          <input type="text" class="form-control"  name="meta_key" id="inputEmail4" placeholder="Stock">
                          </div>
                          <div class="col-md-6 mb-3">
                          <label class="form-label" for="inputEmail4">MRP</label>
                          <input type="text" class="form-control"  name="meta_key" id="inputEmail4" placeholder="MRP">
                          </div>
                          <div class="col-md-6 mb-3">
                          <label class="form-label" for="inputEmail4">Selling price</label>
                          <input type="text" class="form-control"  name="meta_key" id="inputEmail4" placeholder="Selling Priced">
                          </div>
                          <div class="col-md-6 mb-3">
                          <label class="form-label" for="inputEmail4">Pro Image</label>
                          <input type="file" class="form-control"  name="meta_key" id="inputEmail4" placeholder="Image">
                          </div>
                         <div class="col-md-6 mb-3">
                          <label class="form-label" for="inputEmail4">Meta Title</label>
                          <input type="text" class="form-control"  name="meta_key" id="inputEmail4" placeholder="Keywords">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label" for="inputEmail4">Meta Keywords</label>
                          <input type="text" class="form-control"  name="meta_key" id="inputEmail4" placeholder="Keywords">
                          </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label" for="inputEmail4">Meta Description</label>
                          <input type="text" class="form-control" name="meta_desc" id="inputEmail4" placeholder="Description">
                        </div>
                        <div class="col-md-6">
                          <label class="form-label" for="inputState">Status</label>
                          <select id="inputState" name="status" class="form-control">
                            <option selected>Choose...</option>
                            <option value="1">Active</option>
                            <option value="0">Deactive</option>
                          </select>
                        </div>
                      </div>
                      <button type="submit" name="add-categories" class="btn btn-primary"> Add Product</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <?php include 'footer.php';?>
        <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
         <script>
                        CKEDITOR.replace( 'pro_desc' );
                </script>