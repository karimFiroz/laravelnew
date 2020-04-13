<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laravel Ecommerce Project</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>


	{{--Navigation start--}}	
	<div class="wrapper">
		
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		{{--nav ontainer start--}}
<div class="container">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search">
  <div class="input-group-append">
    <button class="btn btn-success" type="submit">Go</button>
  </div>
</div>
    </form>
  </div>
  </div>
{{--nav container end--}}
</nav>

	</div>
{{--Navigation end--}}


{{--Sidebar+content start--}}

<div class="container">
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



			<footer class="footer-bottom">
				
				<p class="text-center">
					&copy; 2020 All rights reserved ecommerce site.
				</p>
			</footer>



		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



	</body>
</html>