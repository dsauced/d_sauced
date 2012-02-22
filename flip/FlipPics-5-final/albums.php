<?php
	// Just some fake user name remembering :)
	if( isset( $_REQUEST[ "username" ] ) ){
		setcookie( "username", $_REQUEST[ "username" ] );
	}
	
	if( isset( $_COOKIE[ "username" ] ) ){
		$username = $_COOKIE[ "username" ];
	}
	else{
		$username = "Scott";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php=$username?>'s Albums</title>
	
	<?php 
		include( "_head.php" );
		include( "albums/_data.php" );
	?>	
</head>
<body class="albums interior">

	<div class="welcome">
		<p><a href="albums.php"><img src="_images/logo-black.png" alt="FlipPic"></a></p>
	</div>

	<div data-role="page" class="albums interior">
		<div data-role="header">
			<h1><?php=$username?>'s Albums</h1>
			<p><a href="signout.php" class="signout" data-rel="dialog">Sign Out</a></p>
		</div>
		<ol data-role="listview">
			<?php foreach ( $albums as $album ) {?>
				<li>
					<a href="album.php?album=<?php=$album[ "name" ]?>">
						<img src="albums/<?php=$album[ "name" ]?>/thm/1.jpg?medium=albums/<?php=$album[ "name" ]?>/thm-lrg/1.jpg"  alt="<?php=$album[ "title" ]?>">
						<h2><?php=$album[ "title" ]?></h2>
						<p class="ui-li-count"><?php=count( $album[ "images" ])?></p>
						<p><?php=$album[ "date" ]?></p>
					</a>
				</li>
			<?php } ?>
		</ol>
	</div>
</body>
</html>