<?php
				if (@$_GET['success']) {
					?>
					<div class="card mb-3 widget-content bg-success op_8">
                                        <div class="widget-content-wrapper text-white">
                                            <div class="widget-content-left">
                                            <h5 class="p-3 text-center text-light">
                                              <?php echo $_GET['success'];?>  
                                            </h5>
                                            </div>
                                        </div>
                     </div>
					<?php
				}
?>
<?php
        if (@$_GET['error']) {
          ?>
          <div class="card mb-3 widget-content bg-danger">
                                        <div class="widget-content-wrapper text-white">
                                            <div class="widget-content-left">
                                            <h5 class="p-3 text-center text-light">
                                              <?php echo $_GET['error'];?>  
                                            </h5>
                                            </div>
                                        </div>
                     </div>
          <?php
        }
?>
<?php
        if (@$_GET['danger']) {
          ?>
          <div class="card mb-3 widget-content bg-danger">
                                        <div class="widget-content-wrapper text-white">
                                            <div class="widget-content-left">
                                            <h5 class="p-3 text-center text-light">
                                              <?php echo $_GET['danger'];?>  
                                            </h5>
                                            </div>
                                        </div>
                     </div>
          <?php
        }
?>