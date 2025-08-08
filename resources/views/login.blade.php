<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <style>
        body { background: #fff; min-height: 100vh; }
        .login-title { font-size: 1.7rem; font-weight: 700; margin-top: 60px; text-align: center; }
        .login-box { max-width: 400px; margin: 40px auto 0 auto; border: 2px solid #6c63ff; border-radius: 10px; padding: 2.5rem 2rem 2rem 2rem; background: #fff; }
        .login-box label { font-weight: 500; }
        .login-box .form-control { background: #f8f9fa; }
        .login-box .form-check-label { font-size: 0.95rem; }
        .login-box .btn { background: #111; color: #fff; border-radius: 6px; font-weight: 600; }
        .login-box .btn:hover { background: #333; }
        .login-box .forgot-link { font-size: 0.95rem; }
        .login-box .form-text { font-size: 0.95rem; }
    </style>
</head>
<body>
    <div class="login-title">Login with your lccdo email account!</div>
    <div class="login-box shadow-sm">
        <h3 class="fw-bold text-center mb-4">Sign in</h3>
        <form method="GET" action="{{ route('dashboard') }}">
            <button type="submit" class="btn w-100 py-2 d-flex align-items-center justify-content-center mb-3" style="background:#fff; color:#222; border:1px solid #ccc;">
                <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" alt="Google" style="width:22px; height:22px; margin-right:10px;"> Sign in with Google
            </button>
            <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary w-100 py-2">Cancel</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
