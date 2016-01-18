<!DOCTYPE html>

<html lang="nl-NL">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
</head>
<body>
	<table width="100%" border="0" cellpadding="5" cellspacing="0">
		<tr>
			<td>Naam:</td>
			<td>{!! $voornaam !!} {!! $achternaam !!}</td>
		</tr>
		<tr>
			<td>Email adres:</td>
			<td>{!! $email !!}</td>
		</tr>
		<tr>
			<td>Bedrijfsnaam:</td>
			<td>{!! $bedrijfsnaam !!}</td>
		</tr>
		<tr>
			<td>Website URL:</td>
			<td>{!! $website_url !!}</td>
		</tr>
		<tr>
			<td>Facebook URL:</td>
			<td>{!! $facebook_url !!}</td>
		</tr>
	</table>

</body>
</html>