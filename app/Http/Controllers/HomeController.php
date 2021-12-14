<?php

namespace App\Http\Controllers;

use App\Models\Topsis\ViewTopsismaxmin;
use App\Models\Topsis\ViewTopsisnilaiv;
use App\Models\Topsis\ViewTopsisnormalisasi;
use App\Models\Topsis\ViewTopsispembagi;
use App\Models\Topsis\ViewTopsissipsin;
use App\Models\Topsis\ViewTopsisterbobot;
use App\Models\ViewVmatrixkeputusan;
use App\Models\ViewVnormalisasi;
use App\Models\ViewVpraranking;
use App\Models\ViewVranking;
use App\Models\WP\ViewJumbobot;
use App\Models\WP\ViewNilais;
use App\Models\WP\ViewNilaiv;
use App\Models\WP\ViewNormalisasiterbobot;
use App\Models\WP\ViewPangkat;
use App\Models\WP\ViewSums;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	function sawmetode()
	{
		$vmatrixkeputusan = ViewVmatrixkeputusan::select('*')
			->get();
		$vnormalisasi = ViewVnormalisasi::select('*')
			->get();
		$vpraranking = ViewVpraranking::select('*')
			->get();
		$vranking = ViewVranking::select('*')
			->get();

		// dd($vnormalisasi);

		return view('metode.saw', compact('vmatrixkeputusan', 'vnormalisasi', 'vpraranking', 'vranking'));
	}
	function wpmetode()
	{
		$vmatrixkeputusan = ViewVmatrixkeputusan::select('*')
			->get();
		$wpjumbobot = ViewJumbobot::select('*')
			->get();
		$wpnormalisasiterbobot = ViewNormalisasiterbobot::select('*')
			->get();
		$wppangkat = ViewPangkat::select('*')
			->get();
		$wpnilais = ViewNilais::select('*')
			->get();
		$wpsums = ViewSums::select('*')
			->get();
		$wpnilaiv = ViewNilaiv::select('*')
			->get();

		// dd($vnormalisasi);

		return view('metode.wp', compact('vmatrixkeputusan', 'wpjumbobot', 'wpnormalisasiterbobot', 'wppangkat', 'wpnilais', 'wpsums', 'wpnilaiv'));
	}
	function topsismetode()
	{
		$topsispembagi = ViewTopsispembagi::select('*')
			->get();
		$topsisnormalisasi = ViewTopsisnormalisasi::select('*')
			->get();
		$topsisterbobot = ViewTopsisterbobot::select('*')
			->get();
		$topsismaxmin = ViewTopsismaxmin::select('*')
			->get();
		$topsissipsin = ViewTopsissipsin::select('*')
			->get();
		$topsisnilaiv = ViewTopsisnilaiv::select('*')
			->get();

		// dd($vnormalisasi);

		return view(
			'metode.topsis',
			compact('topsispembagi', 'topsisnormalisasi', 'topsisterbobot', 'topsismaxmin', 'topsissipsin', 'topsisnilaiv')
		);
	}
}
