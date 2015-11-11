<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="footer">
<div>

</div>
	<p>
		<a target='_blank' href="https://www.linkedin.com/in/seungwoo-choi-a4b2b646">About me</a>
		<!-- Memory Usage Information -->
		<br>Page rendered in <strong>{elapsed_time}</strong> seconds & Memory Used in <strong> {memory_usage}</strong>
		<!-- Last Modified Date/Time for Main.php -->
		<br>Last Update on <?=date("F d Y H:i:s.", filemtime(APPPATH . 'views/main.php'))?>		
	</p>
</div>

</body>
</html>