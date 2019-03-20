<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
	public function ucapan()
	{
		$nama = "Yahya";

		$makfav = ["Bakso", "Gado-gado", "Nasi Putih", "Mie Ayam", "Pecel"];


		return view('ucapan', ['nama' => $nama, 'makanans' => $makfav]);
	}
}