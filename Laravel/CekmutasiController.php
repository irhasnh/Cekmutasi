<?php

namespace App\Http\Controllers;

use Cekmutasi;

class CekmutasiController extends Controller
{
	public function index()
	{
		$mutasi = Cekmutasi::bank()->mutation([
				'date'		=> [
					'from'	=> date('Y-m-d') . ' 00:00:00',
					'to'	=> date('Y-m-d') . ' 23:59:59'
				]
			]);

		dd(json_decode($mutasi));
	}
}
