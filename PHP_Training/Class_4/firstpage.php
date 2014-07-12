
		<?php
		$a = 100;
		$b = 200;
		$c = $a + $b;
		$username = "Raja&Rani";
		
		$c = urlencode($c);
		$username = urlencode($username);
		$base_url = rawurlencode("newpage.php");
		
		echo "<a href=\"{$base_url}?total={$c}&username={$username}\">Click Here</a>";
		
		?>

