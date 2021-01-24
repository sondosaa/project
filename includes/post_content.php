    <!-- Blog Post -->
               <?php 
              $post_id= $_GET['post_id'];
              $seq_result= select_post_id($post_id);
            /*  $sql_query="SELECT * FROM `posts` WHERE `post_id`='$post_id'";
              $seq_result=mysqli_query($con,$sql_query);*/
              while($row=mysqli_fetch_assoc($seq_result)):
                $post_id=$row['post_id'];
                $post_title=$row['post_title'];
                $post_auther=$row['post_auther'];
                $post_data=$row['post_date'];
                $post_image=$row['post_image'];
                $post_content=$row['post_content'];
            
                ?>
                <!-- Title -->
                <h1><?=$post_title?></h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#"><?=$post_auther?></a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span><?=$post_data?></p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="images/<?=$post_image?>" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead"><?=$post_content?></p>
                
                <?php endwhile;?>