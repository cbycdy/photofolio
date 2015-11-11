<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link rel="stylesheet" type="text/css" href='<?=base_url('css/responsive_web_design.css')?>'>

<div class='responsive_header'>
	<div class='responsive_nav'>
		<div class='responsive_logo'><a href='<?=base_url()?>'><img class='logo' src='<?=base_url('images/logo.png')?>'></a></div>
		<ul class="responsive_menu">
			<li class="responsive_menu_item">
				Menu 1
				<ul class='responsive_sub_menu'>
					<li>Sub-Menu 1</li>
					<li>Sub-Menu 2</li>
					<li>Sub-Menu 3</li>
				</ul>
			</li>
			<li class="responsive_menu_item">
				Menu 2
				<ul class='responsive_sub_menu'>
					<li>Sub-Menu 1</li>
					<li>Sub-Menu 2</li>
					<li>Sub-Menu 3</li>
				</ul>
			</li>
			<li class="responsive_menu_item">
				Menu 3
				<ul class='responsive_sub_menu'>
					<li>Sub-Menu 1</li>
					<li>Sub-Menu 2</li>
					<li>Sub-Menu 3</li>
				</ul>
			</li>
			<li class="responsive_menu_item">
				Menu 4
				<ul class='responsive_sub_menu'>
					<li>Sub-Menu 1</li>
					<li>Sub-Menu 2</li>
					<li>Sub-Menu 3</li>
				</ul>
			</li>
		</ul>
		<div class='mobile_menu_container'>
			<img class='mobile_icon' src='<?=base_url('images/nav-icon.png')?>'>
			<ul class="mobile_menu">
				<li class="mobile_menu_item" onclick="mobile_menu_clicked(1)">
					Menu 1
					<ul class='mobile_sub_menu' id='mobile_sub_menu1'>
						<li>Sub-Menu 1</li>
						<li>Sub-Menu 2</li>
						<li>Sub-Menu 3</li>
					</ul>
				</li>
				<li class="mobile_menu_item" onclick="mobile_menu_clicked(2)">
					Menu 2
					<ul class='mobile_sub_menu' id='mobile_sub_menu2' >
						<li>Sub-Menu 1</li>
						<li>Sub-Menu 2</li>
						<li>Sub-Menu 3</li>
					</ul>
				</li>
				<li class="mobile_menu_item" onclick="mobile_menu_clicked(3)">
					Menu 3
					<ul class='mobile_sub_menu' id='mobile_sub_menu3'>
						<li>Sub-Menu 1</li>
						<li>Sub-Menu 2</li>
						<li>Sub-Menu 3</li>
					</ul>
				</li>
				<li class="mobile_menu_item" onclick="mobile_menu_clicked(4)">
					Menu 4
					<ul class='mobile_sub_menu' id='mobile_sub_menu4'>
						<li>Sub-Menu 1</li>
						<li>Sub-Menu 2</li>
						<li>Sub-Menu 3</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class='top_banner'>
	<img class='top_banner_img' id='top_banner_img1' src='<?=base_url('images/top_banner.jpg')?>'>
	<img class='top_banner_img' id='top_banner_img2' src='<?=base_url('images/top_banner2.jpg')?>'>
</div>
<div class='contents_container1'>
	<div class='card_container'>
		<div class='card blue_card'>
			<h2>Lorem ipsum</h2>
			<p>Dolor sit amet, consectetur adipiscing elit. Etiam at tortor id quam pharetra fringilla sed quis quam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec efficitur interdum est sed dapibus. Suspendisse id arcu vitae urna mattis tincidunt rutrum nec odio. Quisque fringilla tellus ligula, a pellentesque lorem rutrum id. Pellentesque sit amet sodales purus. Sed vel elementum felis. Aliquam elementum sagittis libero sed interdum. Nam non suscipit ante, nec fringilla purus. Etiam tempor cursus turpis sit amet vestibulum.<br><br><br></p>
		</div>
		<div class='card green_card'>
			<h2>Nunc porttitor</h2>
			<p>Elementum velit ut gravida. Ut nibh dui, mattis ut ultricies quis, vulputate a ante. Quisque iaculis condimentum lectus eu ullamcorper. Nullam vitae ornare tortor, eu maximus massa. Vivamus cursus maximus leo, eu iaculis nisl volutpat quis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum non elementum nisi.<br><br><br></p>
		</div>
		<div class='card blue_grey_card'>
			<h2>Maecenas et</h2>
			<p>Nibh fringilla, gravida mauris sit amet, auctor sapien. Morbi vel erat ut enim egestas finibus. Cras non euismod orci. Sed euismod nisi ligula, eu vulputate libero tristique a. Mauris lacus urna, vehicula et accumsan sit amet, mollis efficitur massa. Mauris nec mi nisi. Cras fermentum nec enim eu vehicula. Quisque lacus velit, euismod quis dictum vel, consequat vitae purus. Quisque sem tellus, porta id congue in, sodales sed nisi. Suspendisse tincidunt metus ut sapien scelerisque finibus.<br><br></p>
		</div>
	</div>
	<div class="image_container">
		<div class="img_card">
			<img src="<?=base_url('images/content_img1.jpg')?>">
			<div class="img_card_content">
				<h2>Donec laoreet</h2>
				<p>Massa ut iaculis vulputate, enim justo ullamcorper augue, et interdum nibh felis at augue. In iaculis maximus lectus vitae rhoncus. Nam ullamcorper pretium consequat. Integer malesuada vestibulum lectus sed elementum. Donec commodo non tellus id iaculis. Vestibulum nisl orci, rhoncus eu euismod ut, varius in nisl. Nulla dictum ex ac turpis aliquam, eget laoreet diam semper.</p>
			</div>
		</div>
	</div>
</div>
<div class="contents_container2">
	<div class='bottom_banner parallax_img'>
		<div>I would put Something here!</div>
	</div>
</div>
<div class="contents_container3">
	<div class="bottom_banner parallax_img2">
		<div><span>And definately here, too!</span></div>
	</div>
</div>

<div class="responsive_footer">
	<div class='responsive_footer_section'>&nbsp;
	</div>
	<div class='responsive_footer_section'>
		<ul>
			<li class='footer_section_header'>Footer Links</li>
			<li class='fotter_section_item'><a href='#'>Lorem Ipsum</a></li>
			<li class='fotter_section_item'><a href='#'>Dolor Sit Amet</a></li>
			<li class='fotter_section_item'><a href='#'>Consectetur</a></li>
			<li class='fotter_section_item'><a href='#'>Adipiscing</a></li>
			<li class='fotter_section_item'><a href='#'>Etiam At</a></li>
			<li class='fotter_section_item'><a href='#'>Tortor Id</a></li>
		</ul>
		<ul>
			<li class='footer_section_header'>Footer Links</li>
			<li class='fotter_section_item'><a href='#'>Quam pharetra</a></li>
			<li class='fotter_section_item'><a href='#'>Sed Quis</a></li>
			<li class='fotter_section_item'><a href='#'>Interdum Et Ma</a></li>
		</ul>
	</div>
	<div class='responsive_footer_section'>
		<ul>
			<li class='footer_section_header'>Footer Links</li>
			<li class='fotter_section_item'><a href='#'>Maecenas Et
			<li class='fotter_section_item'><a href='#'>Nibh Fringilla</a></li>
			<li class='fotter_section_item'><a href='#'>Gravida Mauris</a></li>
			<li class='fotter_section_item'><a href='#'>Sit Amet</a></li>
			<li class='fotter_section_item'><a href='#'>Auctor Sapien</a></li>
		</ul>
		<ul>
			<li class='footer_section_header'>Footer Links</li>
			<li class='fotter_section_item'><a href='#'>Morbi</a></li>
			<li class='fotter_section_item'><a href='#'>Vel Erat</a></li>
			<li class='fotter_section_item'><a href='#'>Enim</a></li>
			<li class='fotter_section_item'><a href='#'>Egestas</a></li>
			<li class='fotter_section_item'><a href='#'>Finibus</a></li>
			<li class='fotter_section_item'><a href='#'>Cras Non</a></li>
		</ul>
	</div>
	<div class='responsive_footer_section'>
		<ul>
			<li class='footer_section_header'>Footer Links</li>
			<li class='fotter_section_item'><a href='#'>Euismod</a></li>
			<li class='fotter_section_item'><a href='#'>Sed Euismod</a></li>
			<li class='fotter_section_item'><a href='#'>Ullamcorper</a></li>
			<li class='fotter_section_item'><a href='#'>Interdum Nibh</a></li>
			<li class='fotter_section_item'><a href='#'>Vulputate</a></li>
			<li class='fotter_section_item'><a href='#'>Tristique</a></li>
			<li class='fotter_section_item'><a href='#'>Mauris</a></li>
			<li class='fotter_section_item'><a href='#'>Lacus Urna</a></li>
			<li class='fotter_section_item'><a href='#'>Vehicula</a></li>
		</ul>
	</div>
	<div class='copyright'>Copyright © 2015 Sean Web. All rights reserved.</div>
</div>

<script type="text/javascript">
	$('.mobile_icon').click(function(){
		$('.mobile_menu').slideToggle(250);
	});
	function mobile_menu_clicked(menu_num) {
		$('.mobile_sub_menu').slideUp(250);
		if (! $('#mobile_sub_menu'+menu_num).is(':visible'))
		{
			$('#mobile_sub_menu'+menu_num).slideDown(250);	
		}
	}
</script>