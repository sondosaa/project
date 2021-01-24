
<?php
$mysqli = new mysqli("localhost","root","","news_cms");
if(isset($_GET['post_id'])and
   isset($_GET['post_cat'])and 
   isset($_GET['Post_title'])and
   isset($_GET['post_auther'])and
   isset($_GET['Post_image'])and
   isset($_GET['Post_content'])and
   isset($_GET['Post_tags']))
   {
    $Post_id1=$_GET['post_id'];
    $Post_cat_id1=$_GET['post_cat'];
    $Post_title1=$_GET['Post_title'];
    $Post_auther1=$_GET['post_auther'];
    $Post_image1=$_GET['Post_image'];
    $Post_content1=$_GET['Post_content'];
    $Post_tags1=$_GET['Post_tags'];
    
}
?>




<?php  
if(isset($_POST['btn_edite1']))
{
  $post_title2=$mysqli ->real_escape_string($_POST['txt_title1']);
  $post_select_category2=$mysqli ->real_escape_string($_POST['select_category1']);
  $post_auther2=$mysqli ->real_escape_string($_POST['txt_auther1']);
  $post_image2=$mysqli ->real_escape_string($_FILES['txt_image1']['name']);
  $post_image_tmp2=$mysqli ->real_escape_string($_FILES['txt_image1']['tmp_name']);
  move_uploaded_file($post_image_tmp2,"../images/$post_image2");
  $post_content2=$mysqli ->real_escape_string($_POST['txterea_content1']);
  $txt_tags2=$mysqli ->real_escape_string($_POST['txt_tags1']);
  $post_date2=date("Y-m-d h:i:sa");
  update_post($post_select_category2,$post_title2,$post_auther2,$post_date2,$post_image2,$post_content2,$txt_tags2,$Post_id1);

 /* $sql_query2="UPDATE `posts` SET `post_cat_id`='$post_select_category2',`post_title`='$post_title2',`post_auther`='$post_auther2',`post_date`='$post_date2',`post_image`='$post_image2',`post_content`='$post_content2',`post_tags`='$txt_tags2' WHERE `post_id`=$Post_id1";
  $sql_query=mysqli_query($con,$sql_query2);*/
 
}
?>


<form action="" method="POST" enctype="multipart/form-data" >
    <div class="form-group">
        <label for="exampleInputPassword1">Post Title</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="txt_title1" 
        value="<?=$Post_title1?>">
      </div>


      <div class="form-group">
        <label for="exampleFormControlSelect1">Post Category</label>  
        <?php
       $query_res=select_category_ID($Post_cat_id1);
      
        /*$sql="SELECT  `category_name` FROM `category` WHERE `category_id`='$Post_cat_id1'";
        $query_res= mysqli_query($con,$sql);*/
        while($row = mysqli_fetch_array($query_res)){
            $cat_name1=$row['category_name']; 
        }

        ?> 
        <select class="form-control" id="exampleFormControlSelect1"  value="<?=$cat_name?>"  name="select_category1">
        <?php
        /* $sql_query="SELECT * FROM `category`" ;
         $query_res= mysqli_query($con,$sql_query);*/
         $query_res=select_category();
         while($row = mysqli_fetch_array($query_res)):
             $cat_id=$row['category_id'];
             $cat_name=$row['category_name'];
            ?>
          <option value="<?=$cat_id?>"><?=$cat_name?></option>
      <?php endwhile;?>
        </select>
      </div>

       <div class="form-group">
        <label for="exampleInputPassword11">Post Auther</label>
        <input type="text" class="form-control" id="exampleInputPassword11" name="txt_auther1"
         value="<?=$Post_auther1?>" >
      </div>

       <div class="form-group">
        <label for="exampleInputPassword111">Post Image</label>
        <input type="file" class="form-control" id="exampleInputPassword111" name="txt_image1">
      </div>

      <div class="form-group">
    <label for="exampleFormControlTextarea1">Post Content</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="txterea_content1" ><?php echo htmlspecialchars($Post_content1); ?></textarea>
  </div>


  <div class="form-group">
        <label for="exampleInputPassword12">Post Tags</label>
        <input type="text" class="form-control" id="exampleInputPassword12" name="txt_tags1" value="<?=$Post_tags1?>">
      </div>

<div class="form-group">
      <input type="submit" class="form-control btn btn-primary btn-lg btn-block " value="Edite Post" name="btn_edite1">
      </div>
</form>


