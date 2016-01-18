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
		<p>{{$voornaam}} {{$achternaam}} heeft zich zojuist aangemeld via de Facebook Tab App.</p>
		<p>De gegevens van {{$voornaam}} {{$achternaam}} kun je hieronder vinden</p>
		<table>
			<tr>
				<td>Naam:</td>
				<td>{{$voornaam}} {{$achternaam}}</td>
			</tr>
			<tr>
				<td>Functie(s):</td>
				<td>{!! $functies !!}</td>
			</tr>
			<tr>
				<td>Woonplaats:</td>
				<td>{{$woonplaats}}</td>
			</tr>
			<tr>
				<td>E-mailadres:</td>
				<td>{{$email}}</td>
			</tr>
			<tr>
				<td>Telefoonnummer:</td>
				<td>{{$telefoon}}</td>
			</tr>
			<tr>
				<td>Hoeveel kilometers van je woonplaats ben je bereid te werken?:</td>
				<td>{{$kilometers}}KM van {{$woonplaats}}</td>
			</tr>
			@if($plaatsad != '')
			<tr>
				<td>Spoedaanvraag voor:</td>
				<td>{!! $plaatsad !!}</td>
			</tr>
			@endif
		</table>
	</div>

</body>
</html>