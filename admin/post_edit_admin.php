<pre><?php print_r($_POST);?></pre>

<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	require_once('../includes/db.php');

	$db = new DB;
	print_r($db->insert());


?>
	<head>
	</head>
		<form method="post">
			<body>
				<p>
					<input type="text" name="post_title"/>
				</p>
				<p>
					<textarea name="post_content"></textarea>
				</p>
				<p>

					<label for ="post_category">Cat 1 </label>
					<input type="checkbox" name="post_category[first]" value="cat1"/>
				</p>

				<p>

					<label for ="post_category">Cat 2 </label>
					<input type="checkbox" name="post_category[second]" value="cat2"/>
				</p>

				<p>
					<input type="submit" value="Submit"/>
				</p>
			</body>
		</form>

<html>
