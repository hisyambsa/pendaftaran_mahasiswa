<nav class="navbar navbar-expand-lg navbar-dark black-color text-white sticky-top scrolling-navbar">
	<div class="container">
		<a class="navbar-brand" href="#"><img src="http://pemudarabithah.org/wp-content/uploads/2020/01/New-Logo-Pemuda-RA-2015-80x80.png" alt="logo"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar" aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navBar">
			<ul class="navbar-nav mr-auto smooth-scroll text-uppercase">
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('beranda/home') ?>">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">dropdown</a>
					<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="<?= base_url('link') ?>">content 1</a>
						<a class="dropdown-item" href="<?= base_url('link') ?>">content 2</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('link') ?>">Link <span class="sr-only">(current)</span></a>
				</li>
			</ul>
			<ul class="navbar-nav nav-flex-icons">
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('login/logout') ?>" data-offset="100">LOGOUT</a>
				</li>
			</ul>
		</div>
	</div>
</nav>