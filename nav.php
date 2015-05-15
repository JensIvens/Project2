<header>
		<nav>
			<a href="index.php">
				<img src="images/logo.png" alt="Logo Shift">
			</a>
			<ul id="menu">
				<li><a href="discover.php">Discover</a></li>
				<li>
					<?php if(isset($_SESSION['loggedin'])): ?>
						<a href="logout.php">Logout</a>
					<?php else: ?>
						<a href="login.php">Login</a>
					<?php endif; ?>
				</li>
				<li><a href="register.php">Register</a></li>	
			</ul>
		</nav>
</header>