<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="footer">
	<p>
		<!-- Memory Usage Information -->
		Page rendered in <strong>{elapsed_time}</strong> seconds & Memory Used in <strong> {memory_usage}</strong>
		<!-- Last Modified Date/Time for Main.php -->
		<br>Last Update on <?=date("F d Y H:i:s.", filemtime(APPPATH . 'views/main.php'))?>
	</p>
</div>

</body>
</html>