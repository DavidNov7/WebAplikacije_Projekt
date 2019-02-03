<?php
		$pocetakINmusica = mktime(8,30,0,6,24,2019);
		$now = time();
		$secondsRemaining = $pocetakINmusica - $now;

		define('SECONDS_PER_MINUTE', 60);
		define('SECONDS_PER_HOUR', 3600);
		define('SECONDS_PER_DAY', 86400);

		$daysRemaining = floor($secondsRemaining / SECONDS_PER_DAY);
		$secondsRemaining -= ($daysRemaining * SECONDS_PER_DAY);

		$hoursRemaining = floor($secondsRemaining / SECONDS_PER_HOUR);
		$secondsRemaining -= ($hoursRemaining * SECONDS_PER_HOUR);

		$minutesRemaining = floor($secondsRemaining / SECONDS_PER_MINUTE);
		$secondsRemaining -= ($minutesRemaining * SECONDS_PER_MINUTE);

		echo"<h3>$daysRemaining dana, $hoursRemaining sati, $minutesRemaining minuta, $secondsRemaining sekundi do početka INmusic festivala.</h3>";
?>