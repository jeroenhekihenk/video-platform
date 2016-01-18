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
			<td>
			Dag {!! $voornaam !!},<br/>
			We hebben zojuist een account voor je gemaakt waarmee je kan inloggen op ons memberpaneel.<br />
			Hieronder vind je de inloggegevens. Je kunt je gegevens te allen tijde aanpassen in het memberpaneel.
			</td>
		</tr>
	</table>
	<table width="100%" border="0" cellpadding="5" cellspacing="0">
		<tr>
			<td>Email adres:</td>
			<td>{!! $email !!}</td>
		</tr>
		<tr>
			<td>Wachtwoord:</td>
			<td><span style="background-color: lightgrey; padding:2px 5px;">{!! $wachtwoord !!}</span></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Inloggen via:</td>
			<td><a href="{!! action('Member\MemberAuthController@getLogin') !!}">deze link</a></td>
		</tr>
	</table>

</body>
</html>