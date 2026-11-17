<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Kategori Diecast - DnT STORE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@500;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #dc2626;
            --primary-hover: #b91c1c;
            --primary-light: #fef2f2;
            --primary-border: #fecaca;
            --dark: #0f172a;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border: #e2e8f0;
            --bg: #f8fafc;
            --card-bg: #ffffff;
            --success: #16a34a;
            --success-light: #dcfce7;
            --danger: #ef4444;
            --danger-light: #fee2e2;
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
        }

        .navbar {
            background: #ffffff;
            border-bottom: 1px solid var(--border);
            padding: 0.9rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 40;
            box-shadow: 0 1px 3px rgba(0,0,0,0.03);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
            color: var(--dark);
        }

        .brand-logo {
            background: linear-gradient(135deg, #ef4444, #f59e0b);
            color: white;
            width: 42px;
            height: 42px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            box-shadow: 0 4px 10px rgba(239, 68, 68, 0.3);
        }

        .brand-text h1 {
            font-size: 1.25rem;
            font-weight: 800;
            letter-spacing: -0.5px;
            color: var(--dark);
        }

        .brand-text span {
            color: var(--primary);
        }

        .brand-text small {
            display: block;
            font-size: 0.7rem;
            color: var(--text-muted);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .nav-links {
            display: flex;
            gap: 0.75rem;
            align-items: center;
        }

        .nav-link {
            text-decoration: none;
            color: var(--text-muted);
            font-size: 0.9rem;
            font-weight: 600;
            padding: 0.5rem 0.9rem;
            border-radius: 8px;
            transition: all 0.2s;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--primary);
            background: var(--primary-light);
        }

        .container {
            max-width: 980px;
            margin: 2rem auto;
            padding: 0 1.5rem;
            flex: 1;
            width: 100%;
        }

        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.85rem;
            color: var(--text-muted);
            margin-bottom: 1.25rem;
        }

        .breadcrumb a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
        }

        /* Alerts */
        .alert {
            padding: 1rem 1.25rem;
            border-radius: 12px;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
        }

        .alert-success {
            background: var(--success-light);
            border: 1px solid #bbf7d0;
            color: #166534;
        }

        .alert-danger {
            background: var(--danger-light);
            border: 1px solid #fecaca;
            color: #991b1b;
        }

        .alert-close {
            background: none;
            border: none;
            font-size: 1.3rem;
            cursor: pointer;
            color: inherit;
            line-height: 1;
        }

        .kategori-layout {
            display: grid;
            grid-template-columns: 320px 1fr;
            gap: 1.5rem;
            align-items: flex-start;
        }

        .card {
            background: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 18px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.03);
            overflow: hidden;
        }

        .card-header {
            padding: 1.25rem 1.5rem;
            border-bottom: 1px solid var(--border);
            background: #ffffff;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-header h3 {
            font-size: 1.15rem;
            font-weight: 800;
            color: var(--dark);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .card-body {
            padding: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
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

        .btn-primary {
            width: 100%;
            padding: 0.75rem 1.2rem;
            border: none;
            border-radius: 10px;
            font-size: 0.9rem;
            font-weight: 800;
            color: #ffffff;
            background: linear-gradient(135deg, #ef4444, #dc2626);
            cursor: pointer;
            transition: all 0.2s;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #dc2626, #b91c1c);
            transform: translateY(-1px);
        }

        /* Table */
        .table-responsive {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        th {
            background: #f8fafc;
            padding: 0.85rem 1.25rem;
            font-size: 0.8rem;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 0.5px;
            color: var(--text-muted);
            border-bottom: 1px solid var(--border);
        }

        td {
            padding: 1rem 1.25rem;
            border-bottom: 1px solid var(--border);
            font-size: 0.9rem;
            color: var(--dark);
        }

        tr:last-child td {
            border-bottom: none;
        }

        .badge-count {
            background: #e0f2fe;
            color: #0369a1;
            font-size: 0.75rem;
            font-weight: 700;
            padding: 0.25rem 0.6rem;
            border-radius: 20px;
        }

        .btn-edit-sm {
            padding: 0.35rem 0.7rem;
            border-radius: 8px;
            border: 1px solid #cbd5e1;
            background: #ffffff;
            color: var(--dark);
            font-size: 0.8rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn-edit-sm:hover {
            background: #f1f5f9;
            border-color: #94a3b8;
        }

        .btn-delete-sm {
            padding: 0.35rem 0.7rem;
            border-radius: 8px;
            border: 1px solid #fecaca;
            background: #fef2f2;
            color: var(--danger);
            font-size: 0.8rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn-delete-sm:hover {
            background: #fee2e2;
            border-color: #fca5a5;
        }

        footer {
            background: #ffffff;
            border-top: 1px solid var(--border);
            padding: 1.5rem 2rem;
            text-align: center;
            color: var(--text-muted);
            font-size: 0.875rem;
            margin-top: auto;
        }

        @media (max-width: 768px) {
            .kategori-layout {
                grid-template-columns: 1fr;
            }
            .navbar {
                flex-direction: column;
                gap: 0.75rem;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <header class="navbar">
        <a href="{{ url('/') }}" class="brand">
            <div class="brand-logo">🔥</div>
            <div class="brand-text">
                <h1>DnT <span>STORE</span></h1>
                <small>DiecastHub • Jual Beli Hot Wheels</small>
            </div>
        </a>
        <nav class="nav-links">
            <a href="{{ url('/') }}" class="nav-link">Beranda</a>
            <a href="{{ route('diecast.index') }}" class="nav-link">Katalog Hot Wheels</a>
            <a href="{{ route('kategori.index') }}" class="nav-link active">Kategori</a>
            @auth
                <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                    @csrf
                    <button type="submit" style="background: none; border: 1px solid var(--border); color: var(--text-muted); font-size: 0.8rem; font-weight: 700; padding: 0.35rem 0.7rem; border-radius: 8px; cursor: pointer;">Keluar</button>
                </form>
            @endauth
        </nav>
    </header>

    <main class="container">
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <a href="{{ route('diecast.index') }}">Katalog Hot Wheels</a>
            <span>&rsaquo;</span>
            <span>Kelola Kategori</span>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                <span>✅ {{ session('success') }}</span>
                <button type="button" class="alert-close" onclick="this.parentElement.remove()">&times;</button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <span>⚠️ {{ $errors->first() }}</span>
                <button type="button" class="alert-close" onclick="this.parentElement.remove()">&times;</button>
            </div>
        @endif

        <div class="kategori-layout">
            <!-- Form Tambah Kategori -->
            <div class="card">
                <div class="card-header">
                    <h3><span>🏷️</span> Tambah Kategori</h3>
                </div>
                <form action="{{ route('kategori.store') }}" method="POST" class="card-body">
                    @csrf
                    <div class="form-group">
                        <label for="nama" class="form-label">Nama Kategori / Seri</label>
                        <input type="text"
                               id="nama"
                               name="nama"
                               class="form-control"
                               placeholder="Contoh: Batman Series"
                               required>
                    </div>
                    <button type="submit" class="btn-primary">
                        <span>➕</span>
                        <span>Tambah Kategori</span>
                    </button>
                </form>
            </div>

            <!-- Tabel Daftar Kategori -->
            <div class="card">
                <div class="card-header">
                    <h3><span>📋</span> Daftar Kategori ({{ $kategoriList->count() }})</h3>
                </div>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th style="width: 50px;">No</th>
                                <th>Nama Kategori</th>
                                <th style="text-align: center;">Jumlah Diecast</th>
                                <th style="text-align: right;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($kategoriList as $kat)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <form action="{{ route('kategori.update', $kat) }}" method="POST" id="editForm{{ $kat->id }}" style="display: flex; gap: 0.5rem; align-items: center;">
                                            @csrf
                                            @method('PUT')
                                            <input type="text"
                                                   name="nama"
                                                   value="{{ $kat->nama }}"
                                                   class="form-control"
                                                   style="padding: 0.35rem 0.6rem; font-size: 0.85rem;"
                                                   required>
                                            <button type="submit" class="btn-edit-sm" title="Simpan Perubahan">
                                                Simpan
                                            </button>
                                        </form>
                                    </td>
                                    <td style="text-align: center;">
                                        <span class="badge-count">{{ $kat->diecasts_count }} Unit</span>
                                    </td>
                                    <td style="text-align: right;">
                                        <form action="{{ route('kategori.destroy', $kat) }}" method="POST" style="display: inline-block; margin: 0;" onsubmit="return confirm('Hapus kategori {{ addslashes($kat->nama) }}? Semua diecast di kategori ini juga akan terhapus.')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-delete-sm" title="Hapus Kategori">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" style="text-align: center; color: var(--text-muted); padding: 2rem;">
                                        Belum ada kategori diecast.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} <strong>DiecastHub</strong>. Pusat Jual Beli Hot Wheels Original & Komunitas Kolektor Indonesia.</p>
    </footer>

</body>
</html>
