


@extends('layouts.master')
@section('content')

{{--Sidebar+content start--}}

<div class="container margin-top-20">
	<div class="row">
		<div class="col-md-4">
		<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action">Mobile</a>
  <a href="#" class="list-group-item list-group-item-action">Laptop</a>
  <a href="#" class="list-group-item list-group-item-action">TV</a>
</div>
		</div>





			<div class="col-md-8">



				<div class="widget">
						<h3 align="center">MOBILE</h3>
					<div class="row">
					<div class="col-md-3">
						<div class="card">
								<img class="card-img-top feacher-img" src="{{ asset('images/products/'.'1.png')  }}" alt="samsung galaxy">
							<div class="card-body">
										<h4 class="card-title">Walton</h4>
									    <p class="card-text">3000/-TK</p>
									    <a href="#" class="btn btn-primary">See Profile</a>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="card">
								  <img class="card-img-top feacher-img" src="{{ asset('images/products/'.'2.png')  }}" alt="samsung galaxy">
								  <div class="card-body">
								    <h4 class="card-title">Oppo</h4>
								    <p class="card-text">5000/-TK</p>
								    <a href="#" class="btn btn-primary">See Profile</a>
								</div>
						</div>
					</div>

					<div class="col-md-3">
					<div class="card">
							  <img class="card-img-top feacher-img" src="{{ asset('images/products/'.'3.png')  }}" alt="samsung galaxy">
					<div class="card-body">
							    <h4 class="card-title">Samsung</h4>
							    <p class="card-text">4000/-TK</p>
							    <a href="#" class="btn btn-primary">See Profile</a>
					</div>
					</div>
					</div>

							<div class="col-md-3">
							<div class="card">
							  <img class="card-img-top feacher-img" src="{{ asset('images/products/'.'4.png')  }}" alt="samsung galaxy">
								  <div class="card-body">
								    <h4 class="card-title">Nokia</h4>
								    <p class="card-text">6000/-TK</p>
								    <a href="#" class="btn btn-primary">See Profile</a>
								  </div>
							</div>
						</div>
					</div>
				</div>





				<div class="widget">
						<h3 align="center">LAPTOP</h3>
					<div class="row">
						<div class="col-md-3">
							<div class="card">
								  <img class="card-img-top feacher-img" src="{{ asset('images/products/'.'5.png')  }}" alt="samsung galaxy">
								<div class="card-body">
									    <h4 class="card-title">Lenovo</h4>
									    <p class="card-text">35,000/-TK</p>
									    <a href="#" class="btn btn-primary">See Profile</a>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card">
								  <img class="card-img-top feacher-img" src="{{ asset('images/products/'.'6.png')  }}" alt="samsung galaxy">
								<div class="card-body">
									    <h4 class="card-title">HP</h4>
									    <p class="card-text">40,000/-TK</p>
									    <a href="#" class="btn btn-primary">See Profile</a>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card">
								  <img class="card-img-top feacher-img" src="{{ asset('images/products/'.'7.png')  }}" alt="samsung galaxy">
								<div class="card-body">
									    <h4 class="card-title">Dell</h4>
									    <p class="card-text">50,000/-TK</p>
									    <a href="#" class="btn btn-primary">See Profile</a>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card">
								  <img class="card-img-top feacher-img" src="{{ asset('images/products/'.'8.png')  }}" alt="samsung galaxy">
								<div class="card-body">
									    <h4 class="card-title">Fujitsu</h4>
									    <p class="card-text">90,000/-TK</p>
									    <a href="#" class="btn btn-primary">See Profile</a>
								</div>
							</div>
						</div>
					</div>
				</div>


	


			


				<div class="widget">
						<h3 align="center">TV</h3>
					<div class="row">
						<div class="col-md-3">
							<div class="card">
							  <img class="card-img-top feacher-img" src="{{ asset('images/products/'.'9.png')  }}" alt="Transtec">
								  <div class="card-body">
								    <h4 class="card-title">Transtec</h4>
								    <p class="card-text">50,000/-TK</p>
								    <a href="#" class="btn btn-primary">See Profile</a>
								  </div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card">
							  <img class="card-img-top feacher-img" src="{{ asset('images/products/'.'10.png')  }}" alt="Hitachi">
								  <div class="card-body">
								    <h4 class="card-title">Hitachi</h4>
								    <p class="card-text">40,000/-TK</p>
								    <a href="#" class="btn btn-primary">See Profile</a>
								  </div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card">
							  <img class="card-img-top feacher-img" src="{{ asset('images/products/'.'11.png')  }}" alt="panasonic">
								  <div class="card-body">
								    <h4 class="card-title">Panasonic</h4>
								    <p class="card-text">30,000/-TK</p>
								    <a href="#" class="btn btn-primary">See Profile</a>
								  </div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card">
							  <img class="card-img-top feacher-img" src="{{ asset('images/products/'.'12.png')  }}" alt="Singer">
								  <div class="card-body">
								    <h4 class="card-title">Singer</h4>
								    <p class="card-text">20,000/-TK</p>
								    <a href="#" class="btn btn-primary">See Profile</a>
								  </div>
							</div>
						</div>
					</div>
				</div>






	
		</div>

	
	</div>
</div>
{{--Sidebar+content end--}}

@endsection