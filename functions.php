<?php

 include 'db-conn.php';
if(isset($_POST['add-categories'])){
$cate_id = mt_rand(11111,99999);
   $cate_name = $_POST['cate_name'];
   $meta_title = $_POST['meta_title'];
   $meta_key = $_POST['meta_key'];
   $meta_desc = $_POST['meta_desc'];
   $added_on = date('M d, Y');
   $slug_url = Slugurl($cate_name);

$sql ="INSERT INTO ec_categories (cate_id,cate_name,meta_title,
meta_desc,meta_key,slug_url,status,added_on)VALUES(
   '$cate_id','$cate_name','$meta_title','$meta_desc','$meta_key','$slug_url',1,'$added_on')";
$check = mysqli_query($conn,$sql);
if($check){
      ?>
      <script type="text/javascript">alert('Inserted Successfully');
      window.location.href="view-categories.php";</script>
      <?php
   }

}

if(isset($_POST['add-sub-categories'])){
   $cate_id = mt_rand(11111,99999);
      $cate_name = $_POST['cate_name'];
      $meta_title = $_POST['meta_title'];
      $meta_key = $_POST['meta_key'];
      $meta_desc = $_POST['meta_desc'];
      $added_on = date('M d, Y');
      $parent_id = $_POST['parent_id'];
      $slug_url = Slugurl($cate_name);
   
   $sql ="INSERT INTO ec_sub_categories (cate_id,parent_id,cate_name,meta_title,
   meta_desc,meta_key,slug_url,status,added_on)VALUES(
      '$cate_id',' $parent_id ','$cate_name','$meta_title','$meta_desc','$meta_key','$slug_url',1,'$added_on')";
   $check = mysqli_query($conn,$sql);
   if($check){
         ?>
         <script type="text/javascript">alert('Inserted Successfully');
         window.location.href="view-sub-categories.php";</script>
         <?php
      }
   
   }

function get_Categories(){
   include 'db-conn.php';
$sql ="SELECT * FROM ec_categories ORDER BY id DESC";
$check = mysqli_query($conn,$sql);
$sno=1;
while ($result = mysqli_fetch_assoc($check)) {
    echo $output= "<tr>
   <td>".$sno++."</td>
   <td>".$result['cate_id']."</td>
   <td>".$result['cate_name']."</td>
   <td>".$result['slug_url']."</td>
   <td>".$result['status']."</td>
   <td>".$result['added_on']."</td>
   </tr>";
}

}
   
function get_Sub_Categories(){
   include 'db-conn.php';
   $sql ="SELECT * FROM ec_sub_categories ORDER BY id DESC";
   $check = mysqli_query($conn,$sql);
   $sno=1;
   while ($result = mysqli_fetch_assoc($check)) {
      $parent_id = $result['parent_id'];
      $sql2 ="SELECT cate_name FROM ec_categories WHERE cate_id=$parent_id ";
      $check2 = mysqli_query($conn,$sql2);
      $parent = mysqli_fetch_assoc($check2);
       echo $output= "<tr>
      <td>".$sno++."</td>
      <td>".$result['cate_id']."</td>
      <td>".$result['cate_name']."</td>
      <td>".$parent['cate_name']."</td>
      <td>".$result['slug_url']."</td>
      <td>".$result['status']."</td>
      <td>".$result['added_on']."</td>
      </tr>";
   }
   
}



function Slugurl($string) {
$slug= preg_replace('/[^a-zA-Z0-9 -]/','', $string); 
$slug= str_replace(' ','-', $slug); 
$slug= strtolower($slug); // make it lowercase

return $slug;
}


?>



