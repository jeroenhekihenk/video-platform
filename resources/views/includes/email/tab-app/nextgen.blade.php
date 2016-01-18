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
		<p>{{$voornaam}} heeft zich zojuist aangemeld via de Facebook Tab App.</p>
		<p>De gegevens van {{$voornaam}} kun je hieronder vinden</p>
		<table>
			<tr>
				<td>Naam:</td>
				<td>{{$voornaam}} {{$achternaam}}</td>
			</tr>
			<tr>
				<td>E-mailadres:</td>
				<td>{{$email}}</td>
			</tr>
			@if(isset($telefoonnummer))
			<tr>
				<td>Telefoonnummer:</td>
				<td>{{$telefoonnummer}}</td>
			</tr>
			@endif
			@if(isset($functie))
			<tr>
				<td>Functie:</td>
				<td>{{$functie}}</td>
			</tr>
			@endif
			@if(isset($bedrijfsnaam))
			<tr>
				<td>Bedrijfsnaam:</td>
				<td>{{$bedrijfsnaam}}</td>
			</tr>
			@endif
		</table>
	</div>

</body>
</html>