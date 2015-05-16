<header>
		<nav>
			<a href="index.php">
				<img src="images/logo.png" alt="Logo Shift">
			</a>
			<ul id="menu">
				<li><a href="discover.php">Discover</a></li>
				<li>
					<?php if(isset($_SESSION['userid'])): ?>
						<a href="profile.php">Profile</a>
					<?php else: ?>
						<a href="login.php">Login</a>
					<?php endif; ?>
				</li>
				<li>
					<?php if(isset($_SESSION['userid'])): ?>
						<a href="logout.php">Logout</a>
					<?php else: ?>
						<a href="register.php">Register</a>
					<?php endif; ?>

				</li>	
			</ul>
		</nav>
</header>