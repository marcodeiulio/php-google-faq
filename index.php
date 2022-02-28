<?php
$faqs = [
	[
		'title' => 'How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?',
		'paragraphs' => [
			'The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person\'s name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.',
			'The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person\'s name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.',
			'The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person\'s name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.',
		],
	],
	[
		'title' => 'How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?',
		'paragraphs' => [
			'The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person\'s name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.',
			'The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person\'s name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.',
			'The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person\'s name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.',
		],
	]
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php
	foreach ($faqs as $faq) : ?>
		<h2><?= $faq['title'] ?></h2>

		<?php foreach ($faq['paragraphs'] as $p) : ?>
			<p><?= $p ?></p>

		<?php endforeach ?>
	<?php endforeach ?>
</body>

</html>