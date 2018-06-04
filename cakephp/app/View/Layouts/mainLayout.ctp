
<!DOCTYPE html>
<html>
<head>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
	    echo $this->Html->css('cake.generic');
	    //echo $this->element('header');

	?>
</head>
<body>
	<div id="container">

		<div id="content">
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">

		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
