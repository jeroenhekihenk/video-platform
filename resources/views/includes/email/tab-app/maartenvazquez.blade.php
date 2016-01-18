<!DOCTYPE html>

<html lang="nl-NL">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<div>
		<h2>Iemand heeft zich zojuist aangemeld om de nieuwsbrief te ontvangen!</h2>
		<p>Bijgaand vind je de opgegeven informatie</p>
		<table>
			<tr>
				<td>Naam:</td>
				<td>{{$voornaam}} {{$achternaam}}</td>
			</tr>
			<tr>
				<td>E-mailadres:</td>
				<td>{{$email}}</td>
			</tr>
		</table>
	</div>

</body>
</html>