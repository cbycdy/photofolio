<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds & Memory Used in <strong> {memory_usage} </div>
<div class="last_update">Last Update on <?=substr(standard_date('DATE_RSS',now()),0,-5)?></div>
</body>
</html>