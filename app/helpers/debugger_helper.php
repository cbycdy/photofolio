<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	
	/**
	 *	Method to display an object, array, or variable to the screen for debugging purposes.
	 *
	 *	@param	var		An object, an array, or a variable
	 *	@output	string	Echo output to the screen
	 */
	if ( ! function_exists('debug'))
	{
	    
		function debug($obj, $print_r = TRUE)
		{
			
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
			echo "<pre style=\"color:red; background-color: white; \">";	
			if ($print_r) 
			{
				print_r($obj);
			}
			else 
			{
				if (is_bool($obj)) {
					$bool_val = ($obj) ? 'true' : 'false' ;
					echo "[bool] = $bool_val\n";
				} 
				else 
				{
					echo parse($obj);
				}
			}
			echo "</pre>";	

		}
	}	 

    
/* End of file debug_helper.php */
/* Location: application/helpers/debug_helper.php */
