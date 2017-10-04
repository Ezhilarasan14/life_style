<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Kappa</title>
	
	<?php
	$this->layout->load_view('layout/includes/head');
	?>
	
</head>
<body class="hold-transition skin-blue sidebar-mini fixed">
	
<div class="wrapper">
	<?php
		$this->layout->load_view('layout/includes/AdminLTE_Nav');
	?>
  	<?php
		$this->layout->load_view('layout/includes/AdminLTE_LeftSideSlider');
	?>
  	<?php
		$this->layout->load_view('layout/includes/AdminLTE_Container');
	?>
  	<?php
		$this->layout->load_view('layout/includes/AdminLTE_RightSideSlider');
	?>
</div>
	<?php
	 	echo $this->layout->load_view('layout/includes/fullpage-loader'); 
	 ?>
	<?php
		$this->layout->load_view('layout/includes/AdminLTE_Js');
	?>
	
</body>
</html>