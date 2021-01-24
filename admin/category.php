<?php require('admin_incs\admin-header.php');?>
<div id="wrapper">

  <!-- Navigation -->
  <?php require('admin_incs\admin_nav.php');?>
  <div id="page-wrapper">

    <div class="container-fluid">

      <h1 class="page-header">Sondos News Categories </h1>
      <!-- Page Heading -->
      <div class="row">

        <div class="col-sm-6">
        
<?php      ?>
        <?php 
         if(isset($_GET['category_id'])){
         $cat1_id=$_GET['category_id'];
         Delete_category($cat1_id);

        /* $sql_query6="DELETE FROM `category` WHERE `category_id`='$cat1_id'";
         $seq_result=mysqli_query($con,$sql_query6);*/
             }
           ?>
          <form action="category.php" method="POST">
            <div class="form-group text-center">
              <label for="exampleFormControlInput1">Add Category</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_add1">
            </div>
            <div class="form-group">
              <input type="submit" class="form-control" class="btn btn-primary btn-block" name="btn_add1">
            </div>


          </form>
        <!--                                      add categoy                       -->
          <?php
                        
                        if(isset($_POST["btn_add1"]))
                        {
                        $txt_name=$_POST["txt_add1"];
                        if(empty($txt_name))
                        {
                          echo '<script language="javascript">';
                            echo 'alert("You Should Add Category")';
                           echo '</script>'; 
                        }
                        else
                        {
                          insert_category($txt_name);
                       /* $sql_query2=" INSERT INTO `category`(`category_name` )  VALUES ('$txt_name') ";
                         $sql_query=mysqli_query($con,$sql_query2);*/
                        }
                      }
                      /////////////////////////////////////////edite/////////////////////////
                      if(isset($_GET['category1_id']))
                      {
                        $cat_id=$_GET['category1_id'];
           $mysqli = new mysqli("localhost","root","","news_cms");
        if(isset($_POST["btn_Ediet1"])){
        $the_title=$mysqli ->real_escape_string($_POST["txt_Ediet1"]);
        edite_category($cat_id,$the_title);
        /*
         $sql_query5="UPDATE  `category` SET `category_name`='$the_title' WHERE `category_id`='$cat_id'";
         $seq_result5=mysqli_query($con,$sql_query5);
         */
         }
?>
                    <form action="" method="POST">
                    <div class="form-group text-center">
                      <label for="exampleFormControlInput1">Ediet Category</label>
                      <?php
                      /*  $sql_query1="SELECT * FROM `category` where `category_id`='$cat_id'";
                                        $seq_result1=mysqli_query($con,$sql_query1);*/
                                      $seq_result1=select_category_ID($cat_id);
                                        while($row=mysqli_fetch_assoc($seq_result1)):
                                        $category_id=$row['category_id'];
                                        $category_name=$row['category_name'];
                                        ?>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_Ediet1" value="<?=$category_name?>">
                      <?php endwhile; ?>
                    </div>
                    
                   
                    <div class="form-group">
                      <input type="submit" class="form-control" class="btn btn-primary btn-block" name="btn_Ediet1">
                    </div>
                  </form>

                  <?php }?>    
                   
                 



        </div>
        <div class="col-sm-6">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <?php
                    
                    /*  $sql_query="SELECT * FROM `category`";
                      $seq_result=mysqli_query($con,$sql_query);*/
                      
                      $seq_result= select_category();
                      while($row=mysqli_fetch_assoc($seq_result)):
                      $category_id=$row['category_id'];
                      $category_name=$row['category_name'];
          
                        ?>


            <tbody>
              <tr>
                <th scope="row">
                  <?=$category_id?>
                </th>
                <td>
                  <?=$category_name?>
                </td>
                <td><a href="category.php?category1_id=<?=$category_id?>"><i class="fa fa-edit"> </i></a></td>
                <td><a href="category.php?category_id=<?=$category_id?>"><i class="fa fa-trash"> </i></a></td>

              </tr>

            </tbody>
            <?php endwhile;?>
          </table>
         
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- /#page-wrapper -->


  <!-- /#wrapper -->




  <?php require('admin_incs\footer.php');?>