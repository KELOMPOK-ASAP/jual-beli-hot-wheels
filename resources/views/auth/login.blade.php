<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna & Admin - DnT STORE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@500;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #dc2626;
            --primary-hover: #b91c1c;
            --primary-light: #fef2f2;
            --dark: #0f172a;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border: #e2e8f0;
            --bg: #0f172a;
            --card-bg: #ffffff;
            --danger: #ef4444;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background-color: var(--bg);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem 1.5rem;
            background-image: 
                radial-gradient(at 0% 0%, rgba(220, 38, 38, 0.25) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(245, 158, 11, 0.18) 0px, transparent 50%);
        }

        .login-wrapper {
            width: 100%;
            max-width: 440px;
        }

        .brand-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .brand-logo {
            background: linear-gradient(135deg, #ef4444, #f59e0b);
            color: white;
            width: 52px;
            height: 52px;
            border-radius: 14px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            box-shadow: 0 6px 18px rgba(239, 68, 68, 0.45);
            margin-bottom: 0.85rem;
        }

        .brand-title {
            color: #ffffff;
            font-size: 1.6rem;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .brand-title span {
            color: #ef4444;
        }

        .brand-subtitle {
            color: #94a3b8;
            font-size: 0.85rem;
            margin-top: 0.25rem;
        }

        .login-card {
            background: #ffffff;
            border-radius: 20px;
            padding: 2.25rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .login-card h2 {
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 0.35rem;
        }

        .login-card p.intro {
            font-size: 0.85rem;
            color: var(--text-muted);
            margin-bottom: 1.5rem;
        }

        .alert-error {
            background: #fee2e2;
            border: 1px solid #fecaca;
            color: #991b1b;
            padding: 0.75rem 1rem;
            border-radius: 10px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 1.25rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.45rem;
            margin-bottom: 1.25rem;
        }

        .form-label {
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--dark);
        }

        .form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1.5px solid var(--border);
            border-radius: 10px;
            font-size: 0.95rem;
            color: var(--dark);
            outline: none;
            transition: all 0.2s;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.12);
        }

        .form-check {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        .btn-submit {
            width: 100%;
            padding: 0.85rem;
            border: none;
            border-radius: 10px;
            font-size: 0.95rem;
            font-weight: 800;
            color: #ffffff;
            background: linear-gradient(135deg, #ef4444, #dc2626);
            cursor: pointer;
            transition: all 0.2s;
            box-shadow: 0 4px 14px rgba(220, 38, 38, 0.35);
        }

        .btn-submit:hover {
            background: linear-gradient(135deg, #dc2626, #b91c1c);
            transform: translateY(-1px);
        }

        /* Demo Credentials Box */
        .demo-box {
            margin-top: 1.75rem;
            background: #f8fafc;
            border: 1px dashed #cbd5e1;
            border-radius: 12px;
            padding: 1rem;
        }

        .demo-box-title {
            font-size: 0.75rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--text-muted);
            margin-bottom: 0.6rem;
            display: flex;
            align-items: center;
            gap: 0.35rem;
        }

        .demo-user-item {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 0.55rem 0.75rem;
            margin-bottom: 0.45rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: all 0.15s;
        }

        .demo-user-item:hover {
            border-color: var(--primary);
            background: #fef2f2;
        }

        .demo-user-info strong {
            display: block;
            font-size: 0.8rem;
            color: var(--dark);
        }

        .demo-user-info span {
            font-size: 0.75rem;
            color: var(--text-muted);
            font-family: 'JetBrains Mono', monospace;
        }

        .demo-user-badge {
            font-size: 0.7rem;
            font-weight: 800;
            padding: 0.2rem 0.5rem;
            border-radius: 6px;
        }

        .badge-admin {
            background: #fef3c7;
            color: #b45309;
        }

        .badge-user {
            background: #e0f2fe;
            color: #0369a1;
        }

        .back-link {
            text-align: center;
            margin-top: 1.5rem;
        }

        .back-link a {
            color: #94a3b8;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 600;
            transition: color 0.2s;
        }

        .back-link a:hover {
            color: #ffffff;
        }
    </style>
</head>
<body>

    <div class="login-wrapper">
        <div class="brand-header">
            <div class="brand-logo">🔥</div>
            <h1 class="brand-title">DnT <span>STORE</span></h1>
            <p class="brand-subtitle">Pusat Jual Beli Hot Wheels Original & Komunitas Kolektor</p>
        </div>

        <div class="login-card">
            <h2>Masuk ke Akun</h2>
            <p class="intro">Silakan masuk untuk mengakses fitur sesuai hak akses Anda.</p>

            @if (session('error'))
                <div class="alert-error">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert-error">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('login.post') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="emailInput" class="form-label">Alamat Email</label>
                    <input type="email"
                           id="emailInput"
                           name="email"
                           class="form-control"
                           placeholder="nama@email.com"
                           value="{{ old('email') }}"
                           required
                           autofocus>
                </div>

                <div class="form-group">
                    <label for="passwordInput" class="form-label">Password</label>
                    <input type="password"
                           id="passwordInput"
                           name="password"
                           class="form-control"
                           placeholder="••••••••"
                           required>
                </div>

                <div class="form-check">
                    <input type="checkbox" id="remember" name="remember" value="1">
                    <label for="remember">Ingat saya di perangkat ini</label>
                </div>

                <button type="submit" class="btn-submit">
                    Masuk Sekarang &rarr;
                </button>
            </form>

            <!-- Akun Demo untuk Pengujian Dosen / Penilai Tugas -->
            <div class="demo-box">
                <div class="demo-box-title">
                    <span>💡</span>
                    <span>Klik Akun Demo di Bawah untuk Isi Cepat:</span>
                </div>

                <div class="demo-user-item" onclick="fillCredentials('admin@diecasthub.test', 'password123')">
                    <div class="demo-user-info">
                        <strong>Admin DiecastHub (Akses CRUD Lengkap)</strong>
                        <span>admin@diecasthub.test • pass: password123</span>
                    </div>
                    <span class="demo-user-badge badge-admin">Admin</span>
                </div>

                <div class="demo-user-item" onclick="fillCredentials('user@diecasthub.test', 'password123')">
                    <div class="demo-user-info">
                        <strong>Pengguna Biasa (Kolektor / Pelanggan)</strong>
                        <span>user@diecasthub.test • pass: password123</span>
                    </div>
                    <span class="demo-user-badge badge-user">User</span>
                </div>
            </div>
        </div>

        <div class="back-link">
            <a href="{{ route('diecast.index') }}">&larr; Kembali ke Katalog Hot Wheels</a>
        </div>
    </div>

    <script>
        function fillCredentials(email, password) {
            document.getElementById('emailInput').value = email;
            document.getElementById('passwordInput').value = password;
        }
    </script>
</body>
</html>
