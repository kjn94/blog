<?php
	require_once '../../core/init.php';
	$sql = "SELECT * FROM blog WHERE blogcategories = 1";
	$success = $db->query($sql);
?>

<?php
	$sql = "SELECT * FROM blog WHERE blogcategories = 2";
	$entrepreneur = $db->query($sql);
?>

<?php
	$sql = "SELECT * FROM blog WHERE blogcategories = 3";
	$motivation = $db->query($sql);
?>

<?php
	$sql = "SELECT * FROM blog WHERE blogcategories = 4";
	$lifestyle = $db->query($sql);
?>
<?php
	$sql = "SELECT * FROM mainmenu WHERE parent = 1";
	$footermenu = $db->query($sql);
?>

<head>
	<link href="http://localhost/blog/css/footer3.css" rel="stylesheet" type="text/css" />
</head>
 		<!--------FOOTER MENU-------->
 		<div class="footermenu">
<?php while($footer = mysqli_fetch_assoc($footermenu)) : ?>

			<li >
				<a href="<?php echo $footer['href']?>"><?php echo $footer['menu']?>
				</a>
			</li>		
		<?php endwhile; ?>
     </div>
<footer>
<div class="container">
  <div class="boxes">
    <div class="box-row">
      <div class="box-cell one">
        <div class="box-content">
        	<div id="hoverfooter">
				<a href="http://localhost/blog/pages/blog/blog_category.php?cid=1"><h3><b>SUCCESS STORIES</b></h3>
				</a>
			</div>
					<?php 
			            while($blog = mysqli_fetch_assoc($success)){
			                ?>
			                	<a href="<?php echo $blog['href']?>" target="_blank">
								<div id="hoverfooter">
								<?= $blog['title']; ?>
								<br></div>   
								</a>
			                <?php
			            }
			        ?>
        </div>
      </div>

      <div class="box-cell two">
        <div class="box-content">
        	<div id="hoverfooter">
        		<a href="http://localhost/blog/pages/blog/blog_category.php?cid=2">
 					<h3><b>ENTREPRENEUR</b></h3>
 				</a>
 			</div>
					<?php 
			            while($blog = mysqli_fetch_assoc($entrepreneur)){
			                ?>
			                	<a href="<?php echo $blog['href']?>" target="_blank">
								<div id="hoverfooter">
								<?= $blog['title']; ?>
								<br></div>   
								</a>
			                <?php
			            }
			        ?>
        </div>
      </div>
      
      <div class="box-cell three">
        <div class="box-content">
        	<div id="hoverfooter">
        		<a href="http://localhost/blog/pages/blog/blog_category.php?cid=4">
						<h3><b>LyfeStyle</b></h3>
				</a>
			</div>
					<?php 
			            while($blog = mysqli_fetch_assoc($lifestyle)){
			                ?>
			                	<a href="<?php echo $blog['href']?>" target="_blank">
								<div id="hoverfooter">
								<?= $blog['title']; ?>
								<br></div>   
								</a>
			                <?php
			            }
			        ?>
        </div>
      </div>
      
      <div class="box-cell three">
        <div class="box-content">
            <div id="hoverfooter">
        		<a href="http://localhost/blog/pages/blog/blog_category.php?cid=3">
						<h3><b>Motivation</b></h3>
				</a>
			</div>
							<?php 
					            while($blog = mysqli_fetch_assoc($motivation)){
					                ?>
										<a href="<?php echo $blog['href']?>" target="_blank">
										<div id="hoverfooter">
										<?= $blog['title']; ?>
										<br></div>
										</a>									   
					                <?php
					            }
					        ?>
        </div>
      </div>
    </div>
  </div>
</div>
</footer>
 
	<!--------SECOND FOOTER-------->
		 <footer class="second">	 
		 	<center><p>Copywrite Secret Entourage 2006-2016. All Rights Reserved.</p></center>
		 </footer>
