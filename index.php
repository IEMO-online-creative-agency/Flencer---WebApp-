<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Link to Meta tags-->
  <?php include './_assets/_meta.html' ?>
  <!-- Title of the page-->
  <title>IEMO Dashboard</title>
  <!-- Link to assets-->
  <?php include './_assets/_links.html' ?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
     <?php require_once "./_const/sidebar.html"; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php require_once "./_const/topbar.html"; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!--=======================================-->
        <?php
         require_once "./_const/_cards.php";


        ?>
        <!--========================================-->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php require_once "./_const/footer.html" ?>
      <!-- End of Footer -->
      
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


  <!-- Logout Modal-->
  <?php require_once "./_const/log_modal.php" ?>

  <!-- Bootstrap core JavaScript-->
   <?php require_once "./_assets/s_links.html" ?>

</body>

</html>
