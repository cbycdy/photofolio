<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div id="container">
	<h1>Sean Seungwoo Choi</h1>

	<div id="body">
		<h3>Welcome to Sean's photofolio page.</h3>
		<p>This page is built in php with CodeIgniter Version <?=CI_VERSION?> to demonstrate my skill set as Full-stack developer.</p>
		<ul>
			<li>
				<h3>Server Hosting : </h3>
				<p>This page is not hosted by typical web hosting service such as godaddy.com, bluehost.com, etc. but hosted by Sean's server in his home.
				<br>Therefore, this page is working only while his server (home computer) and ISP (Xfinity) are on.</p>
			</li>
			<li>
				<h3>Web Development, Front End (Client Side) : </h3>
				<code><a href='<?=base_url()?>responsive_web_design'>Responsive Web Design</a></code>
			</li>
			<li>
				<h3>Web Development, Back End (Server Side): </h3>
				<code><a href='<?=base_url()?>user_access_control'>User Access Control (SignIn, SignUp, AJAX, etc.)</a></code>
			</li>
			<li>
				<h3>Source Control, GIT : </h3>
				<p>All codes are on my own GIT repository.
				<br>Git repository is usually installed on hosting server or GitHub private repository.
				</p>
				<p>Installing new git repository is usually works like this:</p>
				<b>Server :</b>
				<code>
					mkdir [new project name]
					<br>cd [new project name]
					<br>git init --bare
				</code>
				<b>Local :</b>
				<code>
					git clone username@hostserver_address:~/[new project name]
				</code>
				Copy all project code to [new project name] directory that created by cloning repository.
				<code>
					git add .
					<br>git commit -am "[First Commit message]"
					<br>git push origin master
				</code>
				This photofolio code however, has a public repository at GitHub to demonstrate how the code looks like.	
				<code><a target='_blank' href='http://github.com/cbycdy/photofolio'>Github Public Repository</a></code>
				<p>I won't explain more details here how Git helps for version control and handling conflicts in team project.
				<br>If you want to learn more about version control, try follow links :</p>
				<code>
					<a href="http://git-scm.com/book/en/v2/Getting-Started-About-Version-Control" target="_blank">Git - About Version Control</a>
					<br><a href="http://git-scm.com/book/en/v2/Git-Branching-Basic-Branching-and-Merging" target="_blank">Git Branching - Basic Branching and Merging</a>
				</code>
			</li>
		</ul>
		<p>*Note : Most CSS and Front-end code in this photofolio are written by myself to demonstrate that I know those tricks, but that doesn't mean I don't know how to use other front-end framework, library, or plug-in.</p>
	</div>
</div>

