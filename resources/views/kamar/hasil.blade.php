@extends('layout.app')

@section('content')

<header class="page-header">
						<h2>Luas Kamar</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Pages</span></li>
								<li><span>Luas Kamar</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="col-xs-12">
						<div class="text-center">
							<a href="{{ url('/kamar/fulan') }}" class="btn btn-primary" role="button">Kembali ke form</a>
							<p>Luas Kamar Adalah:</p>
							<h3>{{ $luas }}cm<sup>2</sup></h3>
						</div>
						<br>
						<div id="kmr" class="row" style="width: {{ $panjang }}px; height: {{ $lebar }}px;">
							<div class="col-md-4 khusus">{{ $lebar }}cm</div>
							<div class="col-md-4 text-center khusus"><h4>{{ $luas }}cm<sup>2</sup></h4></div>
							<div class="col-md-4 text-right">{{ $panjang }}cm</div>
						</div>

						<br>
					<br>
					</div>


					<!-- end: page -->

@endsection