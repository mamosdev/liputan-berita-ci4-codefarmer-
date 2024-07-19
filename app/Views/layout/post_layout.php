<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portal Berita CodeIgniter</title>

	<!-- Bootstrap CSS CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- FontAwesome CSS CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!-- Tag agar bisa bikin Konten di halaman berbeda -->
<!-- Anggap saja Content Wrapper -->
    <!-- navbar -->
    <?= $this->include('layout/navbar') ?>
    <!-- Header -->
    <?= $this->include('layout/header') ?>
    <div class="container">
        <div class="row">
            <!-- Content -->
            <div class="col-md-8">
                <?= $this->renderSection('content') ?>
            </div>
            <!-- Post Sidebar -->
            <div class="col-md-4">
                <?= $this->include('layout/sidebar') ?>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?= $this->include('layout/footer') ?>

	

    <!-- jQuery dan Bootstrap JS CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".faq-question").on("click", function() {
                $(this).next(".faq-answer").slideToggle();
                $(this).find("i").toggleClass("fa-chevron-right fa-chevron-down");
            });
        });
    </script>

</body>