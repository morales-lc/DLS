<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
@include('navbar')


<!-- Content -->
<div class="container mt-5">
    <h2 class="fw-bold mb-4">Welcome user!</h2>

    <div class="input-group search-box">
        <span class="input-group-text"><i class="bi bi-search"></i></span>
        <input type="text" class="form-control" placeholder="Java Programming">
        <select class="form-select">
            <option selected>SELECT TYPE</option>
            <option>Anytype</option>
            <option>Computer file</option>
            <option>eBook</option>
            <option>Maps</option>
            <option>Globes</option>
            <option>Atlas</option>
            <option>Book</option>
        </select>
        <a class="btn btn-secondary" href="{{ route('search') }}">Search</a>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
