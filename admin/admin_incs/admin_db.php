
<?php
define('db_host','localhost');
define('db_user','root');
define('db_pass','');
define('db_name','news_cms');

$con=mysqli_connect(db_host,db_user,db_pass,db_name);
/*                 connection                     */
function select_post()
 {
    $con=mysqli_connect(db_host,db_user,db_pass,db_name);
    $sql_query="SELECT * FROM `posts` " ;
    $query_res= mysqli_query($con,$sql_query);
    return $query_res;
  }
  function select_category(){
    $con=mysqli_connect(db_host,db_user,db_pass,db_name);
    $sql_query="SELECT * FROM `category`" ;
    $query_res_category= mysqli_query($con,$sql_query);
    return $query_res_category;
  }
  function insert_post($post_select_category,$post_title,$post_auther,$post_date,$post_image,$post_content,$txt_tags){
    $post_select_category1=$post_select_category;
    $post_title1=$post_title;
    $post_auther1=$post_auther;
    $post_date1=$post_date;
    $post_image1=$post_image;
    $post_content1=$post_content;
    $txt_tags1=$txt_tags;
    $con=mysqli_connect(db_host,db_user,db_pass,db_name);
   $sql_query2="INSERT INTO `posts`(`post_cat_id`, `post_title`, `post_auther`, `post_date`, `post_image`, `post_content`, `post_tags`)
    VALUES ('$post_select_category1','$post_title1','$post_auther1','$post_date1','$post_image1','$post_content1','$txt_tags1')";
   $sql_query=mysqli_query($con,$sql_query2);
  }
  function insert_category($category_name1)
  {

    $con=mysqli_connect(db_host,db_user,db_pass,db_name);
    $txt_name1 = $category_name1;
    $sql_query2=" INSERT INTO `category`(`category_name` )  VALUES ('$txt_name1') ";
     $sql_query=mysqli_query($con,$sql_query2);
  }
function select_category_ID($category_ID)
{
    $con=mysqli_connect(db_host,db_user,db_pass,db_name);
    
    $cat_id1=$category_ID;
    $sql_query1="SELECT * FROM `category` where `category_id`=$cat_id1";
    $seq_result1=mysqli_query($con,$sql_query1);
    return $seq_result1;
}
function Delete_category($category_id){
    $con=mysqli_connect(db_host,db_user,db_pass,db_name);
    $cat1_id1=$category_id;
    $sql_query6="DELETE FROM `category` WHERE `category_id`='$cat1_id1'";
         $seq_result=mysqli_query($con,$sql_query6);

}
function edite_category($category_id,$category_title){
    $con=mysqli_connect(db_host,db_user,db_pass,db_name);
    $cat_id1=$category_id;
    $the_title1=$category_title;
    $sql_query5="UPDATE  `category` SET `category_name`='$the_title1' WHERE `category_id`='$cat_id1'";
    $seq_result5=mysqli_query($con,$sql_query5);
}
function Delete_post($deleted_id)
{
  $con=mysqli_connect(db_host,db_user,db_pass,db_name);
 $deleted_post1=$deleted_id;
 $sql="DELETE FROM `posts` WHERE `post_id`='$deleted_post1'";
 $sql_res=mysqli_query($con,$sql);

}
function update_post($p_cat,$p_title,$p_auther,$p_date,$p_image,$p_content,$p_tags,$p_id1){
  $con=mysqli_connect(db_host,db_user,db_pass,db_name);
  $post_select_category2=$p_cat;
  $post_title2=$p_title;
  $post_auther2=$p_auther;
  $post_date2=$p_date;
  $post_image2=$p_image;
  $post_content2=$p_content;
  $txt_tags2=$p_tags;
  $Post_id1=$p_id1;
  $sql_query2="UPDATE `posts` SET `post_cat_id`='$post_select_category2',`post_title`='$post_title2',`post_auther`='$post_auther2',`post_date`='$post_date2',`post_image`='$post_image2',`post_content`='$post_content2',`post_tags`='$txt_tags2' WHERE `post_id`=$Post_id1";
  $sql_query=mysqli_query($con,$sql_query2);
}




?>
