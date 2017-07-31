@extends('admin.layout')

@section('title')
HomePage
@endsection

@section('content')

<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard</h4>
						</div>

						 
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Dashboard</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Main charts -->
					<div class="row">
						<div class="col-lg-7">

							<!-- Traffic sources -->
							<h1>You are Welcome To Admin Section</h1>
							<!-- /traffic sources -->

						</div>

						<div class="col-lg-5">

							<!-- Sales stats -->
							<div class="panel panel-flat">
								  
							</div>
							<!-- /sales stats -->

						</div>
					</div>
					<!-- /main charts -->

					<!-- Footer -->
					<div class="footer text-muted">
						&copy; <?php echo date('Y') ?>. <a href="#">MML</a> by <a href="http://intercoresolutions.com.ng" target="_blank">Intercore</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
@endsection