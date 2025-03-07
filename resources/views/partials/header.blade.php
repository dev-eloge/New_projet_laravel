<!-- navigation -->
<header class="navigation bg-tertiary">
	<nav class="navbar navbar-expand-xl navbar-light text-center py-3">
		<div class="container">
			<a class="navbar-brand" href="/">
				<img loading="prelaod" decoding="async" class="img-fluid" width="160" src="images/logo.png" alt="Wallet">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
					<li class="nav-item"> <a class="nav-link" href="/">Home</a>
					</li>
					<li class="nav-item "> <a class="nav-link" href="{{ route('about') }}">About</a>
					</li>
					<li class="nav-item "> <a class="nav-link" href="{{ route('how-it-works') }}">How It Works</a>
					</li>
					<li class="nav-item "> <a class="nav-link" href="{{ route('services') }}">Services</a>
					</li>
					<li class="nav-item "> <a class="nav-link" href="{{ route('contact') }}">Contact</a>
					</li>
					<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item " href="{{ route('blog') }}">Blog</a>
							</li>
							<li><a class="dropdown-item " href="{{ route('blog-details') }}">Blog Details</a>
							</li>
							<li><a class="dropdown-item " href="{{ route('service-details') }}">Service Details</a>
							</li>
							<li><a class="dropdown-item " href="{{ route('faq') }}">FAQ&#39;s</a>
							</li>
							<li><a class="dropdown-item " href="{{ route('legal') }}">Legal</a>
							</li>
							<li><a class="dropdown-item " href="{{ route('terms') }}">Terms &amp; Condition</a>
							</li>
							<li><a class="dropdown-item " href="{{ route('privacy-policy') }}">Privacy &amp; Policy</a>
							</li>
						</ul>
					</li>
				</ul>
				<!-- account btn --> <a href="#!" class="btn btn-outline-primary">Log In</a>
				<!-- account btn --> <a href="#!" class="btn btn-primary ms-2 ms-lg-3">Sign Up</a>
			</div>
		</div>
	</nav>
</header>
<!-- /navigation -->