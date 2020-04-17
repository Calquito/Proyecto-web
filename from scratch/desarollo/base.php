<?php
  try {
      include 'global_head.php';
    ?>
          <div class="d-flex flex-row bd-highlight justify-content-around" >
            <!--scrolls-->
            <div class=" bd-highlight d-none d-sm-block w-25">
            </div>
            <div class=" bd-highlight w-100" >
              <?php include 'load_scroll.php';?>
            </div>
            <!--sidebar-->
            <div class=" bd-highlight d-none d-sm-block w-75 ">
              <div class="d-flex flex-row bd-highlight justify-content-around ">
                <div class=" bd-highlight w-25">
                </div>
                <div class=" bd-highlight w-100">
                  <?php include "sidebar.php"?>
                </div>
              </div>
            </div>    
          </div>
 
        <!-- variables of the navbar -->
        <input type="hidden" name="todas" id="todas" value="<?php echo $todas;?>">
        <input type="hidden" name="pais" id="pais" value="<?php echo $pais;?>">
        <input type="hidden" name="universidad " id="universidad" value="<?php echo $universidad;?>">
        <input type="hidden" name="confesion_id" id="confesion_id" value="<?php echo $confesion_id;?>">
        
            
    </body>
    </html>
  <?php
  }
  catch (Exception $e){
    include 'error.php';
  }
?>

