@extends('layout.app')

@section('content')

<header class="page-header">
						<h2>Kamar {{ $fulan }}</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Pages</span></li>
								<li><span>Kamar {{ $fulan }}</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="col-md-6">
							<form id="form1" class="form-horizontal" method="post" action="{{ url('/hasil') }}">
								@csrf
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<h2 class="panel-title">Aplikasi Penghitung Luas Kamar {{ $fulan }}</h2>
									</header>
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-4 control-label">Panjang Kamar (cm) </label>
											<div class="col-sm-8">
												<input type="number" name="panjang" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-4 control-label">Lebar Kamar (cm) </label>
											<div class="col-sm-8">
												<input type="number" name="lebar" class="form-control">
											</div>
										</div>
									</div>
									<footer class="panel-footer">
										<button class="btn btn-primary">Submit </button>
										<button type="reset" class="btn btn-default">Reset</button>
									</footer>
								</section>
							</form>
						</div>
					<!-- end: page -->

@endsection