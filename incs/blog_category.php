    <div class="well">
    <h4 class="text-center">News Categories</h4>
    <div class="row">
        <div class="col-lg-12 text-center">
            <ul class="list-unstyled">
                <?php
              /*  $sql_query="SELECT * FROM `category`" ;
                $query_res= mysqli_query($con,$sql_query);*/
                $query_res=select_category();
                while($row = mysqli_fetch_array($query_res)):
                    $cat_id=$row['category_id'];
                  $cat_name=$row['category_name'];
                  ?>
                <li><a href="nav_search.php?category_id=<?=$cat_id?>">
                        <?=$cat_name?>
                    </a> </li>
                <?php endwhile;?>


            </ul>
        </div>
        <!-- /.col-lg-6 -->

        <!-- /.col-lg-6 -->
      </div>
    <!-- /.row -->
 </div> 
<div class="well">
    <h4>Side Widget Well</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus
        laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
</div>