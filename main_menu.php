<?php
	session_start();
	$parameters = 'email=' .
					$_SESSION['email'] .
					'&password=' .
					$_SESSION['password'];
?>
<ul class="ul_css">
	<li class="li_css">
		<a class="li_css_a"href="shopping"> Shopping </a>
	</li>
	<li class="li_css">
		<a class="li_css_a"href="selling"> Selling </a>
	</li>
	<li class="li_css">
		<a class="li_css_a"href="profile"> Profile </a>
	</li>
	<li class="li_css">
		<a class="li_css_a"href="email"> 
			<?php
				print $_SESSION['email'];
			?>
		</a>
	</li>
</ul>