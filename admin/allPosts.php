
<?php require('admin_incs\admin-header.php');?>
    <div id="wrapper">

        <!-- Navigation -->
        <?php require('admin_incs\admin_nav.php');?>
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"> Sondos Posts</h1>
<?php


if(isset($_GET['source'])){

    $source=$_GET['source'];
}
else{
    $source='';
}

switch($source)
{
case 'add':
    include('admin_incs\add_post.php');
    break;
case 'edite':
    include('admin_incs\admin_edite.php');
    break;
    default :
    include('admin_incs\displayposts.php');
     break;
}
?>


                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  
    <!-- /#wrapper -->




    <?php require('admin_incs\footer.php');?>