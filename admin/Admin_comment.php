<?php require('admin_incs\admin-header.php');?>
<div id="wrapper">

    <!-- Navigation -->
    <?php require('admin_incs\admin_nav.php');?>
    <div id="page-wrapper">

        <div class="container-fluid">

            <h1 class="page-header">Sondos News Comments </h1>
            <!-- Page Heading -->
            <div class="row">

                <div class="col-sm-12">

                    <form action="Admin_comment.php" method="POST">
                        <div class="form-group text-center">
                            <label for="exampleFormControlInput1">Enter Post ID</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                name="txt_display_comment">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control" class="btn btn-primary btn-block"
                                name="btn_display_comment">
                        </div>

                    </form>
                    <?php
          
          if(isset($_POST["btn_display_comment"]))
          {
          $id_for_Comment=$_POST["txt_display_comment"];
          $sql_query7="SELECT * FROM `comments` WHERE `post_id`='$id_for_Comment'";
          $seq_result7=mysqli_query($con,$sql_query7);
          $num_of_rows=mysqli_num_rows($seq_result7);
          if($num_of_rows>0)
          { ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Comment Id</th>
                                <th scope="col">Comment Auther</th>
                                <th scope="col">Comment Mail</th>
                                <th scope="col">Comment Content</th>
                                <th scope="col">Comment Date</th>
                                <th scope="col">Post Id</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
       $sql_query="SELECT * FROM `comments` WHERE `post_id`='$id_for_Comment'";
       $seq_result=mysqli_query($con,$sql_query);
       while($row=mysqli_fetch_assoc($seq_result)):
       $comment_id=$row['comment_id'];
       $comment_auther=$row['comment_auther'];
       $comment_mail=$row['comment_mail'];
       $comment_content=$row['comment_content'];
       $comment_date=$row['comment_date'];
       $post_id=$row['post_id'];
      ?>
                            <tr>
                                <th scope="row"><?=$comment_id?></th>
                                <th scope="row"><?=$comment_auther?></th>
                                <th scope="row"><?=$comment_mail?></th>
                                <th scope="row"><?=$comment_content?></th>
                                <th scope="row"><?=$comment_date?></th>
                                <th scope="row"><?=$post_id?></th>
                                
                            </tr>
                            <?php endwhile?>
                        </tbody>
                    </table>
                    
                    <?php   
                    }
                  
                    else
                    {
                    echo '
                    <script language="javascript">';
                        echo 'alert("There Is No Comments For This Post ")';
                        echo '</script>';
                    }

                    }


                    ?>

                </div>

            </div> <!-- /.row -->


        </div> <!-- /.container-fluid -->


    </div> <!-- /#page-wrapper -->



    <!-- /#wrapper -->




    <?php require('admin_incs\footer.php');?>