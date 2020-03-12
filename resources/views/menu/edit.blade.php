{{-- @extends('')

@section('web-title')
    Edit Gallery Foto
@endsection

@section('isi') --}}
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin S'B</title>
	<link href="/lumino/css/bootstrap.min.css" rel="stylesheet">
	<link href="/lumino/css/font-awesome.min.css" rel="stylesheet">
	<link href="/lumino/css/datepicker3.css" rel="stylesheet">
	<link href="/lumino/css/styles.css" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<div>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="SeafoodBandung"><span>Seafood</span>Bandung</a>
<div class="panel-header panel-header-lg-2  ">
    <ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
    </nav>
    <div id="sidebar-collapse" class="col-sm-2 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="/frontend/assets/images/icons/logosb2.png" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		{{-- <form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form> --}}
		<ul class="nav menu">
			<li class="active"><a href={{route('gallery.index')}}><em class="">&nbsp;</em> Gallery</a></li>
            <li><a href="{{route('menu.index')}}"><em class="">&nbsp;</em>Menu</a></li>
            <li><a href="{{route('laporan.index')}}"><em class="">&nbsp;</em>Laporan Pembelian</a></li>
            <li><a href="/SeafoodBandung"><em class="">&nbsp;</em>Web</a></li>
			{{-- <li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
			<li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a> --}}
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
					</a></li>
				</ul>
			</li>
			<li><a href="{{ route('logout') }}"onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">
              <em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
               </form>
		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-2 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Gallery</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Gallery</h1>
			</div>
        </div><!--/.row-->
    {{-- <canvas id="bigDashboardChart"></canvas> --}}
     <div class="">
      <div class="container">
        <div class="col-lg-12">
          <div class="container-fluid">
            <div class="card">
              <div class="card-body">
                <form action="{{ route('menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PATCH">
                    @csrf
                      <div class="form-row">
                        <div class="form-group col-lg-6">
                            <label for="">Title</label>
                            <input type="text" class="form-control" value="{{ $menu->menu }}" name="menu">
                        </div>
                    </div>
        <div class="row">
            <label class="col-sm-2 col-form-label">{{ __('Harga') }}</label>
            <div class="col-sm-7">
                <div class="form-group{{ $errors->has('harga') ? ' has-danger' : '' }}">
                    <select class="form-control selectric" name="harga" required>
                        @if($menu->harga == "Rp.5000 (1 porsi)")
            <option value="Rp.5000 (1 porsi)"selected>Rp.5000 (1 porsi)</option>
            <option value="Rp.10000(2 porsi)">Rp.10000(2 porsi)</option>
            @else
            <option value="Rp.5000 (1 porsi)">Rp.5000 (1 porsi)</option>
            <option value="Rp.10000(2 porsi)"selected>Rp.10000(2 porsi)</option>
            @endif
            </select>
            </div>
        </div>
    </div>
                      <div class="form-row">
                        <div class="form-group col-lg-4">
                            <img src="{{ asset('assets/menu_img/'.$menu->foto)}}" width="100" alt="product image">
                        </div>
                    <button type="submit" class="btn btn-md btn-info">Simpan</button>
                    <a name="" id="" class="btn btn-md btn-warning" href="{{route('menu.index')}}" role="button">Kembali</a>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>




<script src="/lumino/js/jquery-1.11.1.min.js"></script>
	<script src="/lumino/js/bootstrap.min.js"></script>
	<script src="/lumino/js/chart.min.js"></script>
	<script src="/lumino/js/chart-data.js"></script>
	<script src="/lumino/js/easypiechart.js"></script>
	<script src="/lumino/js/easypiechart-data.js"></script>
	<script src="/lumino/js/bootstrap-datepicker.js"></script>
	<script src="/lumino/js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>

</body>
</html>


{{-- @endsection --}}
