@extends('layouts.fullwidth')

@section('titel')
	Adviesgesprek Inplannen | Digitus Marketing
@stop

@section('css')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
@stop

@section('meta')
@stop

@section('pixels')
	@include('includes.pixels.fb_audience')
@stop

@section('menu')
<div id="menubars">
	@include('includes.menus.hetmenu')
</div>
@stop

@section('breadcrumb')
<div id="crumbs">
<p>Je bevindt je hier:</p>
	<ul>
		<li><a href="{!! action('HomeController@index') !!}" title="Home"><span class="fa fa-home"></span></a></li>
		<li class="active"><a href="{!! action('SpecialController@getAdviesGesprek') !!}" title="Advies Gesprek Aanvragen">Advies Gesprek Aanvragen</a></li>
	</ul>
</div>
@stop

@section('content')

<style>
input[type="checkbox"], input[type="radio"] {
    box-sizing: border-box;
    padding: 0;
}
input[type="radio"], input[type="checkbox"] {
    display: none;
}
button, input {
    line-height: normal;
}
input[type="checkbox"]:checked + label::before {
    color: #0e71b8;
    content: "\2713";
    font-size: 15px;
    line-height: 15px;
    text-align: center;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
}
input[type="radio"]:checked + label::before {
    color: #0e71b8;
    content: "•";
    font-size: 30px;
    line-height: 18px;
    text-align: center;
}
.radio label::before {
    border-radius: 8px;
}
.checkbox label::before {
    border-radius: 3px;
}
.radio label::before,
.checkbox label::before {
    background-color: #f3f3f3;
    bottom: 1px;
    box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.3) inset, 0 1px 0 0 rgba(255, 255, 255, 0.8);
    content: "";
    display: inline-block;
    height: 16px;
    left: 0;
    margin-right: 10px;
    position: absolute;
    width: 16px;
}
.checkbox label {
    margin-bottom: 10px;
}
.checkbox + .checkbox, .radio + .radio {
    margin-top: 10px !important;
}
.radio label,
.checkbox label {
    cursor: pointer;
    display: inline-block;
    font-size: 13px;
    margin-right: 15px;
    padding-left: 25px;
    position: relative;
    width:100%;
}
h5 {
    margin-bottom: 10px !important;
}
</style>
	<div class="col-md-8" style="display:block;float:none;margin:10px auto">
		<div class="box introductie">
			<div class="titel">
				<h1>Vrijblijvend Adviesgesprek Inplannen</h1>
			</div>
			<div class="clearfix"></div>
			<hr>
			<div class="content">
				<h4><span class="fa fa-exclamation"></span> Nu tijdelijk met gratis doelgroep onderzoek t.w.v. &euro;75,-</h4>
				<p>Wij zullen jou laten zien, hoeveel mensen je binnen jouw doelgroep kunt bereiken via Facebook marketing.</p>
				<p>Je bent benieuwd naar de mogelijkheden van Facebook Marketing. Welke resultaten kun je verwachten? Wat kost het? en nog beter, wat levert het op?</p>
				<h5><b>Voorbeeld:</b></h5>
				<p>	Kosten: v.a. €250,- inclusief advertentie tegoed (eenmalig of per maand).<br>
				Bereik: tussen de 10.000 en 20.000 weergaven binnen jouw doelgroep! (eenmalig of per maand).</p>
				<hr>
				<p>Tijdens het adviesgesprek zullen jou een aantal vragen worden gesteld zoals: “welke doelen wil je behalen met Facebook marketing?” Vervolgens verteld Parsifal of Rogier je welke mogelijkheden er allemaal zijn met Facebook Marketing, afhankelijk van jouw doelen.</p>
			</div>
		</div>

		<div class="introductie">
		</div>

		<div class="box introductie">
			<h2>Vraag direct een adviesgesprek aan!</h2>
			<div class="clearfix"></div>
			<hr>
			<div class="pull-left col-md-4 col-xs-12">
				<img src="{{ URL::to('/') }}/images/site/advies-gesprek/Adviesgesprek-Facebook-Marketing.png" alt="Adviesgesprek Facebook Marketing inplannen">
			</div>
			<div class="col-md-8">
				<p>Vraag nu een adviesgesprek aan met één van onze specialisten en ontdek wat Facebook Marketing voor jou gaat opleveren.</p>
				<p>Vul het formulier in en Parsifal of Rogier neemt binnen 1 werkdag contact met je op om een afspraak in te plannen.</p>
			</div>
			<div class="clearfix"></div>
			<hr>
			{!! Form::open(array('action'=>'SpecialController@postAdviesGesprek')) !!}
			<div class="form-group">
			{!! Form::hidden('anti-spam') !!}
				{!! Form::label('naam', 'Naam:') !!} <span class="asterisk">*</span>
				{!! Form::text('naam', Input::old('naam'), array('class'=>'form-control', 'placeholder'=>'Naam..')) !!}
			</div>
			<div class="form-group">
				{!! Form::label('email', 'Email:') !!} <span class="asterisk">*</span>
				{!! Form::email('email', Input::old('email'), array('class'=>'form-control', 'placeholder'=>'Email..')) !!}
			</div>
			<div class="form-group col-md-12" style="padding:0;">
				<div class="col-md-6" style="padding-left:0;">
					{!! Form::label('bedrijfsnaam', 'Bedrijfsnaam:') !!} <span class="asterisk">*</span>
					{!! Form::text('bedrijfsnaam', Input::old('email'), array('class'=>'form-control', 'placeholder'=>'Bedrijfsnaam..')) !!}
				</div>
				<div class="col-md-6" style="padding-right: 0;">
					{!! Form::label('telefoonnummer', 'Telefoonnummer:') !!} <span class="asterisk">*</span>
					{!! Form::input('tel', 'telefoonnummer', Input::old('telefoonnummer'), array('class'=>'form-control', 'placeholder'=>'Telefoonnummer..')) !!}
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="form-group">
				{!! Form::label('website', 'Website:') !!}
				{!! Form::text('website', Input::old('website'), array('class'=>'form-control', 'placeholder'=>'www.jouwdomein.nl')) !!}
			</div>
			<hr>
			<div class="form-group">
				{!! Form::label('interesse', 'Ik wil graag:', array('class'=>'col-md-12')) !!}
				<div class="col-md-6 checkbox">
					{!! Form::checkbox('interesse[]', 'naamsbekendheid', false, array('id'=>'naamsbekendheid')) !!} {!! Form::label('naamsbekendheid', 'Naamsbekendheid vergroten') !!}
					{!! Form::checkbox('interesse[]', 'bereikvergroten', false, array('id'=>'bereikvergroten')) !!} {!! Form::label('bereikvergroten', 'Bereik vergroten') !!}
					{!! Form::checkbox('interesse[]', 'betrokkenheid', false, array('id'=>'betrokkenheid')) !!} {!! Form::label('betrokkenheid', 'Betrokkenheid vergroten') !!}
				</div>
				<div class="col-md-6 checkbox">
					{!! Form::checkbox('interesse[]', 'product of dienst promoten', false, array('id'=>'productdienstpromoten')) !!} {!! Form::label('productdienstpromoten', 'Een product/dienst promoten') !!}
					{!! Form::checkbox('interesse[]', 'evenement promoten', false, array('id'=>'evenementpromoten')) !!} {!! Form::label('evenementpromoten', 'Een evenement promoten') !!}
					{!! Form::checkbox('interesse[]', 'conversies', false, array('id'=>'conversies')) !!} {!! Form::label('conversies', '(Website)Conversies maken') !!}
				</div>
			</div>
			<div class="clearfix"></div>
			<hr>
			<div class="form-group">
				{!! Form::label('opmerking', 'Opmerking:') !!}
				{!! Form::textarea('opmerking', Input::old('opmerking'), array('class'=>'form-control', 'rows'=>'3', 'placeholder'=>'Schrijf hier eventuele opmerkingen..')) !!}
			</div>
			<div class="clearfix"></div>
			<hr>
			<div class="form-group">
				{!! Form::hidden('anti-spam') !!}
				{!! Form::submit('Afspraak aanvragen!', array('class'=>'btn demo-button pull-right', 'id'=>'afspraakplannen')) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
@stop
@section('diensten')

@stop
@section('sidebar')
	@include('includes.sidebar.groot')
@stop

@section('footer')
	@include('includes.footer.mainfooter')
@stop

@section('footerscript')
	{!! Html::script('js/jquery-1.11.2.js') !!}
	{!! Html::script('js/belmijterugprovider.js') !!}
	@include('includes.forms.belmijterugformulier')
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
@stop