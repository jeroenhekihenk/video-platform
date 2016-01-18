<!DOCTYPE html>

<html lang="nl-NL">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php date_default_timezone_set('Europe/Amsterdam'); ?>
	<div>
		<h2>Nieuwe aanvraag!</h2>
		<p>{{$naam}} heeft zojuist een aanvraag gedaan via de Facebook Tab App voor een gratis proefles.</p>
		<p>De gegevens van {{$naam}} kun je hieronder vinden</p>
		<table>
			<tr>
				<td>Naam:</td>
				<td>{{$naam}}</td>
			</tr>
			<tr>
				<td>E-mailadres:</td>
				<td>{{$email}}</td>
			</tr>
			<tr>
				<td>Telefoonnummer:</td>
				<td>{{$telefoon}}</td>
			</tr>
		</table>
	</div>

</body>
</html>