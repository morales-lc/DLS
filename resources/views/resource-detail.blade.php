<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resource Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

@include('navbar') {{-- Use the shared navbar if available --}}

<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <img src="{{ asset('images/placeholder.jpg') }}" alt="cover" class="img-fluid">
        </div>
        <div class="col-md-9">
            <div class="d-flex justify-content-between align-items-start">
                <h5><strong>Java Programming I - Intro to Programming</strong></h5>
                <div class="text-end">
                    <p class="text-muted mb-1">Add to list</p>
                    <i class="bi bi-plus-circle fs-4 text-secondary"></i>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mauris nibh, convallis eget magna in, tincidunt faucibus eros. Suspendisse tristique viverra malesuada. Morbi semper sollicitudin placerat. Donec elementum ….</p>
            <p>
                <strong>Type:</strong> Book<br>
                <strong>Author:</strong> John Doe<br>
                <strong>Published:</strong> 1999<br>
                <strong>Sub location:</strong> 2F Learning Commons<br>
                <strong>Barcode:</strong> xxxx-xxxxx<br>
                <strong>Status:</strong> Available
            </p>

            <hr>
            <h6><strong>Publication Info</strong></h6>
            <p>
                Copyright: Lorem ipsum Pte Ltd, ©1999<br>
                Edition: Sixth Edition<br>
                Format: xxx, 1000 pages : ill (black & white) ; 25cm<br>
                ISBN: 999-9-999999999
            </p>

            <hr>
            <h6><strong>Additional Info</strong></h6>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mauris nibh, convallis eget magna in, tincidunt faucibus eros. Suspendisse tristique viverra malesuada. Morbi semper sollicitudin placerat. Donec elementum ….
            </p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
