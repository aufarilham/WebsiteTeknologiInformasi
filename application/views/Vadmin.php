<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: grey; color: white">
	<h1 style="text-align: center; color: white;">Login berhasil !</h1>
	<h2 style="text-align: center;">Hai, <?php echo $this->session->userdata("nama"); ?></h2>
	<a href="<?php echo base_url('login/logout'); ?>">Logout</a>
	<br>
	<div>
		<h1 style="text-align: center;"><a href="<?php echo base_url('crud'); ?>"</a>Melihat Pesan</h1>
	</div>

	<?php echo anchor('crud/export','Export ke Excel'); ?>

	<center><a style='color:orange; font-weight: bold; font-size: 40px' href="<?php echo base_url()?>Chart">Report</a></center>
</body>
</html>