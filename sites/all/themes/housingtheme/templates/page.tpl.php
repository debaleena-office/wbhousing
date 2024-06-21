
      <div class="dashboard">
         <?php include('includes/left_menu.php'); ?>


         <div id="content-wrapper" class="content-wrapper">
            <div class="main-content w-100 p-5">
            
               <?php include('includes/breadcrumb.php'); ?>
               <div id="messages">
                  <div class="section clearfix">
                     <?php print $messages; ?>
                  </div>
               </div>
               <?php print render($page['content']); ?>
               <hr/>
               <div class="row">
                  <p class="copyright">Copyright © All Rights Reserved</p>
               </div>



            </div>
         </div>
      </div>
