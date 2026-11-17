<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Diecast Hot Wheels - {{ $diecast->nama_diecast }} - DnT STORE</title>
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

        .nav-link:hover {
            color: var(--primary);
            background: var(--primary-light);
        }

        .container {
            max-width: 820px;
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

        .form-card {
            background: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 18px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.04);
            overflow: hidden;
        }

        .form-header {
            padding: 1.75rem 2rem;
            border-bottom: 1px solid var(--border);
            background: linear-gradient(to right, #ffffff, #fff7ed);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .form-header h2 {
            font-size: 1.45rem;
            font-weight: 800;
            color: var(--dark);
            display: flex;
            align-items: center;
            gap: 0.6rem;
        }

        .form-header p {
            font-size: 0.875rem;
            color: var(--text-muted);
            margin-top: 0.25rem;
        }

        .form-body {
            padding: 2rem;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        .form-group-full {
            grid-column: 1 / -1;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .form-label {
            font-size: 0.875rem;
            font-weight: 700;
            color: var(--dark);
            display: flex;
            align-items: center;
            gap: 0.35rem;
        }

        .form-label .required {
            color: var(--danger);
        }

        .form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1.5px solid var(--border);
            border-radius: 10px;
            font-size: 0.95rem;
            color: var(--dark);
            background: #ffffff;
            transition: all 0.2s;
            outline: none;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.12);
        }

        .form-control.is-invalid {
            border-color: var(--danger);
            background-color: #fef2f2;
        }

        .invalid-feedback {
            font-size: 0.8rem;
            color: var(--danger);
            font-weight: 600;
        }

        /* Current Photo Preview Box */
        .current-photo-box {
            display: flex;
            align-items: center;
            gap: 1.25rem;
            background: #f8fafc;
            border: 1px solid var(--border);
            padding: 1rem;
            border-radius: 12px;
            margin-bottom: 0.75rem;
        }

        .current-photo-img {
            width: 100px;
            height: 75px;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid var(--border);
            box-shadow: 0 2px 6px rgba(0,0,0,0.06);
        }

        .upload-area {
            border: 2px dashed #cbd5e1;
            border-radius: 14px;
            padding: 1.5rem;
            text-align: center;
            background: #f8fafc;
            cursor: pointer;
            transition: all 0.2s;
            position: relative;
        }

        .upload-area:hover {
            border-color: var(--primary);
            background: #fef2f2;
        }

        .upload-preview {
            max-width: 220px;
            max-height: 160px;
            object-fit: cover;
            border-radius: 10px;
            margin: 0.75rem auto;
            display: none;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        .upload-placeholder {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.4rem;
        }

        .upload-placeholder span.icon {
            font-size: 2rem;
        }

        .form-actions {
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid var(--border);
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
            align-items: center;
        }

        .btn-cancel {
            padding: 0.75rem 1.4rem;
            border: 1.5px solid var(--border);
            border-radius: 10px;
            font-size: 0.9rem;
            font-weight: 700;
            color: var(--text-muted);
            text-decoration: none;
            background: #ffffff;
            transition: all 0.2s;
        }

        .btn-cancel:hover {
            background: #f1f5f9;
            color: var(--dark);
        }

        .btn-submit {
            padding: 0.75rem 1.6rem;
            border: none;
            border-radius: 10px;
            font-size: 0.95rem;
            font-weight: 800;
            color: #ffffff;
            background: linear-gradient(135deg, #ef4444, #dc2626);
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.3);
            transition: all 0.2s;
        }

        .btn-submit:hover {
            background: linear-gradient(135deg, #dc2626, #b91c1c);
            transform: translateY(-1px);
            box-shadow: 0 6px 16px rgba(220, 38, 38, 0.4);
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

        @media (max-width: 640px) {
            .form-grid {
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
            <a href="{{ route('kategori.index') }}" class="nav-link">Kategori</a>
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
            <span>Edit Diecast #{{ $diecast->id }}</span>
        </div>

        <div class="form-card">
            <div class="form-header">
                <div>
                    <h2><span>✏️</span> Edit Diecast Hot Wheels</h2>
                    <p>Perbarui informasi model, seri kategori, harga satuan, atau stok unit.</p>
                </div>
            </div>

            <form action="{{ route('diecast.update', $diecast) }}" method="POST" enctype="multipart/form-data" class="form-body">
                @csrf
                @method('PUT')

                <div class="form-grid">
                    <!-- Nama Diecast -->
                    <div class="form-group form-group-full">
                        <label for="nama_diecast" class="form-label">
                            Nama Model Hot Wheels <span class="required">*</span>
                        </label>
                        <input type="text"
                               id="nama_diecast"
                               name="nama_diecast"
                               class="form-control @error('nama_diecast') is-invalid @enderror"
                               value="{{ old('nama_diecast', $diecast->nama_diecast) }}"
                               required>
                        @error('nama_diecast')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Kategori -->
                    <div class="form-group">
                        <label for="kategori_id" class="form-label">
                            Kategori / Seri <span class="required">*</span>
                        </label>
                        <select id="kategori_id"
                                name="kategori_id"
                                class="form-control @error('kategori_id') is-invalid @enderror"
                                required>
                            <option value="">-- Pilih Kategori --</option>
                            @foreach ($kategoriList as $kat)
                                <option value="{{ $kat->id }}" {{ old('kategori_id', $diecast->kategori_id) == $kat->id ? 'selected' : '' }}>
                                    {{ $kat->nama }}
                                </option>
                            @endforeach
                        </select>
                        @error('kategori_id')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Skala -->
                    <div class="form-group">
                        <label for="skala" class="form-label">
                            Skala Diecast <span class="required">*</span>
                        </label>
                        <select id="skala"
                                name="skala"
                                class="form-control @error('skala') is-invalid @enderror"
                                required>
                            @php $currSkala = old('skala', $diecast->skala); @endphp
                            <option value="1:64" {{ $currSkala === '1:64' ? 'selected' : '' }}>1:64 (Standard Hot Wheels)</option>
                            <option value="1:43" {{ $currSkala === '1:43' ? 'selected' : '' }}>1:43 (Medium Collector)</option>
                            <option value="1:18" {{ $currSkala === '1:18' ? 'selected' : '' }}>1:18 (Large Scale Exotic)</option>
                            <option value="1:24" {{ $currSkala === '1:24' ? 'selected' : '' }}>1:24</option>
                            <option value="1:32" {{ $currSkala === '1:32' ? 'selected' : '' }}>1:32</option>
                        </select>
                        @error('skala')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Harga Jual -->
                    <div class="form-group">
                        <label for="harga" class="form-label">
                            Harga Jual Satuan (Rp) <span class="required">*</span>
                        </label>
                        <input type="number"
                               id="harga"
                               name="harga"
                               min="0"
                               step="1000"
                               class="form-control @error('harga') is-invalid @enderror"
                               value="{{ old('harga', $diecast->effective_harga) }}"
                               required>
                        @error('harga')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Stok Unit -->
                    <div class="form-group">
                        <label for="stok" class="form-label">
                            Stok Unit Ready <span class="required">*</span>
                        </label>
                        <input type="number"
                               id="stok"
                               name="stok"
                               min="0"
                               class="form-control @error('stok') is-invalid @enderror"
                               value="{{ old('stok', $diecast->stok) }}"
                               required>
                        @error('stok')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Upload Foto Gambar -->
                    <div class="form-group form-group-full">
                        <label for="gambar" class="form-label">
                            Ganti Foto Diecast (Opsional, JPG/PNG/WEBP Maks. 2MB)
                        </label>

                        <!-- Preview Foto Saat Ini -->
                        <div class="current-photo-box">
                            <img src="{{ $diecast->gambar_url }}" alt="{{ $diecast->nama_diecast }}" class="current-photo-img">
                            <div>
                                <strong style="font-size: 0.9rem; color: var(--dark); display: block;">Foto Saat Ini</strong>
                                <small style="color: var(--text-muted);">{{ $diecast->gambar ?: 'Foto mapping bawaan' }}</small>
                            </div>
                        </div>

                        <div class="upload-area" onclick="document.getElementById('gambarInput').click()">
                            <input type="file"
                                   id="gambarInput"
                                   name="gambar"
                                   accept="image/*"
                                   style="display: none;"
                                   onchange="previewImage(this)">
                            
                            <img id="previewImg" src="" alt="Preview Baru" class="upload-preview">
                            
                            <div class="upload-placeholder" id="uploadPlaceholder">
                                <span class="icon">📷</span>
                                <strong style="color: var(--dark); font-size: 0.95rem;">Klik di sini untuk mengganti foto</strong>
                                <small style="color: var(--text-muted);">Kosongkan jika tidak ingin mengubah foto</small>
                            </div>
                        </div>
                        @error('gambar')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-actions">
                    <a href="{{ route('diecast.index') }}" class="btn-cancel">Batal</a>
                    <button type="submit" class="btn-submit">
                        <span>💾</span>
                        <span>Perbarui Hot Wheels</span>
                    </button>
                </div>
            </form>
        </div>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} <strong>DiecastHub</strong>. Pusat Jual Beli Hot Wheels Original & Komunitas Kolektor Indonesia.</p>
    </footer>

    <script>
        function previewImage(input) {
            const preview = document.getElementById('previewImg');
            const placeholder = document.getElementById('uploadPlaceholder');
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                    placeholder.style.display = 'none';
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>
</html>
