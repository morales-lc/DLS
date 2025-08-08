<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body style="min-height: 100vh; overflow-y: auto; background-color: #f8f9fa;">

<!-- Navbar -->
@include('navbar')



<!-- Content -->
<div class="container mt-5 mb-5">
    <h2 class="fw-bold mb-4">Welcome to Lourdes College Library!</h2>
    <div class="input-group search-box mb-5">
        <span class="input-group-text"><i class="bi bi-search"></i></span>
        <input type="text" class="form-control" placeholder="Search books, journals, authors...">
        <select class="form-select">
            <option selected>SELECT TYPE</option>
            <option>Book</option>
            <option>eBook</option>
            <option>Journal</option>
            <option>Thesis</option>
            <option>Dissertation</option>
            <option>Map</option>
            <option>Multimedia</option>
        </select>
        <a class="btn btn-secondary" href="{{ route('search') }}">Search</a>
    </div>

    <!-- Announcements -->
    <div class="mb-5">
        <h4 class="fw-bold">Library Announcements</h4>
        <ul class="list-group">
            <li class="list-group-item">Library Orientation for Freshmen: August 15, 2025, 9:00 AM at the Main Library Hall.</li>
            <li class="list-group-item">New Arrivals: Over 200 new books in Science, Business, and Literature sections!</li>
            <li class="list-group-item">Library will be closed on August 21 for a public holiday.</li>
        </ul>
    </div>

    <!-- Featured Resources -->
    <div class="mb-5">
        <h4 class="fw-bold">Featured Resources</h4>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Online Journal Access</h5>
                        <p class="card-text">Access thousands of academic journals and research papers through our digital library subscriptions.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Explore Journals</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Library Guide</h5>
                        <p class="card-text">Learn how to use the library catalog, borrow books, and access e-resources with our step-by-step guide.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">View Guide</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Ask a Librarian</h5>
                        <p class="card-text">Need help with your research? Chat or email with our librarians for assistance.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Library Hours -->
    <div class="mb-5">
        <h4 class="fw-bold">Library Hours</h4>
        <table class="table table-bordered w-auto bg-white">
            <tbody>
                <tr><th>Monday - Friday</th><td>8:00 AM - 6:00 PM</td></tr>
                <tr><th>Saturday</th><td>8:00 AM - 12:00 NN</td></tr>
                <tr><th>Sunday & Holidays</th><td>Closed</td></tr>
            </tbody>
        </table>
    </div>

    <!-- Library Services -->
    <div class="mb-5">
        <h4 class="fw-bold">Library Services</h4>
        <ul class="list-group">
            <li class="list-group-item">Book Borrowing & Returning</li>
            <li class="list-group-item">Reference and Research Assistance</li>
            <li class="list-group-item">Internet and Computer Access</li>
            <li class="list-group-item">Printing and Scanning</li>
            <li class="list-group-item">Study Rooms and Discussion Areas</li>
            <li class="list-group-item">Online Resources and Databases</li>
        </ul>
    </div>

    <!-- Library Contacts -->
    <div class="mb-5">
        <h4 class="fw-bold">Contact Us</h4>
        <p>Email: <a href="mailto:library@lccdo.edu.ph">library@lccdo.edu.ph</a></p>
        <p>Phone: (088) 858-4093 loc. 123</p>
        <p>Facebook: <a href="#">Lourdes College Library</a></p>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
