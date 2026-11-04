<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Jual Beli Hot Wheels - DiecastHub</title>
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
            --dark-card: #1e293b;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border: #e2e8f0;
            --bg: #f8fafc;
            --card-bg: #ffffff;
            --success: #16a34a;
            --success-light: #dcfce7;
            --warning: #d97706;
            --warning-light: #fef3c7;
            --info: #2563eb;
            --info-light: #dbeafe;
            --purple: #7c3aed;
            --purple-light: #ede9fe;
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

        /* Navbar */
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

        /* Container */
        .container {
            max-width: 1240px;
            margin: 2rem auto;
            padding: 0 1.5rem;
            flex: 1;
            width: 100%;
        }

        /* Page Header */
        .header-section {
            margin-bottom: 1.75rem;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            flex-wrap: wrap;
            gap: 1.25rem;
        }

        .header-title h2 {
            font-size: 1.95rem;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 0.35rem;
            letter-spacing: -0.5px;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .header-title p {
            color: var(--text-muted);
            font-size: 0.95rem;
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.25rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: var(--card-bg);
            border-radius: 16px;
            padding: 1.25rem 1.5rem;
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.04);
        }

        .stat-info p {
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--text-muted);
            margin-bottom: 0.35rem;
        }

        .stat-info h3 {
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--dark);
            line-height: 1;
        }

        .stat-info small {
            display: block;
            margin-top: 0.35rem;
            font-size: 0.75rem;
            color: var(--text-muted);
            font-weight: 500;
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .icon-red { background: #fee2e2; color: #dc2626; }
        .icon-blue { background: #dbeafe; color: #2563eb; }
        .icon-amber { background: #fef3c7; color: #d97706; }
        .icon-purple { background: #ede9fe; color: #7c3aed; }

        /* Visualization Box */
        .vis-card {
            background: #ffffff;
            border-radius: 16px;
            border: 1px solid var(--border);
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 2px 6px rgba(0,0,0,0.02);
        }

        .vis-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.25rem;
            cursor: pointer;
            user-select: none;
        }

        .vis-header h3 {
            font-size: 1.05rem;
            font-weight: 800;
            color: var(--dark);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .vis-toggle-btn {
            background: #f1f5f9;
            border: none;
            padding: 0.4rem 0.8rem;
            border-radius: 8px;
            font-size: 0.8rem;
            font-weight: 700;
            color: var(--text-muted);
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.35rem;
            transition: all 0.2s;
        }

        .vis-toggle-btn:hover {
            background: #e2e8f0;
            color: var(--dark);
        }

        .vis-content {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
            transition: all 0.3s;
        }

        @media (max-width: 900px) {
            .vis-content {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
        }

        .vis-subtitle {
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--text-muted);
            margin-bottom: 1rem;
        }

        .cat-bar-item {
            margin-bottom: 0.9rem;
        }

        .cat-bar-labels {
            display: flex;
            justify-content: space-between;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 0.35rem;
        }

        .cat-progress-bg {
            height: 10px;
            background: #f1f5f9;
            border-radius: 999px;
            overflow: hidden;
            display: flex;
        }

        .cat-progress-fill {
            height: 100%;
            border-radius: 999px;
            width: 0;
            transition: width 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .color-0 { background: #ef4444; }
        .color-1 { background: #3b82f6; }
        .color-2 { background: #10b981; }
        .color-3 { background: #f59e0b; }
        .color-4 { background: #8b5cf6; }

        .scale-pills {
            display: flex;
            flex-wrap: wrap;
            gap: 0.6rem;
            margin-top: 0.5rem;
        }

        .scale-pill-item {
            background: #f8fafc;
            border: 1px solid var(--border);
            padding: 0.5rem 0.85rem;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex: 1;
            min-width: 110px;
        }

        .scale-pill-item span:first-child {
            font-family: 'JetBrains Mono', monospace;
            font-weight: 700;
            font-size: 0.9rem;
            color: var(--dark);
        }

        .scale-pill-item span:last-child {
            font-size: 0.75rem;
            font-weight: 700;
            color: var(--text-muted);
            background: #e2e8f0;
            padding: 0.2rem 0.5rem;
            border-radius: 6px;
        }

        /* Filter & Controls Toolbar */
        .toolbar {
            background: #ffffff;
            border-radius: 16px;
            border: 1px solid var(--border);
            padding: 1.25rem 1.5rem;
            margin-bottom: 1.75rem;
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        }

        .toolbar-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .search-wrapper {
            position: relative;
            flex: 1;
            min-width: 280px;
        }

        .search-wrapper input {
            width: 100%;
            padding: 0.7rem 1rem 0.7rem 2.6rem;
            border: 1.5px solid var(--border);
            border-radius: 12px;
            font-size: 0.925rem;
            outline: none;
            background: #f8fafc;
            transition: all 0.2s;
        }

        .search-wrapper input:focus {
            background: #ffffff;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.1);
        }

        .search-wrapper svg {
            position: absolute;
            left: 0.85rem;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            color: var(--text-muted);
        }

        .view-switchers {
            display: flex;
            align-items: center;
            background: #f1f5f9;
            padding: 4px;
            border-radius: 10px;
            gap: 4px;
        }

        .view-btn {
            background: transparent;
            border: none;
            padding: 0.5rem 0.85rem;
            border-radius: 7px;
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--text-muted);
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.4rem;
            transition: all 0.2s;
        }

        .view-btn.active {
            background: #ffffff;
            color: var(--dark);
            box-shadow: 0 1px 3px rgba(0,0,0,0.06);
        }

        .toolbar-filters {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            flex-wrap: wrap;
        }

        .filter-select {
            padding: 0.55rem 1rem;
            border: 1px solid var(--border);
            border-radius: 10px;
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--text-main);
            background: #ffffff;
            outline: none;
            cursor: pointer;
            transition: border-color 0.2s;
        }

        .filter-select:focus {
            border-color: var(--primary);
        }

        .cat-pills-row {
            display: flex;
            gap: 0.5rem;
            overflow-x: auto;
            padding-bottom: 2px;
            scrollbar-width: none;
        }

        .cat-pills-row::-webkit-scrollbar {
            display: none;
        }

        .cat-pill {
            padding: 0.45rem 0.9rem;
            border-radius: 999px;
            border: 1px solid var(--border);
            background: #ffffff;
            color: var(--text-muted);
            font-size: 0.825rem;
            font-weight: 700;
            white-space: nowrap;
            cursor: pointer;
            transition: all 0.2s;
        }

        .cat-pill:hover {
            border-color: var(--primary);
            color: var(--primary);
        }

        .cat-pill.active {
            background: var(--dark);
            border-color: var(--dark);
            color: #ffffff;
            box-shadow: 0 2px 6px rgba(15, 23, 42, 0.2);
        }

        .results-summary {
            font-size: 0.85rem;
            color: var(--text-muted);
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.25rem;
        }

        /* CARD VIEW (GRID KARTU HOT WHEELS) */
        .diecast-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(290px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .diecast-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 18px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            box-shadow: 0 2px 6px rgba(0,0,0,0.02);
            transition: transform 0.25s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.25s, border-color 0.25s;
            position: relative;
        }

        .diecast-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 32px rgba(15, 23, 42, 0.08);
            border-color: #cbd5e1;
        }

        /* Hot Wheels Picture Showcase */
        .card-img-wrapper {
            position: relative;
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-car-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: transform 0.4s ease;
        }

        .diecast-card:hover .card-car-img {
            transform: scale(1.06);
        }

        .card-badge-scale {
            position: absolute;
            top: 0.75rem;
            left: 0.75rem;
            font-family: 'JetBrains Mono', monospace;
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(4px);
            color: #ffffff;
            padding: 0.25rem 0.6rem;
            border-radius: 6px;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            z-index: 2;
        }

        .card-badge-status {
            position: absolute;
            top: 0.75rem;
            right: 0.75rem;
            z-index: 2;
        }

        .card-body {
            padding: 1.25rem;
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .card-category {
            font-size: 0.75rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--primary);
            margin-bottom: 0.35rem;
        }

        .card-title {
            font-size: 1.15rem;
            font-weight: 800;
            color: var(--dark);
            line-height: 1.3;
            margin-bottom: 0.75rem;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            min-height: 2.6rem;
        }

        /* Hot Wheels Price Tag */
        .card-price-row {
            display: flex;
            align-items: baseline;
            justify-content: space-between;
            margin-bottom: 0.75rem;
            background: #fef2f2;
            padding: 0.5rem 0.75rem;
            border-radius: 8px;
            border: 1px solid #fee2e2;
        }

        .card-price-label {
            font-size: 0.75rem;
            font-weight: 700;
            color: #991b1b;
            text-transform: uppercase;
        }

        .card-price-value {
            font-size: 1.1rem;
            font-weight: 800;
            color: var(--primary);
            font-family: 'JetBrains Mono', monospace;
        }

        .stock-progress-container {
            margin-top: auto;
            padding-top: 0.75rem;
            border-top: 1px solid #f1f5f9;
        }

        .stock-progress-header {
            display: flex;
            justify-content: space-between;
            font-size: 0.8rem;
            font-weight: 700;
            color: var(--text-muted);
            margin-bottom: 0.4rem;
        }

        .stock-bar-bg {
            height: 7px;
            background: #f1f5f9;
            border-radius: 999px;
            overflow: hidden;
        }

        .stock-bar-fill {
            height: 100%;
            border-radius: 999px;
            width: 0;
            transition: width 0.4s ease;
        }

        .stock-bar-high { background: #16a34a; }
        .stock-bar-med { background: #f59e0b; }
        .stock-bar-low { background: #ef4444; }

        .card-footer {
            padding: 0.9rem 1.25rem;
            background: #fafbfc;
            border-top: 1px solid #f1f5f9;
            display: flex;
            gap: 0.5rem;
        }

        .btn-buy {
            flex: 1;
            background: linear-gradient(135deg, #ef4444, #dc2626);
            border: none;
            color: #ffffff;
            padding: 0.65rem 1rem;
            border-radius: 10px;
            font-size: 0.85rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.4rem;
            box-shadow: 0 2px 6px rgba(220, 38, 38, 0.2);
        }

        .btn-buy:hover {
            background: linear-gradient(135deg, #dc2626, #b91c1c);
            transform: translateY(-1px);
        }

        /* TABLE VIEW */
        .table-card {
            background: #ffffff;
            border-radius: 16px;
            border: 1px solid var(--border);
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
            margin-bottom: 2rem;
        }

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
            color: var(--text-muted);
            font-size: 0.775rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 1rem 1.25rem;
            border-bottom: 1px solid var(--border);
        }

        td {
            padding: 1rem 1.25rem;
            border-bottom: 1px solid var(--border);
            font-size: 0.9rem;
            vertical-align: middle;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background-color: #fafbfc;
        }

        .table-model-info {
            display: flex;
            align-items: center;
            gap: 0.85rem;
        }

        .table-thumb-wrapper {
            width: 52px;
            height: 40px;
            border-radius: 8px;
            overflow: hidden;
            background: #0f172a;
            flex-shrink: 0;
            border: 1px solid var(--border);
        }

        .table-thumb-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .table-model-name {
            font-weight: 700;
            color: var(--dark);
            line-height: 1.2;
        }

        /* Badges */
        .badge {
            display: inline-flex;
            align-items: center;
            padding: 0.35rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 700;
            line-height: 1;
            white-space: nowrap;
        }

        .badge-cat {
            background: #f1f5f9;
            color: #475569;
            border: 1px solid #cbd5e1;
        }

        .badge-ready { background: var(--success-light); color: var(--success); }
        .badge-warn { background: var(--warning-light); color: var(--warning); }
        .badge-out { background: #fee2e2; color: #dc2626; }

        /* Empty State */
        .empty-state {
            padding: 4.5rem 2rem;
            text-align: center;
            background: #ffffff;
            border-radius: 18px;
            border: 1px solid var(--border);
            margin-bottom: 2rem;
        }

        .empty-icon {
            font-size: 3.5rem;
            margin-bottom: 1rem;
        }

        .empty-state h4 {
            font-size: 1.25rem;
            color: var(--dark);
            font-weight: 800;
            margin-bottom: 0.5rem;
        }

        .empty-state p {
            color: var(--text-muted);
            font-size: 0.95rem;
            max-width: 440px;
            margin: 0 auto 1.5rem;
        }

        .btn-reset-filter {
            background: var(--dark);
            color: #ffffff;
            border: none;
            padding: 0.6rem 1.4rem;
            border-radius: 10px;
            font-size: 0.875rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn-reset-filter:hover {
            background: var(--primary);
        }

        /* MODAL DETAIL & PEMBELIAN */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(15, 23, 42, 0.65);
            backdrop-filter: blur(5px);
            z-index: 100;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            opacity: 0;
            transition: opacity 0.25s ease;
        }

        .modal-overlay.open {
            display: flex;
            opacity: 1;
        }

        .modal-card {
            background: #ffffff;
            border-radius: 24px;
            max-width: 680px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            display: flex;
            flex-direction: column;
            transform: scale(0.95);
            transition: transform 0.25s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .modal-overlay.open .modal-card {
            transform: scale(1);
        }

        .modal-header {
            padding: 1.25rem 1.75rem;
            border-bottom: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            background: #ffffff;
            z-index: 2;
        }

        .modal-header-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .modal-header-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: linear-gradient(135deg, #fee2e2, #fecaca);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .modal-header-info h3 {
            font-size: 1.2rem;
            font-weight: 800;
            color: var(--dark);
            line-height: 1.25;
        }

        .modal-header-info p {
            font-size: 0.85rem;
            color: var(--text-muted);
            font-weight: 600;
        }

        .modal-close-btn {
            background: #f1f5f9;
            border: none;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text-muted);
            cursor: pointer;
            transition: all 0.2s;
        }

        .modal-close-btn:hover {
            background: #fee2e2;
            color: #ef4444;
        }

        .modal-body {
            padding: 1.75rem;
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }

        /* Large Image Preview in Modal */
        .modal-image-container {
            width: 100%;
            height: 280px;
            background: #0f172a;
            border-radius: 16px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .modal-image-preview {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .modal-price-box {
            background: linear-gradient(135deg, #fef2f2, #fff1f2);
            border: 1.5px solid #fecaca;
            border-radius: 16px;
            padding: 1.25rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-price-box span {
            font-size: 0.85rem;
            font-weight: 700;
            color: #991b1b;
            text-transform: uppercase;
        }

        .modal-price-box h2 {
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--primary);
            font-family: 'JetBrains Mono', monospace;
        }

        .modal-spec-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }

        @media (max-width: 540px) {
            .modal-spec-grid {
                grid-template-columns: 1fr;
            }
        }

        .spec-box {
            background: #f8fafc;
            border: 1px solid var(--border);
            padding: 1rem;
            border-radius: 12px;
        }

        .spec-box span {
            display: block;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--text-muted);
            margin-bottom: 0.25rem;
        }

        .spec-box strong {
            font-size: 1rem;
            color: var(--dark);
        }

        .guarantee-box {
            background: #f0fdf4;
            border: 1px solid #bbf7d0;
            border-radius: 12px;
            padding: 1rem 1.25rem;
            font-size: 0.85rem;
            color: #166534;
            line-height: 1.5;
        }

        .guarantee-box strong {
            display: block;
            margin-bottom: 0.25rem;
            font-weight: 800;
        }

        .modal-footer {
            padding: 1.25rem 1.75rem;
            background: #f8fafc;
            border-top: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            bottom: 0;
            border-radius: 0 0 24px 24px;
            gap: 1rem;
        }

        .btn-wa-order {
            background: #25D366;
            color: #ffffff;
            text-decoration: none;
            padding: 0.7rem 1.4rem;
            border-radius: 10px;
            font-size: 0.9rem;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.2s;
            box-shadow: 0 2px 6px rgba(37, 211, 102, 0.3);
        }

        .btn-wa-order:hover {
            background: #1eb956;
            transform: translateY(-1px);
        }

        .btn-modal-close {
            background: #f1f5f9;
            color: var(--dark);
            border: 1px solid var(--border);
            padding: 0.7rem 1.25rem;
            border-radius: 10px;
            font-size: 0.875rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn-modal-close:hover {
            background: #e2e8f0;
        }

        /* Footer */
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
            .navbar {
                flex-direction: column;
                gap: 0.75rem;
                padding: 1rem;
            }
            .header-section {
                flex-direction: column;
                align-items: flex-start;
            }
            .toolbar {
                padding: 1rem;
            }
            .toolbar-top {
                flex-direction: column;
                align-items: stretch;
            }
            .modal-footer {
                flex-direction: column;
                align-items: stretch;
            }
            .btn-wa-order {
                justify-content: center;
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
            <a href="{{ route('diecast.index') }}" class="nav-link active">Katalog Hot Wheels</a>
        </nav>
    </header>

    <!-- Main Container -->
    <main class="container">
        
        <!-- Header Section -->
        <div class="header-section">
            <div class="header-title">
                <h2>
                    <span>🔥</span>
                    <span>Katalog Jual Beli Hot Wheels Original</span>
                </h2>
                <p>Pusat jual beli miniatur mobil Hot Wheels original: foto asli studio, seri Mainline, JDM, Muscle Car, Car Culture, hingga Super Treasure Hunt.</p>
            </div>
        </div>

        <!-- 4 Quick Stats Cards -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-info">
                    <p>Model Hot Wheels</p>
                    <h3>{{ $totalDiecast }}</h3>
                    <small>Koleksi Siap Pilih</small>
                </div>
                <div class="stat-icon icon-red">🏎️</div>
            </div>

            <div class="stat-card">
                <div class="stat-info">
                    <p>Stok Unit Siap Kirim</p>
                    <h3>{{ $totalStok }}</h3>
                    <small>Unit Ready di Etalase</small>
                </div>
                <div class="stat-icon icon-blue">📦</div>
            </div>

            <div class="stat-card">
                <div class="stat-info">
                    <p>Seri / Kategori</p>
                    <h3>{{ $totalKategori }}</h3>
                    <small>Varian Tema Hot Wheels</small>
                </div>
                <div class="stat-icon icon-purple">🏷️</div>
            </div>

            <div class="stat-card">
                <div class="stat-info">
                    <p>Unit Terbooking</p>
                    <h3>{{ $totalDipinjam }}</h3>
                    <small>Dalam Proses Transaksi</small>
                </div>
                <div class="stat-icon icon-amber">🤝</div>
            </div>
        </div>

        <!-- Visualisasi Seri & Kategori (Collection Insights) -->
        <div class="vis-card">
            <div class="vis-header" onclick="toggleVisualization()">
                <h3>
                    <span>📊</span>
                    <span>Analisis Ketersediaan Seri Hot Wheels</span>
                </h3>
                <button class="vis-toggle-btn" id="visToggleBtn" type="button">
                    <span id="visToggleText">Sembunyikan</span>
                    <span id="visToggleIcon">▲</span>
                </button>
            </div>

            <div class="vis-content" id="visContent">
                <!-- Distribusi Seri -->
                <div>
                    <h4 class="vis-subtitle">Sebaran Stok per Seri Hot Wheels</h4>
                    @php
                        $colorClasses = ['color-0', 'color-1', 'color-2', 'color-3', 'color-4'];
                    @endphp
                    @foreach ($kategoriList as $index => $kat)
                        @php
                            $modelCount = $kat->diecasts_count;
                            $unitCount = $kat->diecasts->sum('stok');
                            $percent = $totalDiecast > 0 ? round(($modelCount / $totalDiecast) * 100) : 0;
                            $barClass = $colorClasses[$index % count($colorClasses)];
                        @endphp
                        <div class="cat-bar-item">
                            <div class="cat-bar-labels">
                                <span>{{ $kat->nama }} ({{ $modelCount }} Model, {{ $unitCount }} Unit)</span>
                                <span>{{ $percent }}%</span>
                            </div>
                            <div class="cat-progress-bg">
                                <div class="cat-progress-fill {{ $barClass }}" data-percent="{{ $percent }}"></div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Distribusi Skala & Status Siap Jual -->
                <div>
                    <h4 class="vis-subtitle">Varian Skala Miniatur</h4>
                    <div class="scale-pills">
                        @foreach ($skalaList as $skala)
                            @php
                                $skalaCount = $diecastList->where('skala', $skala)->count();
                            @endphp
                            <div class="scale-pill-item">
                                <span>{{ $skala }}</span>
                                <span>{{ $skalaCount }} Model</span>
                            </div>
                        @endforeach
                    </div>

                    <h4 class="vis-subtitle" style="margin-top: 1.5rem;">Kesiapan Pengiriman Barang</h4>
                    <div style="background: #f8fafc; border: 1px solid var(--border); padding: 0.85rem 1rem; border-radius: 12px; display: flex; flex-direction: column; gap: 0.5rem; font-size: 0.85rem;">
                        <div style="display: flex; justify-content: space-between;">
                            <span style="color: var(--success); font-weight: 700;">🟢 Stok Banyak (>3 unit):</span>
                            <strong>{{ $diecastList->where('stok', '>', 3)->count() }} Model</strong>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <span style="color: var(--warning); font-weight: 700;">🟡 Stok Menipis (1-3 unit):</span>
                            <strong>{{ $diecastList->whereBetween('stok', [1, 3])->count() }} Model</strong>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <span style="color: var(--primary); font-weight: 700;">🔴 Sold Out (0 unit):</span>
                            <strong>{{ $diecastList->where('stok', 0)->count() }} Model</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filter & Search Toolbar -->
        <div class="toolbar">
            <div class="toolbar-top">
                <div class="search-wrapper">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <input type="text" id="searchInput" placeholder="Cari nama Hot Wheels, skala, atau seri mobil..." oninput="applyFilters()">
                </div>

                <!-- View Switchers (Grid Card vs Table) -->
                <div class="view-switchers">
                    <button class="view-btn active" id="btnViewCard" onclick="switchView('card')" title="Tampilan Grid Kartu">
                        <span>🗂️</span>
                        <span>Grid Belanja</span>
                    </button>
                    <button class="view-btn" id="btnViewTable" onclick="switchView('table')" title="Tampilan Tabel Rinci">
                        <span>📋</span>
                        <span>Tabel Rinci</span>
                    </button>
                </div>
            </div>

            <!-- Filter Controls -->
            <div class="toolbar-filters">
                <!-- Dropdown Skala -->
                <select class="filter-select" id="skalaFilter" onchange="applyFilters()">
                    <option value="">Semua Skala</option>
                    @foreach ($skalaList as $skala)
                        <option value="{{ $skala }}">Skala {{ $skala }}</option>
                    @endforeach
                </select>

                <!-- Dropdown Status Ketersediaan -->
                <select class="filter-select" id="statusFilter" onchange="applyFilters()">
                    <option value="">Semua Status Stok</option>
                    <option value="available">Ready Stock (>3 unit)</option>
                    <option value="limited">Stok Menipis (1-3 unit)</option>
                    <option value="out">Habis / Sold Out</option>
                </select>

                <!-- Sorting Dropdown -->
                <select class="filter-select" id="sortFilter" onchange="applySorting()">
                    <option value="id-asc">Urutan Terbaru</option>
                    <option value="name-asc">Nama Hot Wheels (A - Z)</option>
                    <option value="name-desc">Nama Hot Wheels (Z - A)</option>
                    <option value="price-asc">Harga Termurah</option>
                    <option value="price-desc">Harga Tertinggi</option>
                    <option value="stock-desc">Stok Terbanyak</option>
                </select>

                <!-- Reset Filter Button -->
                <button class="filter-select" onclick="resetAllFilters()" style="color: var(--primary); font-weight: 700;">
                    ↺ Reset Filter
                </button>
            </div>

            <!-- Category Pills Bar -->
            <div class="cat-pills-row">
                <button class="cat-pill active" onclick="selectCategoryPill('', this)">Semua Seri ({{ $totalDiecast }})</button>
                @foreach ($kategoriList as $kat)
                    <button class="cat-pill" onclick="selectCategoryPill('{{ $kat->nama }}', this)">
                        {{ $kat->nama }} ({{ $kat->diecasts_count }})
                    </button>
                @endforeach
            </div>
        </div>

        <!-- Results Counter -->
        <div class="results-summary">
            <span>Menampilkan <strong id="visibleCount">{{ $totalDiecast }}</strong> dari <strong>{{ $totalDiecast }}</strong> unit Hot Wheels</span>
            <span id="activeFilterBadge" style="color: var(--primary); font-size: 0.8rem; display: none;">Filter aktif diterapkan</span>
        </div>

        <!-- 1. GRID KARTU (CARD VIEW DENGAN FOTO ASLI HOT WHEELS) -->
        <div class="diecast-grid" id="cardViewContainer">
            @foreach ($diecastList as $item)
                @php
                    $katNama = $item->kategori->nama ?? 'Umum';
                    $price = $diecastJsonData[$item->id]['price'] ?? 45000;
                    $imageUrl = $item->gambar_url;

                    // Stock status
                    $stockStatus = 'available';
                    $stockBarClass = 'stock-bar-high';
                    $stockWidth = min(100, ($item->stok / 8) * 100);
                    if ($item->stok <= 0) {
                        $stockStatus = 'out';
                        $stockBarClass = 'stock-bar-low';
                    } elseif ($item->stok <= 3) {
                        $stockStatus = 'limited';
                        $stockBarClass = 'stock-bar-med';
                    }
                @endphp
                <div class="diecast-card"
                     data-id="{{ $item->id }}"
                     data-name="{{ strtolower($item->nama_diecast) }}"
                     data-category="{{ strtolower($katNama) }}"
                     data-scale="{{ $item->skala }}"
                     data-stock="{{ $item->stok }}"
                     data-price="{{ $price }}"
                     data-status="{{ $stockStatus }}">
                    
                    <!-- Card Hot Wheels Photo Showcase -->
                    <div class="card-img-wrapper">
                        <img src="{{ $imageUrl }}" alt="{{ $item->nama_diecast }}" class="card-car-img" loading="lazy">
                        <span class="card-badge-scale">{{ $item->skala }}</span>
                        <div class="card-badge-status">
                            @if ($item->stok > 3)
                                <span class="badge badge-ready">Ready Stock</span>
                            @elseif ($item->stok > 0)
                                <span class="badge badge-warn">Sisa Sedikit</span>
                            @else
                                <span class="badge badge-out">Sold Out</span>
                            @endif
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="card-category">{{ $katNama }}</div>
                        <h3 class="card-title" title="{{ $item->nama_diecast }}">{{ $item->nama_diecast }}</h3>

                        <!-- Price Tag -->
                        <div class="card-price-row">
                            <span class="card-price-label">Harga Jual</span>
                            <span class="card-price-value">Rp {{ number_format($price, 0, ',', '.') }}</span>
                        </div>

                        <!-- Stock Progress Indicator -->
                        <div class="stock-progress-container">
                            <div class="stock-progress-header">
                                <span>Ketersediaan Unit:</span>
                                <strong>{{ $item->stok }} Unit Ready</strong>
                            </div>
                            <div class="stock-bar-bg">
                                <div class="stock-bar-fill {{ $stockBarClass }}" data-percent="{{ $stockWidth }}"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Footer Action -->
                    <div class="card-footer">
                        <button class="btn-buy" type="button" data-id="{{ $item->id }}" onclick="openDetailFromBtn(this)">
                            <span>🛒</span>
                            <span>Beli / Detail Unit</span>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- 2. TABEL RINCI (TABLE VIEW DENGAN THUMBNAIL FOTO) -->
        <div class="table-card" id="tableViewContainer" style="display: none;">
            <div class="table-responsive">
                <table id="diecastDataTable">
                    <thead>
                        <tr>
                            <th style="width: 50px;">No</th>
                            <th>Model Hot Wheels</th>
                            <th>Seri / Kategori</th>
                            <th>Skala</th>
                            <th>Harga Jual</th>
                            <th>Stok Ready</th>
                            <th>Kondisi Card</th>
                            <th style="text-align: right;">Beli</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($diecastList as $item)
                        @php
                            $katNama = $item->kategori->nama ?? 'Umum';
                            $price = $diecastJsonData[$item->id]['price'] ?? 45000;
                            $stockStatus = $item->stok > 3 ? 'available' : ($item->stok > 0 ? 'limited' : 'out');
                        @endphp
                        <tr class="table-row-item"
                            data-id="{{ $item->id }}"
                            data-name="{{ strtolower($item->nama_diecast) }}"
                            data-category="{{ strtolower($katNama) }}"
                            data-scale="{{ $item->skala }}"
                            data-stock="{{ $item->stok }}"
                            data-price="{{ $price }}"
                            data-status="{{ $stockStatus }}">
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="table-model-info">
                                    <div class="table-thumb-wrapper">
                                        <img src="{{ $item->gambar_url }}" alt="{{ $item->nama_diecast }}" class="table-thumb-img" loading="lazy">
                                    </div>
                                    <span class="table-model-name">{{ $item->nama_diecast }}</span>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-cat">{{ $katNama }}</span>
                            </td>
                            <td>
                                <span style="font-family: 'JetBrains Mono', monospace; font-weight: 700; color: var(--dark);">
                                    {{ $item->skala }}
                                </span>
                            </td>
                            <td>
                                <strong style="color: var(--primary); font-family: 'JetBrains Mono', monospace;">
                                    Rp {{ number_format($price, 0, ',', '.') }}
                                </strong>
                            </td>
                            <td>
                                @if ($item->stok > 3)
                                    <span class="badge badge-ready">{{ $item->stok }} Unit</span>
                                @elseif ($item->stok > 0)
                                    <span class="badge badge-warn">{{ $item->stok }} Unit</span>
                                @else
                                    <span class="badge badge-out">Habis</span>
                                @endif
                            </td>
                            <td>
                                <span style="color: #166534; font-weight: 700; font-size: 0.8rem; background: #dcfce7; padding: 0.2rem 0.5rem; border-radius: 6px;">
                                    Mint On Card
                                </span>
                            </td>
                            <td style="text-align: right;">
                                <button class="btn-buy" style="padding: 0.4rem 0.85rem; font-size: 0.8rem;" type="button" data-id="{{ $item->id }}" onclick="openDetailFromBtn(this)">
                                    Beli
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- 3. EMPTY STATE JIKA PENCARIAN/FILTER KOSONG -->
        <div class="empty-state" id="emptyStateBox" style="display: none;">
            <div class="empty-icon">🔥</div>
            <h4>Hot Wheels Tidak Ditemukan</h4>
            <p>Tidak ada seri Hot Wheels yang cocok dengan kata kunci atau kriteria filter yang Anda pilih.</p>
            <button class="btn-reset-filter" onclick="resetAllFilters()">Reset Semua Filter</button>
        </div>

    </main>

    <!-- MODAL DETAIL & PEMBELIAN HOT WHEELS -->
    <div class="modal-overlay" id="detailModalOverlay" onclick="handleBackdropClick(event)">
        <div class="modal-card">
            <div class="modal-header">
                <div class="modal-header-info">
                    <div class="modal-header-icon" id="modalCarIcon">🔥</div>
                    <div>
                        <h3 id="modalDiecastName">Nama Hot Wheels</h3>
                        <p id="modalCategoryScale">Seri • Skala</p>
                    </div>
                </div>
                <button class="modal-close-btn" type="button" onclick="closeDetailModal()">&times;</button>
            </div>

            <div class="modal-body">
                <!-- Large Image Preview in Modal -->
                <div class="modal-image-container">
                    <img id="modalCarImage" src="" alt="Hot Wheels Preview" class="modal-image-preview">
                </div>

                <!-- Price Banner -->
                <div class="modal-price-box">
                    <div>
                        <span>Harga Beli Satuan</span>
                        <h2 id="modalPriceDisplay">Rp 0</h2>
                    </div>
                    <div style="text-align: right;">
                        <span style="display: block; font-size: 0.75rem; color: #166534; background: #dcfce7; padding: 0.25rem 0.6rem; border-radius: 6px; font-weight: 700;">
                            ✓ 100% Original Mattel
                        </span>
                    </div>
                </div>

                <!-- Grid Spesifikasi Produk -->
                <div class="modal-spec-grid">
                    <div class="spec-box">
                        <span>Kode Katalog</span>
                        <strong id="modalSpecId">#HW-0</strong>
                    </div>
                    <div class="spec-box">
                        <span>Seri Hot Wheels</span>
                        <strong id="modalSpecCategory">-</strong>
                    </div>
                    <div class="spec-box">
                        <span>Skala Diecast</span>
                        <strong id="modalSpecScale" style="font-family: 'JetBrains Mono', monospace;">-</strong>
                    </div>
                    <div class="spec-box">
                        <span>Stok Ready Kirim</span>
                        <strong id="modalSpecStock">0 Unit</strong>
                    </div>
                    <div class="spec-box">
                        <span>Kondisi Card / Blister</span>
                        <strong style="color: #166534;">Mint On Card (MOC 95-99%)</strong>
                    </div>
                    <div class="spec-box">
                        <span>Packing Proteksi</span>
                        <strong style="color: #2563eb;">Dus Tebal + Bubble Wrap</strong>
                    </div>
                </div>

                <!-- Jaminan Pembelian -->
                <div class="guarantee-box">
                    <strong>🛡️ Jaminan DiecastHub:</strong>
                    Setiap pembelian Hot Wheels di DiecastHub dijamin 100% produk original Mattel dengan card dan blister aman. Pengiriman dilapisi kardus protektor tebal dan bubble wrap tanpa biaya tambahan.
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn-modal-close" type="button" onclick="closeDetailModal()">Tutup</button>
                <a href="#" id="modalWaBtn" target="_blank" class="btn-wa-order">
                    <span>💬</span>
                    <span>Beli Sekarang via WhatsApp</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} <strong>DiecastHub</strong>. Pusat Jual Beli Hot Wheels Original & Komunitas Kolektor Indonesia.</p>
    </footer>

    <!-- JSON DATA STORE EMBEDDED SAFELY AS SCRIPT DATA -->
    <script type="application/json" id="diecastDataJson">{!! json_encode($diecastJsonData) !!}</script>

    <!-- JAVASCRIPT LOGIC (100% Linter Friendly) -->
    <script>
        const diecastData = JSON.parse(document.getElementById("diecastDataJson").textContent || "{}");
        let selectedCategory = "";

        // Set Progress Bars on Page Load
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".cat-progress-fill, .stock-bar-fill").forEach(function(el) {
                const percent = el.getAttribute("data-percent");
                if (percent) {
                    el.style.width = percent + "%";
                }
            });
        });

        // Switch View
        function switchView(mode) {
            const cardView = document.getElementById("cardViewContainer");
            const tableView = document.getElementById("tableViewContainer");
            const btnCard = document.getElementById("btnViewCard");
            const btnTable = document.getElementById("btnViewTable");

            if (mode === "card") {
                cardView.style.display = "grid";
                tableView.style.display = "none";
                btnCard.classList.add("active");
                btnTable.classList.remove("active");
            } else {
                cardView.style.display = "none";
                tableView.style.display = "block";
                btnCard.classList.remove("active");
                btnTable.classList.add("active");
            }
        }

        // Toggle Visualization
        function toggleVisualization() {
            const content = document.getElementById("visContent");
            const toggleText = document.getElementById("visToggleText");
            const toggleIcon = document.getElementById("visToggleIcon");

            if (content.style.display === "none") {
                content.style.display = "grid";
                toggleText.innerText = "Sembunyikan";
                toggleIcon.innerText = "▲";
            } else {
                content.style.display = "none";
                toggleText.innerText = "Tampilkan";
                toggleIcon.innerText = "▼";
            }
        }

        // Select Category Pill
        function selectCategoryPill(category, element) {
            selectedCategory = category.toLowerCase();

            document.querySelectorAll(".cat-pill").forEach(function(p) {
                p.classList.remove("active");
            });
            if (element) {
                element.classList.add("active");
            }

            applyFilters();
        }

        // Apply Filters
        function applyFilters() {
            const searchVal = document.getElementById("searchInput").value.toLowerCase().trim();
            const scaleVal = document.getElementById("skalaFilter").value.toLowerCase().trim();
            const statusVal = document.getElementById("statusFilter").value.toLowerCase().trim();

            const cards = document.querySelectorAll(".diecast-card");
            const tableRows = document.querySelectorAll(".table-row-item");

            let visibleCount = 0;

            cards.forEach(function(card) {
                const name = card.dataset.name;
                const cat = card.dataset.category;
                const scale = card.dataset.scale.toLowerCase();
                const status = card.dataset.status.toLowerCase();

                const matchesSearch = !searchVal || name.includes(searchVal) || cat.includes(searchVal) || scale.includes(searchVal);
                const matchesCategory = !selectedCategory || cat.includes(selectedCategory);
                const matchesScale = !scaleVal || scale === scaleVal;
                const matchesStatus = !statusVal || status === statusVal;

                if (matchesSearch && matchesCategory && matchesScale && matchesStatus) {
                    card.style.display = "";
                    visibleCount++;
                } else {
                    card.style.display = "none";
                }
            });

            tableRows.forEach(function(row) {
                const name = row.dataset.name;
                const cat = row.dataset.category;
                const scale = row.dataset.scale.toLowerCase();
                const status = row.dataset.status.toLowerCase();

                const matchesSearch = !searchVal || name.includes(searchVal) || cat.includes(searchVal) || scale.includes(searchVal);
                const matchesCategory = !selectedCategory || cat.includes(selectedCategory);
                const matchesScale = !scaleVal || scale === scaleVal;
                const matchesStatus = !statusVal || status === statusVal;

                if (matchesSearch && matchesCategory && matchesScale && matchesStatus) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });

            document.getElementById("visibleCount").innerText = visibleCount;

            const emptyState = document.getElementById("emptyStateBox");
            if (visibleCount === 0) {
                emptyState.style.display = "block";
            } else {
                emptyState.style.display = "none";
            }

            const isFiltered = searchVal || selectedCategory || scaleVal || statusVal;
            document.getElementById("activeFilterBadge").style.display = isFiltered ? "inline" : "none";
        }

        // Apply Sorting
        function applySorting() {
            const sortType = document.getElementById("sortFilter").value;
            const gridContainer = document.getElementById("cardViewContainer");
            const tableBody = document.querySelector("#diecastDataTable tbody");

            const cardElements = Array.from(gridContainer.children);
            const rowElements = Array.from(tableBody.children);

            const sortComparator = function(a, b) {
                const nameA = a.dataset.name;
                const nameB = b.dataset.name;
                const stockA = parseInt(a.dataset.stock, 10);
                const stockB = parseInt(b.dataset.stock, 10);
                const priceA = parseInt(a.dataset.price, 10);
                const priceB = parseInt(b.dataset.price, 10);
                const idA = parseInt(a.dataset.id, 10);
                const idB = parseInt(b.dataset.id, 10);

                if (sortType === "name-asc") return nameA.localeCompare(nameB);
                if (sortType === "name-desc") return nameB.localeCompare(nameA);
                if (sortType === "price-asc") return priceA - priceB;
                if (sortType === "price-desc") return priceB - priceA;
                if (sortType === "stock-desc") return stockB - stockA;
                return idA - idB;
            };

            cardElements.sort(sortComparator);
            rowElements.sort(sortComparator);

            cardElements.forEach(function(card) {
                gridContainer.appendChild(card);
            });
            rowElements.forEach(function(row) {
                tableBody.appendChild(row);
            });
        }

        // Reset Filters
        function resetAllFilters() {
            document.getElementById("searchInput").value = "";
            document.getElementById("skalaFilter").value = "";
            document.getElementById("statusFilter").value = "";
            document.getElementById("sortFilter").value = "id-asc";
            selectedCategory = "";

            document.querySelectorAll(".cat-pill").forEach(function(p, idx) {
                if (idx === 0) p.classList.add("active");
                else p.classList.remove("active");
            });

            applySorting();
            applyFilters();
        }

        // Trigger Detail from button click
        function openDetailFromBtn(btn) {
            const id = btn.getAttribute("data-id");
            if (id) {
                openDetailModal(id);
            }
        }

        // Open Modal
        function openDetailModal(id) {
            const item = diecastData[id];
            if (!item) return;

            document.getElementById("modalDiecastName").innerText = item.name;
            document.getElementById("modalCategoryScale").innerText = "Seri " + item.category + " • Skala " + item.scale;
            document.getElementById("modalPriceDisplay").innerText = item.priceFormatted;
            document.getElementById("modalSpecId").innerText = "#HW-" + String(item.id).padStart(3, "0");
            document.getElementById("modalSpecCategory").innerText = item.category;
            document.getElementById("modalSpecScale").innerText = item.scale;
            document.getElementById("modalSpecStock").innerText = item.stock + " Unit Ready";

            // Set Photo in Modal
            const modalImg = document.getElementById("modalCarImage");
            if (modalImg) {
                modalImg.src = item.image;
                modalImg.alt = item.name;
            }

            // WhatsApp link with prefilled message
            const message = encodeURIComponent(
                "Halo DiecastHub, saya tertarik ingin membeli Hot Wheels:\n\n*" + 
                item.name + "*\nSeri: " + item.category + "\nSkala: " + item.scale + 
                "\nHarga: " + item.priceFormatted + "\n\nApakah unit ini masih ready stock?"
            );
            document.getElementById("modalWaBtn").href = "https://wa.me/6281234567890?text=" + message;

            const overlay = document.getElementById("detailModalOverlay");
            overlay.classList.add("open");
            document.body.style.overflow = "hidden";
        }

        // Close Modal
        function closeDetailModal() {
            const overlay = document.getElementById("detailModalOverlay");
            overlay.classList.remove("open");
            document.body.style.overflow = "auto";
        }

        function handleBackdropClick(event) {
            if (event.target.id === "detailModalOverlay") {
                closeDetailModal();
            }
        }

        document.addEventListener("keydown", function(e) {
            if (e.key === "Escape") {
                closeDetailModal();
            }
        });
    </script>
</body>
</html>
