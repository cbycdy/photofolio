<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div id="container">
	<h1>Sean Seungwoo Choi</h1>

	<div id="body">
		<h3>Welcome to Sean's photofolio page.</h3>
		<p>This page is built in php with CodeIgniter Version <?=CI_VERSION?> to demonstrate my skill set as <strong><u>Full-stack developer</u></strong>.</p>
		<ul>
			<li>
				<h3>Server Hosting: </h3>
				<p>This page is not hosted by typical web hosting service such as godaddy.com, bluehost.com, etc. but hosted by Sean's server in his home.
				<br>Therefore, this page is working only while his server (home computer) and ISP (Xfinity) are on.</p>
			</li>
			<li>
				<h3>Web Development, Front End (Client Side): </h3>
				<p>I put a simple example of responsive web design that is created by HTML5 and CSS3.
				<br>The example is using only limited number of JavaScript funciton (with Jquery) that is for mobile menu's mouse event.</p>
				<p>Some programers think JavaScript is better in performance; however most programers agree on writing CSS is simpler.
				<br>In addiaion, I think animation and transition are more belong to style part, and here is a tacit agreement:
				<code>
					HTML => Structure
					<br>CSS => Styles
					<br>JS => Logic
				</code>
				Here is the example and it is also included some parallax scrolling that is made by pure CSS3 (No javascript needed for this simple thing.)</p>
				<code><a  target='_blank' href='<?=base_url()?>responsive_web_design'>Responsive Web Design</a></code>
			</li>
			<li>
				<h3>Web Development, Back End (Server Side): </h3>
				<code><a  target='_blank' href='<?=base_url()?>user_access_control'>User Access Control (SignIn, SignUp, AJAX, etc.)</a></code>
			</li>
			<li>
				<h3>Model–view–controller (MVC): </h3>
				<h4>What is MVC? - <a target='_blank' href='https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller'>Wikipedia</a></h4>
				<p>I have learned and practiced MVC for both GUI and web development environments.
				<br>In this photofolio, I would discuss only web development side.
				<br>Most modern web application frameworks follow the MVC architectural pattern. So CodeIgniter does.
				<br>(This photofolio pages are written with CodeIgniter Version <?=CI_VERSION?>.)</p>
				<h4>MVC example.</h4>
				<p>"User Access Control" from above as an example, following links are representing how CodeIgniter works in MVC pattern.</p>
				<code>
					<a target='_blank' href='https://github.com/cbycdy/photofolio/tree/master/app/models/user.php'>User Model</a>
					<br><a target='_blank' href='https://github.com/cbycdy/photofolio/tree/master/app/controllers/user_access_control.php'>User Access Control Controller</a>
					<br><a target='_blank' href='https://github.com/cbycdy/photofolio/tree/master/app/views/header.php'>Header View</a>
					<br><a target='_blank' href='https://github.com/cbycdy/photofolio/tree/master/app/views/user_access_control.php'>User Access Control View</a>
					<br><a target='_blank' href='https://github.com/cbycdy/photofolio/tree/master/app/views/footer.php'>Footer View</a>
				</code>
			</li>
			<li>
				<h3>Source Control, GIT: </h3>
				<p>All codes are on my own GIT repository.
				<br>Git repository is usually installed on hosting server or GitHub private repository.
				</p>
				<p>Installing new git repository is usually works like this:</p>
				<b>In Server:</b>
				<code>
					mkdir [new project name]
					<br>cd [new project name]
					<br>git init --bare
				</code>
				<p>That will create an empty Git repository. Then,</p>
				<b>In Local:</b>
				<code>
					git clone username@hostserver_address:[new project repository path in server]
				</code>
				<p>Copy all project codes to the [new project name] directory that is created by cloning repository. Then,</p>
				<b>In local's [new project name] directory:</b>
				<code>
					git add .
					<br>git commit -am "[First Commit message]"
					<br>git push origin master
				</code>
				<p>This photofolio however, has a public repository at GitHub to demonstrate how the code looks like.
				<br>Here is the public repository:</p>
				<code><a target='_blank' href='http://github.com/cbycdy/photofolio'>Github Public Repository</a></code>
				<p>I won't explain more details here how Git helps for version control and handling conflicts in team project.
				<br>If you want to learn more about version control, try follow links:</p>
				<code>
					<a href="http://git-scm.com/book/en/v2/Getting-Started-About-Version-Control" target="_blank">Git - About Version Control</a>
					<br><a href="http://git-scm.com/book/en/v2/Git-Branching-Basic-Branching-and-Merging" target="_blank">Git Branching - Basic Branching and Merging</a>
				</code>
			</li>
		</ul>
		<p>*Note: Most CSS and Front-end codes in this photofolio are written by myself to demonstrate that I know those tricks, but that doesn't mean I don't know how to use other front-end framework, library, or plug-in.</p>
	</div>
</div>

