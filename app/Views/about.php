<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- FontAwesome CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .jumbotron {
            background: url('https://source.unsplash.com/1600x400/?about') no-repeat center center;
            background-size: cover;
            color: white;
        }

        .navbar {
            margin-bottom: 20px;
        }

        footer {
            background-color: #343a40;
            color: white;
        }

        footer a {
            color: #007bff;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/"><i class="fas fa-home"></i> Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="about"><i class="fas fa-info-circle"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact"><i class="fas fa-envelope"></i> Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faqs"><i class="fas fa-question-circle"></i> FAQs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-4">About Us</h1>
            <p class="lead">Learn more about our mission and values</p>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia modi unde cumque! Cum repellendus eveniet, illum id doloribus, quibusdam tenetur debitis est libero quasi assumenda voluptates aliquam tempore. Porro, asperiores.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia modi unde cumque! Cum repellendus eveniet, illum id doloribus, quibusdam tenetur debitis est libero quasi assumenda voluptates aliquam tempore. Porro, asperiores.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia modi unde cumque! Cum repellendus eveniet, illum id doloribus, quibusdam tenetur debitis est libero quasi assumenda voluptates aliquam tempore. Porro, asperiores.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia modi unde cumque! Cum repellendus eveniet, illum id doloribus, quibusdam tenetur debitis est libero quasi assumenda voluptates aliquam tempore. Porro, asperiores.</p>
            </div>
        </div>
    </div>

    <footer class="jumbotron jumbotron-fluid text-center mb-0 py-4">
        <div class="container">
            <p class="mb-0">&copy; <?= Date('Y') ?> CI News. All rights reserved.</p>
            <p class="mb-0"><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </footer>

    <!-- jQuery dan Bootstrap JS CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
