<?php include('incs/header.php');?>

<?php include('incs/nav.php')?>
<!-- Navigation -->

<div class="container">

    <div class="row">
        <!-- Page Content -->
        <div class="col-md-8">

            <h1 class="page-header">
                Sondos News

            </h1>
            <?php
       $category_id= $_GET['category_id'];
       
  $sql_query="SELECT * FROM `posts` WHERE `post_cat_id`='$category_id'";
 $sql_res =mysqli_query($con,$sql_query);
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
                <a href="post.php?post_id=<?=$post_id?>">
                    <?=$post_title?>
                </a>
            </h2>
            <p class="lead">
                by <a href="index.php">
                    <?=$post_auther?>
                </a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> Posted
                <?=$post_data?>
            </p>
            <hr>
            <img class="img-responsive" src="images/<?=$post_image?>" alt="">
            <hr>
            <?php $substring1=substr($post_content,0,230);?>
            <p>
                <?=$substring1?>
            </p>
            <a class="btn btn-primary" href="post.php?post_id=<?=$post_id?>">Read More <span
                    class="glyphicon glyphicon-chevron-right"></span></a>
            <?php  endwhile; ?>

            <!-- Second Blog Post -->


            <!-- Third Blog Post -->


            <!-- Pager -->
            

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">
            <?php include('incs/search1.php'); ?>
            <!-- Blog Search Well -->


            <!-- Blog Categories Well -->
            <?php include('incs/blog_category.php'); ?>

            <!-- Side Widget Well -->

        </div><!-- col4 -->


    </div> <!-- /.row -->

    <hr>

    <?php include('incs/footer.php'); ?>
    <!-- Footer -->
</div> <!-- /.container -->