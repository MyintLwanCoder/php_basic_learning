<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<ul>
	<?php //foreach ($task as $detail): ?>
		<li><?= $detail; ?></li>

	<?php //endforeach; ?>
	</ul>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body> -->
	<!-- <ul>
		<?php //foreach ($personBoi as $key => $feature) : ?>
			<li>$key . $feature</li>;
			<li>
                <span>
                	<?php //"$key . $featur" ?> -->
                <!--  $key . $feature -->
               <!--  </span>
			</li>
			<?php //endforeach ?>
		   
	</ul>
	<h1>HI</h1>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<ul>
		<li>peson name is <?= ucwords ($personBio['name']); ?></li>
		<li>peson age is <?= $personBio['age']; ?></li>
		<li>He is
			<?php 
          //echo $personBio['isMarried'] ? "Married" : "not Married";
			// if ($persomBio["isMarried"]) {
			// 	echo "Married";
			// }else{
			// 	echo "not Married";
             // } 
   if ( $persomBio["isMarried"]) : ?>
       married
    <?php else: ?>
       not married
    <?php endif; ?>

			
		</li>

	</ul>
</body>
</html>