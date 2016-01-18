<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */

	private $openRoutes =[
		'tabapp/api/repperapi',
		'tabapp/api/maartenvazquez',
		'tabapp/api/digitusmarketing',
		'tabapp/api/horecapersoneel',
		'tabapp/api/hartforher',
		'tabapp/api/hartforher-amsterdam-oost',
		'tabapp/api/burningheart',
		'tabapp/api/sportzenter',
		'tabapp/api/healthclubjulien',
		'tabapp/api/judiths-dance-point',
		'tabapp/api/judithsdancepoint',
		'tabapp/api/onefitnessweesp',
		'tabapp/api/danscentrumlapasse',
		'tabapp/api/totalexercise',
		'tabapp/api/praktijkernabasten',
		'tabapp/api/the-unit',
		'tabapp/api/nextgen',
		'/member/benodigdheden',
		'/member/benodigdheden/create',
		'tijdlijnacties',
		'tijdlijnacties/bedankt',
		'tijdlijnacties/send',
		'tijdlijnacties/webhook',
		'product/webhook',
		'VPNO',
		'VPNO/post',
		'21oktober',
		'21oktober/bedankt',
		'21oktober/webhook',
		'member/cursus/upgrade',
		'member/cursus/webhook',
		'ebooks/10-stappen',
		'videocursus/webhook',
		'test-omgeving/product/webhook',
	];

	public function handle($request, Closure $next)
	{
		foreach($this->openRoutes as $route)
		{
			if($request->is($route))
			{
				return $next($request);
			}
		}
		return parent::handle($request, $next);
	}

}
