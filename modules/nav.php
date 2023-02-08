<?php
	session_start();
?>

<?php if (isset($_SESSION['islogin']) && $_SESSION['islogin'] == 1) : ?>
	<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
			<ul class="nav sidebar-nav">
					<li class="sidebar-brand">
							<a href="index.php">
								<img src="images/mattendance_logo_small.png" alt="mAttendance">
							</a>
					</li>
					<li>
							<a href="index.php?page=dashboard">Dashboard</a>
					</li>
					<li>
							<a href="index.php">Take Attendance</a>
					</li>
					<li>
							<a href="index.php?page=studentinfo">Assigned to You</a>
					</li>
					<li>
							<a href="index.php?page=reports">Reports</a>
					</li>
					<li>
							<a href="index.php?page=help">Help</a>
					</li>
					<li>
							<a href="index.php?page=logout">Logout</a>
					</li>
			</ul>
	</nav>
<?php else: ?>
	<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation" style="background-color: black; box-shadow: 0 1px 3px rgba(0,0,0, 0.1);">
			<ul class="nav sidebar-nav">
					<li class="sidebar-brand" style="height: 50px;">
							<a href="index.php" style="    max-height: 50px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;">
								<!-- todo : replace this -->
								<img src="images/TrackZ.png" alt="track z" style="width: 100px;
    position: relative;
    bottom: 2px;">
							</a>
					</li>
					<li>
							<a href="index.php">Login</a>
					</li>
					<li>
							<a href="index.php?page=teacherspage">Teacher's Section</a>
					</li>
					<li>
							<a href="index.php?page=studentspage">Student's Section</a>
					</li>
			</ul>
	</nav>
<?php endif; ?>