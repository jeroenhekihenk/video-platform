@extends('layouts.overview')

@section('titel')
	Diensten | Digitus Marketing
@stop

@section('css')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
@stop

@section('meta')
@stop

@section('pixels')
@stop

@section('menu')
<div id="menubars">
	@include('includes.menus.hetmenu')
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
    content: "x";
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
.radio label,
.checkbox label {
    cursor: pointer;
    display: inline-block;
    font-size: 13px;
    margin-right: 15px;
    padding-left: 25px;
    position: relative;
}
</style>
		<div class="box introductie">
			<div class="titel">
				<h3>Digitus Marketing is een online marketing bureau gespecialiseerd in Facebook Marketing.</h3>
			</div>
			<div class="content">
				<p>Een bedrijf is als een goed verhaal: inspirerend, pakkend en meeslepend. Digitus Marketing zorgt ervoor dat jouw verhaal wordt verteld. Dit met de juiste contentstrategie, ondersteund door gerichte social media marketing en slimme apps.</p>
				<!-- <b class="bold">Wij gaan voor resultaat!</b> -->
			</div>
		</div>

		<div class="col-md-4">
			<div class="box introductie"></div>
		</div>
		<div class="col-md-4">
			<div class="box introductie"></div>
		</div>
		<div class="col-md-4">
			<div class="box introductie"></div>
		</div>

		<div class="box introductie">
		<span class="fa fa-building-o"></span><span class="fa fa-bullhorn"></span><span class="fa fa-users"></span>
			{!! Form::open() !!}
			<div class="form-group">
				{!! Form::label('naam', 'Naam:') !!} <span class="asterisk">*</span>
				{!! Form::text('naam', Input::old('naam'), array('class'=>'form-control')) !!}
			</div>
			<div class="form-group">
				{!! Form::label('email', 'Email:') !!} <span class="asterisk">*</span>
				{!! Form::email('email', Input::old('email'), array('class'=>'form-control')) !!}
			</div>
			<hr>
			<div class="col-md-12">
				<h3>Pakket 1</h3>
				<div class="col-md-8">
					<ul>
						<li>2x Doelgroep</li>
						<li>1x Advertentie</li>
						<li>Doelgroeppen: 
							<ul>
								<li>Fans</li>
								<li>Vrienden van fans</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-md-4">
					<h1>&euro;150,-</h1>
				</div>
			</div>
			<div class="clearfix"></div>
			<hr>
			<div class="col-md-12">
				<h3>Pakket 2</h3>
				<div class="col-md-8">
					<ul>
						<li>3x Doelgroep</li>
						<li>2x Advertentie</li>
						<li>Doelgroeppen:
							<ul>
								<li>Breed</li>
								<li>Fans</li>
								<li>Vrienden van fans</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-md-4">
					<h1>&euro;200,-</h1>
				</div>
			</div>
			<div class="clearfix"></div>
			<hr>
			<div class="col-md-12">
				<h3>Pakket 3</h3>
				<div class="col-md-8">
					<ul>
						<li>5x Doelgroep</li>
						<li>3x Advertentie</li>
						<li>Conversiepixel</li>
						<li>Website audience pixel</li>
						<li>Doelgroeppen:
							<ul>
								<li>3x Breed</li>
								<li>Fans</li>
								<li>Vrienden van fans</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-md-4">
					<h1>&euro;400,-</h1>
				</div>
			</div>
			<div class="clearfix"></div>
			<hr>
			<div class="col-md-6 radio">
				<p>Selecteer advertentie tegoed:</p>
				{!! Form::radio('tegoed', '50', false, array('id'=>'50')) !!}
				{!! Form::label('50', '&euro; 50,-') !!}
				<br>
				{!! Form::radio('tegoed', '100', true, array('id'=>'100')) !!}
				{!! Form::label('100', '&euro; 100,-') !!}
				<br>
				{!! Form::radio('tegoed', '200', false, array('id'=>'200')) !!}
				{!! Form::label('200', '&euro; 200,-') !!}
			</div>
			<div class="devider"></div>
			<div class="col-md-6 radio">
				<p>Selecteer je pakket:</p>
				{!! Form::radio('pakket', 'pakket 1', false, array('id'=>'Pakket 1')) !!}
				{!! Form::label('Pakket 1') !!}
				<br>
				{!! Form::radio('pakket', 'pakket 2', true, array('id'=>'Pakket 2')) !!}
				{!! Form::label('Pakket 2') !!}
				<br>
				{!! Form::radio('pakket', 'pakket 3', false, array('id'=>'Pakket 3')) !!}
				{!! Form::label('Pakket 3') !!}
				<!-- <input id="check1" type="checkbox" value="check1" name="check">
				<label for="check1">Checkbox No. 1</label>
				<br>
				<input id="check2" type="checkbox" value="check2" name="check">
				<label for="check2">Checkbox No. 2</label> -->
			</div>
			{!! Form::close() !!}
		</div>

@stop
@section('diensten')

@stop
@section('sidebar')
	<div class="box introductie">
		<h3>Hier komt wat leuke informatie of een plaatje</h3>
	</div>
@stop

@section('footer')
	@include('includes.footer.mainfooter')
@stop

@section('footerscript')
	@include('includes.forms.belmijterugformulier')
	{!! Html::script('js/jquery-1.11.2.js') !!}
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
@stop