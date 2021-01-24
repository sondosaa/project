<?php
 /*$sql_query="SELECT * FROM `posts` " ;
 $query_res= mysqli_query($con,$sql_query);*/
 $query_res=select_post();
 while($row = mysqli_fetch_array($query_res)):
     $Post_id=$row['post_id'];
     $Post_cat_id=$row['post_cat_id'];
     $Post_title=$row['post_title'];
     $Post_auther=$row['post_auther'];
     $Post_date=$row['post_date'];
     $Post_image=$row['post_image'];
     $Post_content=$row['post_content'];
     $Post_tags=$row['post_tags'];
    
     
   ?>

<table class="table">
<thead>
  <tr>
    <th scope="col">Post id</th>
    <th scope="col">post category id</th>
    <th scope="col">post title</th>
    <th scope="col">post auther</th>
    <th scope="col">post date</th>
    <th scope="col">post image</th>
    <th scope="col">post content</th>
    <th scope="col">post tags</th>
    <th scope="col">post update</th>
    <th scope="col">post delete</th>

  </tr>
</thead>
<tbody>
  <tr>
    <th scope="row"><?=$Post_id?></th>
    <td><?=$Post_cat_id?></td>
    <td><?=$Post_title?> </td>
    <td><?=$Post_auther?></td>
    <td><?=$Post_date?></td>
    <td><img src="../images/<?=$Post_image?>" width="150" alt=""> </td>
    <td>        
     <div class="form-group">
    <textarea class="form-control"  rows="6" > <?=$Post_content?></textarea>
         </div>         
    </td>
    <td><?= $Post_tags?></td>
    <td><a href="allPosts.php?source=edite&
    post_id=<?=$Post_id?>&
    post_cat=<?=$Post_cat_id?>&
    Post_title=<?=$Post_title?>&
    post_auther=<?=$Post_auther?>&
    Post_image=<?=$Post_image?>&
    Post_content=<?=$Post_content?>&
    Post_tags=<?=$Post_tags?>
    "><i class="fa fa-edit"> </i></a></td>
    <td><a href="allPosts.php?post_deleted=<?=$Post_id?>"><i class="fa fa-trash"> </i></a></td>
    
  </tr>
  
  <?php endwhile?>

</tbody>

</table>
<?php
if(isset($_GET['post_deleted']))
{
 $deleted_post=$_GET['post_deleted'];
 Delete_post($deleted_post);
 /*$sql="DELETE FROM `posts` WHERE `post_id`='$deleted_post'";
 $sql_res=mysqli_query($con,$sql);*/

}
?>

