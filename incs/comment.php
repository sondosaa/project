<div class="well">
    <h4>Leave your Comment:</h4>
    <form role="form" action="post.php?post_id=<?=$post_id?>" method="POST">
        <?php $post_id_comment=$post_id;?>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Name" name="txt_name">
        </div>
        <div class="form-group">
            <input type="text" placeholder="Email" class="form-control" name="txt_Email">
        </div>
        <div class="form-group">
            <textarea class="form-control" rows="3" placeholder="Leave Comment" name="txt_comment"></textarea>
        </div>
        <button type="submit" name="btn1_submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php
if(isset($_POST["btn1_submit"]))
{
$txt_name=$_POST["txt_name"];
$txt_Email=$_POST["txt_Email"];
$txt_comment=$_POST["txt_comment"];
$txt_date=date('d-m-y h:i:s');
$sql_query2="INSERT INTO `comments`( `comment_auther`, `comment_mail`, `comment_content`, `comment_date`,`post_id`) 
 VALUES ('$txt_name','$txt_Email','$txt_comment','$txt_date','$post_id_comment') ";
 $sql_query=mysqli_query($con,$sql_query2);



}
?>
<br>
<?php 
$sql_query3="SELECT * FROM `comments` WHERE `post_id`=$post_id_comment";
$sql_res2=mysqli_query($con,$sql_query3);
$comment_count=mysqli_num_rows($sql_res2);
if($comment_count>0){
while($row=mysqli_fetch_assoc($sql_res2)):
    $comment_id=$row['comment_id'];
    $comment_auther=$row['comment_auther'];
    $comment_data=$row['comment_date'];
    $comment_content=$row['comment_content'];



?>
<div class="media">

    <div class="media-body">
        <h4 class="media-heading">
            <?=$comment_auther?>
            <small>
                <?=$comment_data?>
            </small>
        </h4>
        <p>
            <?=$comment_content?>
        </p>
    </div>
</div>
<?php endwhile; }

else{
    echo '<div class="text-center text-light"> There is No comments for this post </div>';
}
?>