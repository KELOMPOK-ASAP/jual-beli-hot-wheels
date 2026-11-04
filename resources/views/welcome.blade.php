<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DnT STORE - Pusat Jual Beli Hot Wheels Original & Koleksi Langka</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #dc2626;
            --primary-hover: #b91c1c;
            --dark: #0f172a;
            --dark-card: #1e293b;
            --text-main: #334155;
            --text-muted: #64748b;
            --border: #e2e8f0;
            --bg: #0f172a;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background-color: var(--bg);
            color: #f8fafc;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
            background-image: 
                radial-gradient(at 0% 0%, rgba(220, 38, 38, 0.22) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(245, 158, 11, 0.15) 0px, transparent 50%);
        }

        /* Navbar */
        .navbar {
            padding: 1.25rem 3rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            position: sticky;
            top: 0;
            z-index: 50;
            background: rgba(15, 23, 42, 0.75);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
            color: white;
        }

        .brand-logo {
            background: linear-gradient(135deg, #ef4444, #f59e0b);
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.45rem;
            box-shadow: 0 4px 14px rgba(239, 68, 68, 0.45);
        }

        .brand-text h1 {
            font-size: 1.35rem;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .brand-text span {
            color: #ef4444;
        }

        .brand-text small {
            display: block;
            font-size: 0.7rem;
            color: #94a3b8;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            font-weight: 700;
        }

        .nav-links {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .nav-link {
            text-decoration: none;
            color: #94a3b8;
            font-size: 0.95rem;
            font-weight: 600;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            transition: all 0.2s;
        }

        .nav-link:hover {
            color: white;
        }

        .btn-cta {
            background: linear-gradient(135deg, #ef4444, #dc2626);
            color: white;
            text-decoration: none;
            padding: 0.65rem 1.4rem;
            border-radius: 10px;
            font-weight: 700;
            font-size: 0.95rem;
            transition: all 0.2s;
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.35);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-cta:hover {
            background: linear-gradient(135deg, #dc2626, #b91c1c);
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(239, 68, 68, 0.5);
        }

        /* Hero */
        .hero {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 4.5rem 1.5rem 3.5rem;
            max-width: 950px;
            margin: 0 auto;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(239, 68, 68, 0.15);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #fca5a5;
            padding: 0.45rem 1.1rem;
            border-radius: 9999px;
            font-size: 0.85rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .hero h2 {
            font-size: 3.35rem;
            font-weight: 800;
            line-height: 1.15;
            letter-spacing: -1px;
            margin-bottom: 1.5rem;
        }

        .hero h2 span {
            background: linear-gradient(135deg, #f87171, #ef4444, #f59e0b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            color: #94a3b8;
            font-size: 1.15rem;
            line-height: 1.75;
            max-width: 720px;
            margin-bottom: 2.5rem;
        }

        .hero-actions {
            display: flex;
            gap: 1.25rem;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 3.5rem;
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.15);
            color: #e2e8f0;
            text-decoration: none;
            padding: 0.65rem 1.4rem;
            border-radius: 10px;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border-color: rgba(255, 255, 255, 0.3);
        }

        /* Hot Wheels Category Badges */
        .hw-series-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 0.75rem;
            margin-bottom: 3.5rem;
        }

        .hw-tag {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #cbd5e1;
            padding: 0.35rem 0.85rem;
            border-radius: 8px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        /* Status Grid */
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.25rem;
            width: 100%;
            text-align: left;
        }

        .feature-card {
            background: rgba(30, 41, 59, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.07);
            border-radius: 14px;
            padding: 1.25rem 1.5rem;
            backdrop-filter: blur(8px);
            transition: transform 0.2s;
        }

        .feature-card:hover {
            transform: translateY(-3px);
            border-color: rgba(239, 68, 68, 0.3);
        }

        .feature-card h4 {
            font-size: 1rem;
            font-weight: 700;
            color: #f1f5f9;
            margin-bottom: 0.35rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .feature-card p {
            color: #94a3b8;
            font-size: 0.85rem;
            margin: 0;
            line-height: 1.5;
        }

        /* Footer */
        footer {
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            padding: 1.5rem 2rem;
            text-align: center;
            color: #64748b;
            font-size: 0.85rem;
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 1rem 1.5rem;
                flex-direction: column;
                gap: 1rem;
            }
            .hero h2 {
                font-size: 2.35rem;
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
                <small>Jual Beli Hot Wheels</small>
            </div>
        </a>
        <div class="nav-links">
            <a href="{{ route('diecast.index') }}" class="btn-cta">
                Belanja Hot Wheels &rarr;
            </a>
        </div>
    </header>

    <!-- Hero Content -->
    <main class="hero">
        <div class="hero-badge">
            🔥 Pusat Jual Beli Hot Wheels Original & Rare
        </div>

        <h2>Jual Beli Hot Wheels <span>DnT STORE</span></h2>
        
        <p>
            Platform jual beli Hot Wheels original terpercaya. Temukan Hot Wheels dengan harga terbaik dan stok real-time.
        </p>

        <!-- Series Tags -->
        <div class="hw-series-row">
            <span class="hw-tag">🔥 Mainline Regular</span>
            <span class="hw-tag">💎 Super Treasure Hunt ($TH)</span>
            <span class="hw-tag">🏁 Car Culture & Premium</span>
            <span class="hw-tag">🔰 JDM Series</span>
            <span class="hw-tag">⚡ American Muscle</span>
            <span class="hw-tag">🚛 Team Transport</span>
        </div>

        <div class="hero-actions">
            <a href="{{ route('diecast.index') }}" class="btn-cta" style="padding: 0.85rem 2rem; font-size: 1.05rem;">
                🔥 Beli Hot Wheels Sekarang
            </a>
            <a href="#keunggulan" class="btn-secondary" style="padding: 0.85rem 1.5rem; font-size: 1.05rem;">
                ✨ Keunggulan Belanja
            </a>
        </div>

        <div class="feature-grid" id="keunggulan">
            <div class="feature-card">
                <h4>💯 100% Original Mattel</h4>
                <p>Jaminan keaslian koleksi blister card (MOC) dan unit loose dari pabrikan resmi.</p>
            </div>
            <div class="feature-card">
                <h4>💎 Edisi Langka & Hunt</h4>
                <p>Tersedia Hot Wheels langka, casting favorit kolektor, hingga edisi terbatas.</p>
            </div>
            <div class="feature-card">
                <h4>📦 Packing Box & Bubble</h4>
                <p>Pengiriman aman ke seluruh Indonesia dengan proteksi dus tebal & bubble wrap gratis.</p>
            </div>
            <div class="feature-card">
                <h4>⚡ Stok & Harga Real-Time</h4>
                <p>Pantau langsung unit yang siap kirim tanpa takut kehabisan item buruan Anda.</p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} <strong>DnT STORE</strong>. Pusat Jual Beli Hot Wheels.</p>
    </footer>

</body>
</html>
