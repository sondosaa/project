<nav class="navbar navbar-inverse navbar-fixed-top d-flex align-baseline" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">News</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav ">
                <?php
              /*  $sql_query_start="SELECT * FROM `category` " ;
                $query_res_start= mysqli_query($con,$sql_query_start);*/
                $query_res_start=select_category();
                $res3_num=mysqli_num_rows($query_res_start);
              
                $drop_end= $res3_num-10;
           
                $sql_query="SELECT * FROM `category` LIMIT 0 , 10" ;
             
                $query_res= mysqli_query($con,$sql_query);
                
                while($row = mysqli_fetch_array($query_res)):
                  $cat_id=$row['category_id'];
                  $cat_name=$row['category_name'];
                  ?>
                <li>
                    <a href="nav_search.php?category_id=<?=$cat_id?>">
                        <?=$cat_name?>
                    </a>
                </li>

                <?php endwhile;?>
                <?php
               $sql_query_drop="SELECT * FROM `category` LIMIT 10 ,$drop_end" ;
               $query_res4= mysqli_query($con,$sql_query_drop);
                ?>
                <?php if($res3_num>10){?>
                <li>
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                  <div class="dropdown-menu">
                 <?php
                 while($row1 = mysqli_fetch_array($query_res4)):
                 $cat_id1=$row1['category_id'];
                 $cat_name1=$row1['category_name'];
                 ?>
                <ul class="d-none">
                 <li class="nav-item"> <a class="dropdown-item" href="nav_search.php?category_id=<?=$cat_id1?>">
     
                  <?=$cat_name1?></a>
                  </li>
                  </ul>
                 
                 <?php endwhile;?>
                
               <?php }?>

                <li> <a href="admin\index.php"></a></li>
                </ul>
                 </div>



                 </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>