<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
	<div class="m-header">
		<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
		<a href="dashboard.php" class="b-brand">
			<strong>Complaint Management</strong>
		</a>
		<a href="#!" class="mob-toggler">
			<i class="feather icon-more-vertical"></i>
		</a>
	</div>
	<div class="collapse navbar-collapse justify-content-center">
		<!-- Centered Toggle Button for Dark/Light Mode -->
		<ul class="navbar-nav ml-auto align-items-center">
			<li>
				<div id="mode-toggle" class="toggle-slider"></div>
			</li>
		</ul>
	</div>
	<div class="collapse navbar-collapse">
		<ul class="navbar-nav ml-auto">
			<li>
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" data-toggle="dropdown">
						<i class="icon feather icon-bell"></i>
						<?php
						$rt = mysqli_query($con, "select tblcomplaints.*,users.fullName as name from tblcomplaints join users on users.id=tblcomplaints.userId where tblcomplaints.status is null");
						$num1 = mysqli_num_rows($rt);
						?>
						<span class="badge badge-pill badge-danger"><?php echo htmlentities($num1) ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right notification">
						<div class="noti-head">
							<h6 class="d-inline-block m-b-0">Notifications</h6>
						</div>
						<ul class="noti-body">
							<li class="notification">
								<?php
								$cnt = 1;
								while ($row = mysqli_fetch_array($rt)) {
								?>
									<div class="media">
										<img class="img-radius" src="assets/images/user/user.png" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong><?php echo htmlentities($row['name']); ?></strong><span class="n-time text-muted"></p>
											<p>Complaint No.<a href="complaint-details.php?cid=<?php echo htmlentities($row['complaintNumber']); ?>"><?php echo htmlentities($row['complaintNumber']); ?> at <small><?php echo htmlentities($row['regDate']); ?></small> </a></p>
										</div>
									</div>
									<br><?php $cnt = $cnt + 1;
									} ?>
							</li>
						</ul>
						<div class="noti-footer">
							<a href="#!">show all</a>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="dropdown drp-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="feather icon-user"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right profile-notification">
						<div class="pro-head">
							<img src="assets/images/user/user-gear.png" class="img-radius" alt="User-Profile-Image">
							<?php
							$ret = mysqli_query($con, "select fullname from admin");
							$row = mysqli_fetch_array($ret);
							$name = $row['fullname'];
							?>
							<span> <?php echo $name; ?></span>
							<a href="logout.php" class="dud-logout" title="Logout">
								<i class="feather icon-log-out"></i>
							</a>
						</div>
						<ul class="pro-body">
							<li><a href="admin-profile.php" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
							<li><a href="setting.php" class="dropdown-item"><i class="feather icon-mail"></i> Settings</a></li>
							<li><a href="logout.php" class="dropdown-item"><i class="feather icon-lock"></i> Logout</a></li>
						</ul>
					</div>
				</div>
			</li>
		</ul>
	</div>
</header>

<script>
	const modeToggle = document.getElementById('mode-toggle');
	const currentMode = localStorage.getItem('theme') || 'light-mode';

	// Apply the initial mode
	document.body.classList.add(currentMode);
	if (currentMode === 'dark-mode') {
		modeToggle.classList.add('active');
	}

	modeToggle.addEventListener('click', function() {
		document.body.classList.toggle('dark-mode');
		document.body.classList.toggle('light-mode');

		// Update the slider position
		modeToggle.classList.toggle('active');

		// Save the mode preference in localStorage
		const theme = document.body.classList.contains('dark-mode') ? 'dark-mode' : 'light-mode';
		localStorage.setItem('theme', theme);
	});
</script>

<style>
	body.light-mode {
		background-color: #f7fafc;
		color: #2d3748;
	}

	body.dark-mode {
		background-color: #1a202c;
		color: #e2e8f0;
	}

	.custom-footer-bg.dark-mode {
		background-color: #1a202c;
	}

	.custom-footer-bg.light-mode {
		background-color: #f7fafc;
		color: #2d3748;
	}

	/* Slider Styling */
	.toggle-slider {
		margin-right: 10px;
		position: relative;
		width: 60px;
		height: 30px;
		background-color: #ccc;
		border-radius: 30px;
		cursor: pointer;
		transition: background-color 0.3s;
	}

	.toggle-slider::before {
		content: '';
		position: absolute;
		top: 3px;
		left: 3px;
		width: 24px;
		height: 24px;
		background-color: white;
		border-radius: 50%;
		transition: transform 0.3s;
	}

	.toggle-slider.active {
		background-color: #38a169;
	}

	.toggle-slider.active::before {
		transform: translateX(30px);
	}
</style>