<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <?php require_once("views/head/headmeta.php"); ?>
</head>
<body class="yui-skin-sam">
  <!-- Application Layout -->
  <div id="wrapper" class="container_12">
	
	  <div id="hd" class='grid_12 alpha omega'>
      <?php require_once("views/header.php"); ?>
	  </div> <!-- end of hd -->
	
	
      <div id="main_content" class="grid_12 alpha omega">
        <div id="content_btm"></div>
        <?php require_once("views/sidebar/main_sidebar.php"); ?>
				<div id="banner">
					<img src="public/images/index_banner.jpg">
				</div>

				<?php require_once("views/content/thank_you_content.php"); ?>
      </div> <!-- end of main_content -->

    <div id="ft" class="grid_12 alpha omega">
      <?php require_once("views/footer.php"); ?>

    </div> <!-- end of ft -->


    <div class="clear"></div>


	</div> <!-- end of wrapper -->
	
	 
	<?php require_once("views/javascripts.php"); ?>

</body>
</html>