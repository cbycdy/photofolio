<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="footer">
	<p>
		Page rendered in <strong>{elapsed_time}</strong> seconds & Memory Used in <strong> {memory_usage}</strong></br>
		Last Update on <?=substr(standard_date('DATE_RSS',now()),0,-5)?>
	</p>
</div>

</body>
</html>