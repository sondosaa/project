<div class="col-md-8 ">
  <h1 class="page-header">
                Sondos News
              
             </h1>
    <?php  
    $sql_query= "SELECT * FROM `posts` ORDER BY `post_date` ASC";
    $sql_res=mysqli_query($con,$sql_query);
    $num_of_rows=mysqli_num_rows($sql_res);
    $num_per_page=3;
    $num_of_pages=ceil($num_of_rows/$num_per_page);
   if(!isset($_GET['page'])){
               $page=1;
          }
     else
     {
     $page=$_GET['page'];
     }
     $start_post=($page-1)* $num_per_page;
     $sql_query1= "SELECT * FROM `posts` ORDER BY `post_id` ASC  LIMIT $start_post , $num_per_page ";
    $sql_res1=mysqli_query($con,$sql_query1);
    while($row=mysqli_fetch_assoc($sql_res1)):
        $post_id=$row['post_id'];
        $post_title=$row['post_title'];
        $post_auther=$row['post_auther'];
        $post_data=$row['post_date'];
        $post_image=$row['post_image'];
        $post_content=$row['post_content'];
 
       ?>
               <h2>
                    <a href="post.php?post_id=<?=$post_id?>"><?=$post_title?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?=$post_auther?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted <?=$post_data?></p>
                <hr>
                <img class="img-responsive " src="images/<?=$post_image?>" alt="">
                <hr>
                <?php $substring1=substr($post_content,0,230);?>
                <p><?=$substring1?></p>
                <a class="btn btn-primary" href="post.php?post_id=<?=$post_id?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                <hr>
          <?php endwhile;?> 
     
   
        <?php
        for($page=1;$page<=$num_of_pages;$page++){
           
            echo '
            <ul class="pagination">
            <li class="d-flex justify-content-center ml-5" >
            <a  class="" href ="index.php?page=' . $page . '">' . $page . ' </a> 
            </li>
            </ul>
            ';  

            }?>
        
        </div>