<div class="col-md-8">

                <h1 class="page-header">
                   Sondos News
                </h1>
                <?php
               
                if (isset($_POST["btn_submit"])) 
                {
                    $keywords=$_POST["txt_search"];
                  }
                   
                $sql_query="SELECT * FROM `posts` WHERE `post_tags` like '%$keywords%' ";
                 $sql_res =mysqli_query($con,$sql_query);
                 $res_count= mysqli_num_rows($sql_res);
                 if($res_count!=0){
                 while($row=mysqli_fetch_assoc($sql_res)):
                    $post_id=$row['post_id'];
                     $post_title=$row['post_title'];
                     $post_auther=$row['post_auther'];
                     $post_data=$row['post_date'];
                     $post_image=$row['post_image'];
                     $post_content=$row['post_content'];
                   
                    ?> 
                      
                <!-- First Blog Post -->
                <h2>
                    <a href="post.php?post_id=<?=$post_id?>"><?=$post_title?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?=$post_auther?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted <?=$post_data?></p>
                <hr>
                <img class="img-responsive" src="images/<?=$post_image?>" alt="">
                <hr>
                <?php $substring1=substr($post_content,0,230);?>
                <p><?=$substring1?></p>
                <a class="btn btn-primary" href="post.php?post_id=<?=$post_id?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                <?php  endwhile; ?> 
                <?php 
                 }
                else{
                echo '<script> alert("There is no result match .")</script> ';
               // header("Location:index.php");
                //exit();
                        }
                ?>
             
              
                
                 
                
    
<!-- Second Blog Post -->


<!-- Third Blog Post -->


<!-- Pager -->


</div>