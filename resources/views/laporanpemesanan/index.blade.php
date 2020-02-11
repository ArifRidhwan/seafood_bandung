<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin S'B</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="Seafood"><span>Seafood</span>Bandung</a>
				{{-- <ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="" class="pull-left">
									<img alt="image" class="img-circle" src="frontend/assets/images/logosb2.png">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="frontend/assets/images/logosb2.png">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					 <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a> --}}
						{{-- <ul class="dropdown-menu dropdown-alerts">
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
		{{-- </div><!-- /.container-fluid --> --}}
	</nav>
	 <div id="sidebar-collapse" style="color "class="col-sm-2 col-lg-2 sidebar">
		 <div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="/frontend/assets/images/icons/iconuser.jpg" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">{{Auth::user()->name}}</div>
				<div class="profile-usertitle-status">
                <span  class="indicator label-success"></span>Online
                </div>
			</div>
			<div class="clear"></div>
        </div>

		<div class="divider"></div>
		 <form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
        </form>


		<ul class="nav menu">
			<li class=""><a href={{route('gallery.index')}}><em class="">&nbsp;</em> Gallery</a></li>
            <li><a href="{{route ('menu.index')}}"><em class="">&nbsp;</em>Menu</a></li>
            <li><a href="{{route('laporan.index')}}"><em class="">&nbsp;</em>Laporan Pembelian</a></li>
            <li><a href="/Seafood"><em class="">&nbsp;</em>Web</a></li>
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
				<li><a href=""><em class="fa fa-home"></em></a></li>
				<li class="">Gallery</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Laporan Pemesanan</h1>
			</div>
        </div><!--/.row-->
        	<div>
                {{-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">+ Gallery</button> --}}
            </div>
            <br>
            <div>
                @include('layouts.flash')
            </div>

<br>
        <div>
			<div class="row">
				<div class="col-xs-2 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class ="row no-padding"><i class="fa fa-picture-o fa-3x" aria-hidden="true"></i>
                            <div class="large">{{$menus}}</div>
							<div class="text-muted">New Menu</div>
						</div>
					</div>
                </div>

		<div>
			<div class="row">
				<div class="col-xs-2 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class ="row no-padding"><i class="fa fa-picture-o fa-3x" aria-hidden="true"></i>
							<div class="large">{{$gallery}}</div>
							<div class="text-muted">New Posted Photo</div>
						</div>
					</div>
				</div>
				{{-- <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget ">
						<div class="row no-padding"><i class="fa fa-user-circle fa-3x"  aria-hidden="true"></i>
							<div class="large">{{$user}}</div>
							<div class="text-muted">New Users</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
        </div>

     <div class="table-responsive">
				<div class="col-xs-2 col-md-11 col-lg-3">
                                <table class="table table-bordered">
                                <thead class="thead-dark" >
                                    <tr class="table-active">
                                        <th scope="col">No</th>
										<th scope="col">Nama Foto</th>
										<th scope="col">Desc Foto</th>
                                        <th scope="col">Foto</th>
                                        <th colspan="3" class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($foto as $data)
                                    <tr>
                                         <td>{{ $no++ }}</td>
										<td>{{ $data->nama_foto }}</td>
                                        <td>{{ $data->desc_foto }}</td>
                                        <td><img src="{{ asset('assets/img/'.$data->foto)}}" width="100"></td>
                                         <td><a href="{{ route('gallery.edit',$data->id) }}"class="btn btn-sm btn-success">Edit Data</a></td>
                                         <td><form action="{{ route('gallery.destroy',$data->id) }}" method="post">
                            {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-sm btn-danger" type="submit">Delete
                                <i class="fas fa-fw fa-trash-alt"></i>
                                </button>
                            </form></td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
	<!-- Tombol untuk menampilkan modal-->

	<!-- Modal -->
	{{-- <div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Tambah Data Photo</h4>
                </div>
                <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                <!-- body modal -->
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Title</label>
                <div class="col-sm-3 col-md-5">
                    <input name="nama_foto" type="text" class="form-control{{ $errors->has('nama_foto') ? ' is-invalid' : '' }}" required>

                @if ($errors->has('nama_foto'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('nama_foto') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Desc Photo</label>
                <div class="col-sm-7 col-md-7">
                    <textarea name="desc_foto" cols="5" rows="5" type="description" class="form-control{{ $errors->has('desc_foto') ? ' is-invalid' : '' }}" required></textarea>

                @if ($errors->has('desc_foto'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('desc_foto') }}</strong>
                    </span>
                @endif
                </div>
            </div>


				<div class="form-group row mb-4">
                    <div class="col-sm-12 col-md-10">
              <div id="image-preview" class="image-preview">
                <input type="file" name="foto" id="image-upload" />

            @if ($errors->has('photo'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('foto') }}</strong>
                </span>
            @endif
              </div>
            </div>
          </div>



          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
                <button type="submit" class="btn btn-primary">Buat Post</button>
              {{-- <a href="{{ route('artikel.index') }}" class="btn btn-secondary">Kembali</a> --}}
            </div>
          </div>
        </form>
    </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</body>
</html>

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


{{-- <td>
<ol>
@foreach($data->tag as $isi)
<li>{{ $isi->nama_tag }}</li>
@endforeach
</ol>
</td> --}}
{{-- <td>{!! $data->konten !!}</td>
<td>{{ $data->kategori->nama_kategori}}</td>
<td>{{ $data->slug }}</td> --}}
{{--<td>
<a href="{{ route('artikel.show',$data->id) }}"
class="btn btn-sm btn-primary">Show Data</a>
</td>
<td>
<form action="{{ route('artikel.destroy',$data->id) }}" method="post">
{{csrf_field()}}
<input type="hidden" name="_method" value="DELETE">
<button class="btn btn-sm btn-danger" type="submit">
    Hapus Data
</button>
</form>
{{-- </td> --}}


<!-- footer modal -->
{{-- <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
</div> --}}
