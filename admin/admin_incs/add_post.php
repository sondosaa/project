
<?php  
if(isset($_POST['btn_submit']))
{
  $post_title=$_POST['txt_title'];
  $post_select_category=$_POST['select_category'];
  $post_auther=$_POST['txt_auther'];
  $post_image=$_FILES['txt_image']['name'];
  $post_image_tmp=$_FILES['txt_image']['tmp_name'];
  move_uploaded_file($post_image_tmp,"../images/$post_image");
  $post_content=$_POST['txterea_content'];
  $txt_tags=$_POST['txt_tags'];
  $post_date=date("Y-m-d h:i:sa");
  insert_post($post_select_category,$post_title,$post_auther,$post_date,$post_image,$post_content,$txt_tags);

  /*$sql_query2="INSERT INTO `posts`(`post_cat_id`, `post_title`, `post_auther`, `post_date`, `post_image`, `post_content`, `post_tags`)
   VALUES ('$post_select_category','$post_title','$post_auther','$post_date','$post_image','$post_content','$txt_tags')";
  $sql_query=mysqli_query($con,$sql_query2);*/
}
?>



<form action="" method="POST" enctype="multipart/form-data" >
    <div class="form-group">
        <label for="exampleInputPassword1">Post Title</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="txt_title">
      </div>


      <div class="form-group">
        <label for="exampleFormControlSelect1">Post Category</label>   
        <select class="form-control" id="exampleFormControlSelect1" name="select_category">
        <?php
       /*  $sql_query="SELECT * FROM `category`" ;
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
        <input type="text" class="form-control" id="exampleInputPassword11" name="txt_auther">
      </div>

       <div class="form-group">
        <label for="exampleInputPassword111">Post Image</label>
        <input type="file" class="form-control" id="exampleInputPassword111" name="txt_image">
      </div>

      <div class="form-group">
    <label for="exampleFormControlTextarea1">Post Content</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="txterea_content"></textarea>
  </div>


  <div class="form-group">
        <label for="exampleInputPassword12">Post Tags</label>
        <input type="text" class="form-control" id="exampleInputPassword12" name="txt_tags">
      </div>

<div class="form-group">
      <input type="submit" class="form-control btn btn-primary btn-lg btn-block " value="Add Post" name="btn_submit">
      </div>
</form>




