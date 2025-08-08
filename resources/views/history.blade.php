<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search History</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('navbar')
    <div class="d-flex">
        @include('sidebar')
        <div class="container py-4">
            <h2 class="fw-bold mb-4">Search History</h2>
            <div class="alert alert-info">No search history yet.</div>
        </div>
    </div>
</body>
</html>
