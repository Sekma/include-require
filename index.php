<?php
require_once 'utils/functions.php';

require 'utils/variables.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Mon super site - page 1</title>
</head>

<body>

<?php include 'views/header.php' ?>

<?php include_once 'views/nav.php' ?>

<h2>Titre page 1</h2>

<p>
	Bonjour <em><?php echo $name; ?></em>
</p>

<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nesciunt dolore totam autem recusandae, quod saepe nemo ratione distinctio esse beatae adipisci tempora rem! Pariatur dolorum labore non animi quae.
</p>
<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nesciunt dolore totam autem recusandae, quod saepe nemo ratione distinctio esse beatae adipisci tempora rem! Pariatur dolorum labore non animi quae.
</p>

<?php include 'views/footer.php' ?>

</body>
</html>