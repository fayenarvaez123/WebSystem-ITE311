<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title ?? 'My CI Project') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Responsive -->

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #fff0f6; /* Light pink background */
            font-family: 'Poppins', sans-serif;
        }

        
        .navbar {
            background: linear-gradient(90deg, #ff9a9e, #fad0c4);
            border-bottom: 3px solid #f48fb1;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: #fff !important;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #fff !important;
            font-weight: 500;
            margin: 0 5px;
            transition: all 0.3s ease-in-out;
        }

        
        .navbar-dark .navbar-nav .nav-link.active {
            background-color: #f06292 !important;
            color: #fff !important;
            border-radius: 20px;
            padding: 0.5rem 1rem;
        }

        /* Hover effect */
        .navbar-dark .navbar-nav .nav-link:hover {
            background-color: #ec407a !important;
            color: #fff !important;
            border-radius: 20px;
        }

        /* Content card style */
        .content-card {
            background: #fff;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            margin-top: 20px;
        }
    </style>
</head>
<body>

<?php $uri = service('uri'); ?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url('/') ?>">💖 LMS</a>

    <!-- Toggler (for mobile menu here) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible Nav Linkshere -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link <?= $uri->getPath() === '' ? 'active' : '' ?>" href="<?= base_url('/') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $uri->getPath() === 'about' ? 'active' : '' ?>" href="<?= base_url('about') ?>">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $uri->getPath() === 'contact' ? 'active' : '' ?>" href="<?= base_url('contact') ?>">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->
<div class="container-fluid mt-4">
    <div class="content-card">
        <?= $this->renderSection('content') ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
