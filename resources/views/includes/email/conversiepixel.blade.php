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
			<p>Dag {!! $voornaam !!},<br/>
			We hebben zojuist de conversie pixel geplaatst op de bedankpagina van de Facebook tab. Voor je de conversie pixel kunt gebruiken dien je deze te verifiëren (2 min).</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>Onderneem de volgende stappen om de conversie pixel te verifiëren:</p>
				<ol>
					<li>Bezoek de Facebook tab: <a href="{!! url($tab_app_link) !!}" target="_blank">{!! $tab_app_link !!}</a></li>
					<li>Vul het formulier in (mag fictief) en klik op verzenden. Klaar!</li>
				</ol>
				<p>Je bevindt je nu op de 'bedankpagina' waar de conversie pixel is geplaatst. De conversie pixel ziet dat iemand de bedankpagina heeft bezocht en stuurt dit automatisch door naar Facebook. De conversie pixel is nu geverifiëerd en klaar voor gebruik.</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>Heb je nog een vraag? Stel je vraag dan gerust door deze email te beantwoorden.</p>
				<p>&nbsp;</p>
				<p>Op jouw succes!<br/>
				Jeroen Venderbosch</p>
			</td>
		</tr>
	</table>

</body>
</html>