	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>"><i class="fas fa-home"></i> Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
                    	<a class="nav-link" href="<?= base_url('news') ?>"><i class="fa fa-newspaper-o" aria-hidden="true"></i> News</a>
                	</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('about') ?>"><i class="fas fa-info-circle" aria-hidden="true"></i> About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('contact') ?>"><i class="fas fa-envelope" aria-hidden="true"></i> Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('faqs') ?>"><i class="fas fa-question-circle" aria-hidden="true"></i> FAQs</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>