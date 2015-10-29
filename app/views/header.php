<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sean's Photofolio</title>
	<link rel='shortcut icon' href='<?=base_url()?>images/favicon.png'>
	<link rel="stylesheet" type="text/css" href='<?=base_url()?>css/default.css'>
	<link rel="stylesheet" type="text/css" href='<?=base_url()?>css/jquery.jgrowl.css'>
	<script type="text/javascript" src="<?=base_url()?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>js/jquery.jgrowl.js"></script>
	
	<script type="text/javascript">
		$(function(){
			<?=$this->session->message('post_msg')?>
		});
	</script>
	

</head>
<body>