<?php require('incs/header.php');?>
<!-- Navigation -->
<?php require('incs/nav.php')?>

<!-- Page Content -->
<div class="container">

    <div class="row">


        <!-- Blog Post Content Column -->
        <div class="col-lg-8">

            <?php require('includes/post_content.php') ?>
            <hr>

            <!-- Blog Comments -->

            <!-- Comments Form -->
            <?php require('incs/comment.php')?>

            <hr>

            <!-- Posted Comments -->

            <!-- Comment -->
           

            <!-- Comment -->
            
        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Blog Search Well -->

            <?php require('incs/search1.php') ?>
            <!-- Blog Categories Well -->
            <?php require('incs/blog_category.php') ?>

            <!-- Side Widget Well -->
            <div class="well">
                <h4>Side Widget Well</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus
                    laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
            </div>

        </div>

    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <?php require('incs/footer.php')?>