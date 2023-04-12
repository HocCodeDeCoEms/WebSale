<?php
	session_start();
	ob_start();
	if(isset($_SESSION['role']) && $_SESSION['role']==1){
		
	} else header('location: login.php');
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Grid Template for Bootstrap</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Grid Template for Bootstrap</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
		<style>
			ul li{
				list-style: none;
				display: inline;
			}
			header .nav-link:hover{
				color: white !important;
			}
		</style>
	</head>

	<body>
		<header>
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<a class="navbar-brand" href="#">
					<img src="./img/logo.jpg" alt="logo">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5 px-2 text-success border border-start-0 border-end-0 border-success bg-success-subtle">
							<li class="nav-item border-success">
							<a class="nav-link active text-success fw-medium" aria-current="page" href="index.html">Trang chủ</a>
							</li>
							<li class="nav-item border-success">
							<a class="nav-link text-success fw-medium " href="service.html">Dịch vụ</a>
							</li>
							<li class="nav-item border-success">
							<a class="nav-link text-success fw-medium" href="about.html">Về chúng tôi</a>
							</li>
							<li class="nav-item border-success">
								<a class="nav-link text-success fw-medium" href="faq.html">FAQ</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-success fw-medium" href="contact.html">Liên hệ</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		
		<main>
			<div class="container">
				<hr/>
				<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
					<div class="carousel-indicators">
					  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
					  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
					</div>
					<div class="carousel-inner">
					  <div class="carousel-item active">
						<img src="./img/1.jpg" class="d-block w-100" alt="...">
					  </div>
					  <div class="carousel-item">
						<img src="img/2.jpg" class="d-block w-100" alt="...">
					  </div>
					  <div class="carousel-item">
						<img src="img/3.jpg" class="d-block w-100" alt="...">
					  </div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
					  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					  <span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
					  <span class="carousel-control-next-icon" aria-hidden="true"></span>
					  <span class="visually-hidden">Next</span>
					</button>
					<h1>Trang ADmin</h1>
				</div>
				<hr>
				<div class="row row-cols-lg-4 text-center justify-content-center">
					<div class="col">
						<img src="img/11.jpg" />
						<h4>Điểm du lịch 1</h4>
						<p>
							Đây là địa điểm du lịch 1, chi tiết về điểm du lịch này các bạn
							có thể có được bằng cách liên lạc với chúng tôi trực tiếp qua
							điện thoại hoặc email.
						</p>
					</div>
					<div class="col">
						<img src="img/12.jpg" />
						<h4>Điểm du lịch 2</h4>
						<p>
							Đây là địa điểm du lịch 2, chi tiết về điểm du lịch này các bạn
							có thể có được bằng cách liên lạc với chúng tôi trực tiếp qua
							điện thoại hoặc email.
						</p>
					</div>
					<div class="col">
						<img src="img/13.jpg" />
						<h4>Điểm du lịch 3</h4>
						<p>
							Đây là địa điểm du lịch 3, chi tiết về điểm du lịch này các bạn
							có thể có được bằng cách liên lạc với chúng tôi trực tiếp qua
							điện thoại hoặc email.
						</p>
					</div>
				</div>
				<div class="text-center mt-3">
					<h4>Hãy liên hệ với chúng tôi!</h4>
					<p class="mb-2">Chúng tôi mong muốn lắng nghe từ bạn.</p>
					<a class="text-decoration-none" href="contact.html">Liên hệ</a>
				</div>
				<hr />
			</div>
		</main>
		
		<footer class="mb-3 mt-2">
			<div class="container">
				<div class="row">
					<p class="col-lg-auto col-md-12 fs-5 pt-2">© Bản quyền thuộc về Công ty Du lịch Bụi.</p>
					<ul class="col nav justify-content-lg-end fs-5 mt-0">
						<li class="nav-item">
						  <a class="nav-link" aria-current="page" href="index.html">Trang chủ</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="service.html">Dịch vụ</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="about.html">Về chúng tôi</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="faq.html">FAQ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html">Liên hệ</a>
						</li>
					  </ul>
				</div>
			</div>
		</footer>
	</body>
</html>
