<html>
<head>
	<link rel="stylesheet" type="text/css" href="css.css">
	<meta charset="UTF-8">
</head>
<body>
	<div class="navbar2">
		<ul>

			<?php

			$path = basename($_SERVER['PHP_SELF']);
			echo '<div id="index_nav">';
			if($path == "index.php") {
				echo '<li class="active">Accueil</li>';
			}
			else {
				echo '<li><a class="link" href="javascript:Show(\'index\')">Accueil</a></li>';
			}
			echo '</div>
			 <div id="profil_nav">
			<li><a class="link" href="javascript:Show(\'profil\')">Profil</a></li>
			</div>
			<div id="parcours_nav">
			<li><a class="link" href="javascript:Show(\'parcours\')">Parcours</a></li>
			</div>';


			?>  

		    </ul>
	</div>

</body>
</html>