<h3>Wat klanten over ons zeggen:</h3>
<div id="recensies-slider">
	<!-- start Basic Jquery Slider -->
	<ul class="bjqs" itemscope itemtype="http://schema.org/Review">
	@foreach($recensies as $recensie)
		<li itemprop="itemReviewed">
			<p class="text-left recensie-tekst">{!! $recensie->content !!}</p>
			<div class="klant-info">
				<h3 class="klant" itemprop="author">{!! $recensie->klantnaam !!}</h3><a href="{{ url($recensie->link) }}" rel="nofollow" target="_blank">{!! $recensie->bedrijf !!}</a>
			</div>
		</li>
	@endforeach
	</ul>
	<!-- end Basic jQuery Slider -->
</div>