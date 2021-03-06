<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class='img_box'><img id='face_picture' src='<?=base_url('images/seungwoo.png')?>'></div>

<div id="container">	
	<h1>Sean Seungwoo Choi - <a target='_blank' href='<?=base_url('files/Seunwoo_Choi_Resume.pdf')?>'>Resume</a></h1>
	<div id="body">
		<h3>Welcome to Sean's photofolio page.</h3>
		<p>This page is built in php with CodeIgniter Version <?=CI_VERSION?> to demonstrate my skill set as <strong><u>Full-stack developer</u></strong>.</p>
		<ul>
			<li>
				<h3>Web Hosting (Private Apache Server): </h3>
				<p>This page is not hosted by typical web hosting service such as godaddy.com, bluehost.com, etc. but hosted by Sean's server in his home.
				<br>Therefore, this page is working only while his server (home computer) and ISP (Xfinity) are on.</p>
			</li>
			<li>
				<h3>Front End (Client Side Web Development): </h3>
				<p>I put a simple example of responsive web design that is created by HTML5 and CSS3.
				<br>The example is using only limited number of JavaScript funciton (with Jquery) that is for mobile menu's mouse event.</p>
				<p>Some programers think JavaScript is better in performance; however most programers agree on writing CSS is simpler.
				<br>In addiaion, I think animation and transition are more belong to style part, and here is a tacit agreement:
				<code>
					HTML => Structure
					<br>CSS => Styles
					<br>JS => Logic
				</code>
				Here is an example of <strong>Front-End page</strong> that is also included some parallax scrolling that is made by pure CSS3 (No javascript needed for this simple thing.)</p>
				<code><a  target='_blank' href='<?=base_url('responsive_web_design')?>'><img src='<?=base_url('images/responsive_screenshot.jpg')?>'><br>Responsive Web Design</a></code>
			</li>
			<li>
				<h3>Back End (Server Side Web Development): </h3>
				<p>In general, the back-end development is including any parts of the application that would not be visible to the user.
				<br>In web development, it usually indicates any code running in server side.
				<br>User Access Control is one of good example to demonstrate some basic tricks of back-end programing. Because when a user sign-in or sign-up, the client have to post user's data such as username and password to server so it can be handled properly with the database.
				</p>
				<p>Here is an example of User Access Control and the relevant user table in database:</p>
				<code><a  target='_blank' href='<?=base_url('user_access_control')?>'><img src='<?=base_url('images/user_access_screenshot.jpg')?>'><br>User Access Control (SignIn, SignUp, AJAX, etc.)</a></code>
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
					Model - <a target='_blank' href='https://github.com/cbycdy/photofolio/tree/master/app/models/user.php'>User</a>
					<br>Controller - <a target='_blank' href='https://github.com/cbycdy/photofolio/tree/master/app/controllers/user_access_control.php'>User Access Control</a>
					<br>View - <a target='_blank' href='https://github.com/cbycdy/photofolio/tree/master/app/views/header.php'>Header</a>
					<br>View - <a target='_blank' href='https://github.com/cbycdy/photofolio/tree/master/app/views/user_access_control.php'>User Access Control</a>
					<br>View - <a target='_blank' href='https://github.com/cbycdy/photofolio/tree/master/app/views/footer.php'>Footer</a>
				</code>
			</li>
			<li>
				<h3>RESTful Web service (API): </h3>
				<h4>What is REST?</h4>
				<code>
					<a target='_blank' href='https://en.wikipedia.org/wiki/Representational_state_transfer'>RESTful Service - Wiki</a>
					<br><a target='_blank' href='http://spf13.com/post/soap-vs-rest'>Soap vs Rest - Blog</a>
				</code>
				<h4>RESTful Service built in this photofolio:</h4>
				<code>
					<a target='_blank' href='<?=base_url('rest_server')?>'><img src='<?=base_url('images/rest_server_screnshot.jpg')?>'><br>RESTful Server Tests</a>
				</code>
			</li>
			<li>
				<h3>Relational Database (SQL): </h3>
				<p>I have done some projects those requires to design, model, structure, optimize, and index database.</p>
				<h4>MyStuff Project</h4>
				<p>MyStuff is a yearlong core business system project in college. As part of project, it is required to design and model a database structure for entire business system.
				<br>Following links may help you to understand what the project looks like. </p>
				<code>
					<a target="_blank" href='<?=base_url('files/MyStuff_Case_Description.pdf')?>'>Case Description </a>
					<br><a target="_blank" href='<?=base_url('files/datamodel.pdf')?>'>Database Modeling</a>
					<br><a target="_blank" href='<?=base_url('files/RelationalDataModel.pdf')?>'>Relational Database Model</a>
					<br>
					<br>Report - <a target="_blank" href='<?=base_url('files/MYSTUFF-High.pdf')?>'>High Quality</a> <a target="_blank" href='<?=base_url('files/MYSTUFF-low.pdf')?>'>Low Quality</a>
					<br>Presentation - <a target="_blank" href='<?=base_url('files/MyStuff-ppt.pptx')?>'>pptx</a> <a target="_blank" href='<?=base_url('files/MyStuff-ppt.pdf')?>'>pdf</a>
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
				<code><a target='_blank' href='http://github.com/cbycdy/photofolio'><img src='<?=base_url('images/github_screenshot.jpg')?>'><br>Github Public Repository</a></code>
				<p>I won't explain more details here how Git helps for version control and handling conflicts in team project.
				<br>If you want to learn more about version control, try follow links:</p>
				<code>
					Git - <a href="http://git-scm.com/book/en/v2/Getting-Started-About-Version-Control" target="_blank">About Version Control</a>
					<br>Git Branching - <a href="http://git-scm.com/book/en/v2/Git-Branching-Basic-Branching-and-Merging" target="_blank">Basic Branching and Merging</a>
				</code>
			</li>
		</ul>
		<p>*Note: Most CSS and Front-end codes in this photofolio are written by myself to demonstrate that I know those tricks, but that doesn't mean I don't know how to use other front-end framework, library, or plug-in.</p>
	</div>
</div>

