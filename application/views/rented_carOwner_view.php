<header id="header" class="">
	<style type="text/css" media="screen">
	#d1{
		width: 100%;
		min-height: 500px;
		background-color: #87e598;
	    margin: 100px auto 150px;
	    display: none;

	}	
	</style>
	<script src="<?php echo base_url(); ?>js/jquery-3.1.1.js"></script>
<script src="<?php echo base_url(); ?>js/home.js"></script>
<script type="text/javascript" src="css/jquery.js"></script>
<script type="text/javascript" src="css/jquery.ui.js"></script>
	<script>
		$(document).ready(function() {
			
			$("#d1").slideDown(1000);
		});
	</script>
<?php 
$this->load->view('header');
 ?>

</header><!-- /header -->
<center><h1 style="color: #1393af;">Your messages !</h1>
<h1 style="color: #ad280a"><?php 
if($this->session->flashdata('c_deleted'))
{
echo $this->session->flashdata('c_deleted');
}
?></h1>
</center>
<?php
if(!empty($result["emails"]) && !empty($result["id"]) && !empty($result["time"]) && !empty($result["readed"])):
?>
<div id="d1">
<div style="float: left;margin-left: 40px">
	<?php
	foreach ($result["emails"] as $value) :
		
	?>

<div>
<h4><?= $value?> wanted to hiring you </h4>

</div>
<?php

 endforeach;?>
</div>


<div style="float: left;margin-left: 40px">
	<?php
	foreach ($result["readed"] as $value) :
		
	?>

<div>
<?php
if($value != 0):
?>
<h4 style="color: green"> readed !!</h4>
<?php
else:
?>
	<h4 style="color: red">not readed !!</h4>
<?php
endif;

?>
</div>

<?php

 endforeach;?>
</div>



<div style="float: left;margin-left: 40px">
	<?php
	foreach ($result["time"] as $value) :
		
	?>

<div>
<h4>The message arrivreed at <?= $value?></h4>

</div>
<?php

 endforeach;?>
</div>
<div style="float: left;margin-left: 40px">
	<?php
	foreach ($result["id"] as $value) :
		
	?>

<div>
<h4><a style="text-decoration: none;" href="<?php echo base_url();?>Hire/delete_car/<?= $value?>">Delete</a></h4>
</div>
<?php

 endforeach;?>
</div>
<div style="float: left;margin-left: 40px">
	<?php
	foreach ($result["id"] as $value) :
		
	?>

<div>
<h4><a style="text-decoration: none;" href="<?php echo base_url();?>Hire/read_car/<?= $value?>">mark as Readed</a></h4>
</div>
<?php

 endforeach;?>
</div>


</div>

<?php
else:
?>
<div id="d1">
<center><h1>No messages founded</h1></center>
</div>
<?php endif;?>

<footer class="footer">
 <?php 
$this->load->view('footer');
 ?>	
</footer>
