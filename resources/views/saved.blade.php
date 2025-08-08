<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saved Items</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('navbar')
    <div class="d-flex">
        @include('sidebar')
<div class="container py-4">
    <h2 class="fw-bold mb-4">MY LIST</h2>

    @for ($i = 0; $i < 3; $i++)
        <div class="d-flex justify-content-between align-items-start border-top pt-3 pb-3">
            <div class="d-flex">
                <img src="{{ asset('images/placeholder.png') }}" alt="Thumbnail" class="me-3" style="width: 100px; height: 100px; object-fit: cover;">
                <div>
                    <p class="fw-bold mb-1">Java Programming I - Intro to Programming</p>
                    <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mauris nibh, ....</p>
                    <p class="mb-1"><strong>Author:</strong> John Doe</p>
                    <p class="mb-1"><strong>Published:</strong> 1999</p>
                    <p class="mb-0"><strong>Sub location:</strong> 2F Learning Commons</p>
                </div>
            </div>
            <button class="btn btn-link text-danger p-0">
                <i class="bi bi-trash" style="font-size: 1.2rem;"></i>
            </button>
        </div>
    @endfor

    <!-- Pagination -->
    <nav aria-label="Page navigation" class="d-flex justify-content-center mt-4">
        <ul class="pagination">
            <li class="page-item disabled">
                <a class="page-link">&lt;</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
            <li class="page-item"><a class="page-link" href="#">10</a></li>
            <li class="page-item"><a class="page-link" href="#">11</a></li>
            <li class="page-item">
                <a class="page-link">&gt;</a>
            </li>
        </ul>
    </nav>
</div>

    </div>
</body>
</html>
