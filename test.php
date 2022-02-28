<?php
$faqs = [
	[
		'title' => 'How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?',
		'paragraphs' => [
			'The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person\'s name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.',
			'Since this ruling was published on 13 May 2014, we\'ve been working round the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with public\'s right to know and distribute information.',
			'If you have a removal request, please fill out this webform. You\'ll receive an automatic reply confirming that we have received your request. We will then assess your case—please note this may take some time because we have already received many such requests. In evaluating your request, we will look at whether the results include outdated information about your private life. We\'ll also look at whether there\'s a public interest in the information remaining in our search results—for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organization, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA.',
			'We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU\'s ruling constitutes a significant change for search engines. While we are concerned about its impact, we also believe it\'s important to respect the Court\'s judgment and are working hard to devise a process that complies with the law.',
			'When you search for a name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. We\'re showing this notice in Europe when a user searches for most names, not just pages that have been affected by a removal.',
		],
	],
	[
		'title' => 'How does Google protect my privacy and keep my information secure?',
		'paragraphs' => [
			'We know security and privacy are important to you – and they are important to us, too. We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it.',
			'We\'re constantly working to ensure strong security, protect your privacy, and make Google even more effective and efficient for you. We spend hundreds of millions of dollars every year on security, and employ world-renowned experts in data security to keep your information safe. We also built easy-to-use privacy and security tools like Google Dashboard, 2-step verification and Ads Settings. So when it comes to the information you share with Google, you\'re in control.',
			'You can learn more about safety and security online, including how to protect yourself and your family online, at the Google Safety Center.',
			'Learn more about how we keep your personal information private and safe — and put you in control.',
		],
	],
	[
		'title' => 'How does Google protect my privacy and keep my information secure?',
		'paragraphs' => [
			'Your account is associated with a country (or territory) in the Terms of Service so that we can determine two things:',
			'Keep in mind that Google services are essentially the same regardless of the affiliate that provides the services or your country association.',
			'ol' => [
				'The Google affiliate that provides the services, that processes your information, and that is responsible for complying with applicable privacy laws. Generally, Google offers its consumer services through either of two companies:',
				'The version of the terms that govern our relationship, which can vary depending on local laws',
			],
			'Keep in mind that Google services are essentially the same regardless of the affiliate that provides the services or your country association.',
		],
	],
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="./style.css">
	<title>Document</title>
</head>

<body>
	<?php
	foreach ($faqs as $faq) : ?>
		<h2><?= $faq['title'] ?></h2>

		<?php
		foreach ($faq['paragraphs'] as $p) : ?>
			<?php if (array_key_exists('ol', $faq['paragraphs'])) { ?>
				<ol>
					<p><?php if (is_string($p)) {
							echo $p ?></p>
					<?php } elseif (is_array($p)) {
							foreach ($p as $p_ol) : ?>
						<li><?= $p_ol ?></li>
					<?php endforeach ?>
				</ol>
			<?php } ?>
		<?php } else { ?>
			<p><?= $p ?></p>
	<?php }
		endforeach; ?>
<?php endforeach ?>
</body>

</html>