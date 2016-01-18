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
		<h2>HETE LEAD!!</h2>
		<p>{{$naam}} heeft het e-book "{{ $ebooktitel }}" gedownload op <?php $date = new DateTime(); echo $date->format('d-m-Y H:i:s'); ?></p>
		<table>
			<tr>
				<td>Naam:</td>
				<td>{{$naam}}</td>
			</tr>
			<tr>
				<td>E-mailadres:</td>
				<td>{{$email}}</td>
			</tr>
			@if(isset($bedrijfsnaam))
			<tr>
				<td>Bedrijfsnaam:</td>
				<td>{{ $bedrijfsnaam }}</td>
			</tr>
			@endif
			@if(isset($telefoon))
			<tr>
				<td>Telefoonnummer:</td>
				<td>{{$telefoon}}</td>
			</tr>
			@endif
		</table>
	</div>

</body>
</html>