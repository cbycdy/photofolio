<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link rel="stylesheet" type="text/css" href='<?=base_url('css/user_access_control.css')?>'>
<div id="container">
	<h1>User Access Control</h1>
	<div id="body">
		<div class='user_access_control_body'>
			<div class="left_body">
				<ul>
					<!-- Sign in -->
					<li style="margin: auto;">
						<strong>Sign in</strong>
						<div class='signup_div'>
							<form class='signup_form' method='post' action='<?=base_url('user_access_control')?>'>
								<?=$signin_msg?>
								<div><input class='signup_input' id='username' placeholder='Username' name='username' type='text' required></div>
								<div><input class='signup_input' placeholder='Password' name='password' type='password' required></div>
								<input type='hidden' name='from_type' value='signin'>
								<input class='user_access_control_submit' type='submit' value="Sign In">
							</form>
						</div>
					</li>
					<!-- Sign up -->
					<li>
						<strong>Sign up</strong>
						<div class='signup_div'>
							<form class='signup_form' method='post' action='<?=base_url('user_access_control')?>' onsubmit="return validateRegister(this)">
								<p id='form_error_msg'><?=$signup_msg?></p>
								<div><input class='signup_input' placeholder='First Name' name='firstname' type='text' required></div>
								<div><input class='signup_input' placeholder='Last Name' name='lastname' type='text' required></div>
								<div>
									<input class='signup_input' id='username_input' placeholder='Username' name='username' type='text' required>
									<span><img class='loading_img' src='<?=base_url('images/loading.gif')?>'></span>
									<span id='username_check_msg'></span>
								</div>
								<div><input class='signup_input' placeholder='Password' name='password' type='password' required></div>
								<div><input class='signup_input' placeholder='Re-enter Password' name='password_confirm' type='password' required></div>
								<div>
									<input class='signup_input' id='email_input' placeholder='Email' name='email' type='email' required>
									<span><img class='loading_img' id='emailcheck_loading_img' src='<?=base_url('images/loading.gif')?>'></span>
									<span id='email_check_msg'></span>
								</div>
								<input type='hidden' name='from_type' value='signup'>
								<input class='user_access_control_submit' type='submit'>
							</form>
						</div>
					</li>
				</ul>
			</div>
			<!-- User Table from Database -->
			<div class="right_body">
			<strong>User table in database</strong>
			<br><br>
				<div class='user_table'>
				<table>
					<? foreach ($users as $key => $value)
					{ 
						if($key === 0)
						{
							foreach ($value as $key => $val)
							{
								echo "<th>".$key."</th>";
								echo "\n";
							}
						}
						echo '<tr>';
						foreach ($value as $field_name => $field)
						{
							echo "<td>";
							//Password is too long to display. Just display the first 12 characters.
							if($field_name === 'password')
								echo substr($field, 0, 12) . '..';
							else
								echo $field;
							
							echo "</td>";
							echo "\n";
						}
						echo '</tr>';
					}?>
				</table>
				</div> <!-- user_table div-->
			</div> <!-- right_body -->
		</div>
		<div class='explanation'>
			<p><u>Simple Sign-Up / Sign-In functionalities.</u>
			<br>Username and Email input are checking if there is a duplicate in db by <b>AJAX</b>.
			<br>Password is checked by <b>Javascript validation function</b> to make sure that the user have a strong password.
			<br>Passwords are stored in <b>salted hash-string</b> which is very secure from lots of cracking password tricks such as <a target="_blank" href='https://en.wikipedia.org/wiki/Rainbow_table'>rainbow table</a>.
			<br>You may check more details from following code: 
			<code><a target='_blank' href='https://github.com/cbycdy/photofolio/blob/master/app/helpers/password_helper.php'>https://github.com/cbycdy/photofolio/blob/master/app/helpers/password_helper.php</a></code></p>
		</div>
	</div>
</div>

<script type="text/javascript">
	var good_username = false, good_email = false;
	//check username, AJAX
	$('#username_input').keyup(function(){
		good_username = false;
		$('.loading_img').show();		
		$.ajax({
          type : 'POST',
          url : "<?=base_url('user_access_control/username_check_ajax')?>",
          dataType : 'json',
          data: {
            username: $('#username_input').val()
          },

          success : function(data){
            $('#username_check_msg').html(data.msg);
            if(data.result == 'success'){
            	good_username = true;
            	console.log(data.result);
            }
          },
          error : function(XMLHttpRequest, textStatus, errorThrown) { }

        }, $('.loading_img').hide());

	});

	//check email, AJAX
	$('#email_input').keyup(function(){
		good_email = false;
		$('#emailcheck_loading_img').show();		
		$.ajax({
          type : 'POST',
          url : "<?=base_url('user_access_control/email_check_ajax')?>",
          dataType : 'json',
          data: {
            email: $('#email_input').val()
          },

          success : function(data){
            $('#email_check_msg').html(data.msg);
            if(data.result == 'success'){
            	good_email = true;
            }
          },
          error : function(XMLHttpRequest, textStatus, errorThrown) { }

        }, $('#emailcheck_loading_img').hide());

	});

	/*
	* Form validation:
	*
	* @Author: Sean Seungwoo Choi
	* 
	*  username requires only letters and numbers. (!@#$%^&*() kinds special character is not allowd)
	*  password requires at least one number, lowecase letter, uppercase letter, and at least 6 long.
	* 
	* See the details from error message.
	*
	*  "required" attribute won't wonk with Safari nor IE. 
	*/	
	function validateRegister(form) {
		
		if(!good_username){
			$('#form_error_msg').text("Username is invalid");
		    form.username.focus();
		    return false;	
		}
		if(!good_email){
			$('#form_error_msg').text("Email is invalid");
		    form.email.focus();
		    return false;	
		}

		//check blank validation for Safari and IE
		if(form.username.value == "" || form.username.value == null){
			$('#form_error_msg').text("Username must be entered");
		      form.username.focus();
		      return false;	
		}
		if(form.password.value == "" || form.password.value == null){
			$('#form_error_msg').text("Password must be entered");
		      form.password.focus();
		      return false;	
		}
		if(form.password_confirm.value == "" || form.password_confirm.value == null){
			$('#form_error_msg').text("Confirm Password must be entered");
		      form.password_confirm.focus();
		      return false;	
		}
		if(form.firstname.value == "" || form.firstname.value == null){
			$('#form_error_msg').text("First Name must be entered");
		      form.firstname.focus();
		      return false;	
		}
		if(form.lastname.value == "" || form.lastname.value == null){
			$('#form_error_msg').text("Last Name must be entered");
		      form.lastname.focus();
		      return false;	
		}
		if(form.email.value == "" || form.email.value == null){
			$('#form_error_msg').text("Email must be entered");
		      form.email.focus();
		      return false;	
		}
		
		console.log('here');

		regex = /^\w+$/;
	    if(!regex.test(form.username.value)) {
	    	$('#form_error_msg').text("Error: Username must contain only letters, numbers and underscores!");
	    	form.username.focus();
	    	return false;
	    }
	    if(form.password.value != "" && form.password.value == form.password_confirm.value) {
			if(form.password.value.length < 6) {
		        $('#form_error_msg').text("Error: Password must contain at least six characters!");
		        form.password.focus();
		        return false;
	    	}
			if(form.password.value == form.username.value) {
		        $('#form_error_msg').text("Error: Password must be different from Username!");
		        form.password.focus();
		        return false;
		    }
			regex = /[0-9]/;
			if(!regex.test(form.password.value)) {
		        $('#form_error_msg').text("Error: password must contain at least one number (0-9)!");
		        form.password.focus();
		        return false;
	      	}
			regex = /[a-z]/;
			if(!regex.test(form.password.value)) {
	        	$('#form_error_msg').text("Error: password must contain at least one lowercase letter (a-z)!");
	        	form.password.focus();
	        	return false;
	      	}
			regex = /[A-Z]/;
			if(!regex.test(form.password.value)) {
	        	$('#form_error_msg').text("Error: password must contain at least one uppercase letter (A-Z)!");
	        	form.password.focus();
	        	return false;
	      	}
	    } else {
			$('#form_error_msg').text("Error: Please check that you've entered and confirmed your password!");
	      	form.password.focus();
	      	return false;
	    }

		return true;

   	} //end function

</script>