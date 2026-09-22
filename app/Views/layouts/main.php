<?php helper('url'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title ?? 'POS Foundations') ?></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

        :root {
            color-scheme: light;
            --ink: #2d3748;
            --ink-light: #4a5568;
            --muted: #718096;
            --bg-color: #e2e8f0;
            --shadow-light: #ffffff;
            --shadow-dark: #cbd5e0;
            --brand: #3182ce;
            --brand-gradient: linear-gradient(135deg, #3182ce, #805ad5);
            --accent: #e53e3e;
            --radius-large: 24px;
            --radius-small: 12px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            color: var(--ink);
            background: var(--bg-color);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        .site-header {
            background: var(--bg-color);
            box-shadow: 0 10px 15px -3px rgba(203, 213, 224, 0.4), 0 4px 6px -2px rgba(203, 213, 224, 0.2);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            max-width: 1120px;
            margin: 0 auto;
            padding: 20px 24px;
        }

        .brand {
            font-size: 1.4rem;
            font-weight: 800;
            text-decoration: none;
            background: var(--brand-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -0.5px;
            text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.5);
        }

        .nav-links {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .nav-links a {
            display: inline-flex;
            align-items: center;
            min-height: 44px;
            padding: 8px 20px;
            color: var(--muted);
            border-radius: var(--radius-small);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 5px 5px 10px var(--shadow-dark), -5px -5px 10px var(--shadow-light);
            background: var(--bg-color);
        }

        .nav-links a:hover {
            color: var(--brand);
            transform: translateY(-2px);
            box-shadow: 7px 7px 15px var(--shadow-dark), -7px -7px 15px var(--shadow-light);
        }

        .nav-links a.active {
            color: var(--brand);
            box-shadow: inset 4px 4px 8px var(--shadow-dark), inset -4px -4px 8px var(--shadow-light);
            transform: none;
        }

        main {
            max-width: 1120px;
            margin: 0 auto;
            padding: 56px 24px 80px;
            animation: fadeIn 0.5s ease-out forwards;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .hero {
            display: grid;
            gap: 24px;
            padding: 56px;
            background: var(--bg-color);
            border-radius: var(--radius-large);
            box-shadow: 10px 10px 20px var(--shadow-dark), -10px -10px 20px var(--shadow-light);
            margin-bottom: 32px;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; height: 4px;
            background: var(--brand-gradient);
            opacity: 0.8;
        }

        .eyebrow {
            margin: 0;
            color: var(--brand);
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        h1, h2, h3, p {
            margin-top: 0;
        }

        h1 {
            margin-bottom: 16px;
            font-size: clamp(2.5rem, 5vw, 4rem);
            line-height: 1.1;
            font-weight: 800;
            color: var(--ink);
            letter-spacing: -1.5px;
        }

        h2 {
            margin-bottom: 16px;
            font-size: 1.85rem;
            font-weight: 700;
            color: var(--ink);
            letter-spacing: -0.5px;
        }

        .lead {
            max-width: 760px;
            margin-bottom: 0;
            color: var(--ink-light);
            font-size: 1.2rem;
            font-weight: 500;
            line-height: 1.7;
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            margin-top: 24px;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 50px;
            padding: 12px 28px;
            color: var(--brand);
            background: var(--bg-color);
            border-radius: var(--radius-small);
            font-weight: 700;
            font-size: 0.95rem;
            text-decoration: none;
            box-shadow: 6px 6px 12px var(--shadow-dark), -6px -6px 12px var(--shadow-light);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            letter-spacing: 0.5px;
        }
        
        .button.primary {
            background: var(--bg-color);
            position: relative;
        }
        
        .button.primary::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: var(--radius-small);
            box-shadow: inset 2px 2px 4px var(--shadow-light), inset -2px -2px 4px var(--shadow-dark);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .button:hover {
            transform: translateY(-2px);
            box-shadow: 8px 8px 16px var(--shadow-dark), -8px -8px 16px var(--shadow-light);
            color: #805ad5;
        }
        
        .button:active {
            transform: translateY(0);
            box-shadow: inset 4px 4px 8px var(--shadow-dark), inset -4px -4px 8px var(--shadow-light);
        }
        .button:active::after {
            opacity: 1;
        }

        .button.secondary {
            color: var(--muted);
        }
        .button.secondary:hover {
            color: var(--ink);
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 32px;
            margin-top: 48px;
        }

        .card {
            padding: 40px 32px;
            background: var(--bg-color);
            border-radius: var(--radius-large);
            box-shadow: 9px 9px 16px var(--shadow-dark), -9px -9px 16px var(--shadow-light);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 15px 15px 30px var(--shadow-dark), -15px -15px 30px var(--shadow-light);
        }

        .card h3 {
            font-size: 1.4rem;
            margin-bottom: 4px;
            color: var(--ink);
            letter-spacing: -0.3px;
        }

        .card p {
            margin-bottom: 0;
            color: var(--ink-light);
            font-size: 1.05rem;
            line-height: 1.6;
        }

        .section-header {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 24px;
            margin-bottom: 40px;
            padding-bottom: 16px;
            border-bottom: 2px solid rgba(255, 255, 255, 0.4);
        }

        .section-header h2 {
            margin-bottom: 8px;
            font-size: 2.2rem;
            letter-spacing: -1px;
        }

        .section-header p {
            max-width: 650px;
            margin-bottom: 0;
            color: var(--ink-light);
            font-size: 1.1rem;
        }

        .table-wrap {
            overflow-x: auto;
            background: var(--bg-color);
            border-radius: var(--radius-large);
            box-shadow: 10px 10px 20px var(--shadow-dark), -10px -10px 20px var(--shadow-light);
            padding: 8px; 
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            min-width: 720px;
        }
        
        thead {
            box-shadow: inset 4px 4px 8px rgba(203, 213, 224, 0.5), inset -4px -4px 8px rgba(255,255,255, 0.8);
            border-radius: var(--radius-small);
        }

        th, td {
            padding: 20px 24px;
            text-align: left;
        }

        th {
            color: var(--muted);
            font-weight: 700;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1.2px;
        }
        
        th:first-child { border-top-left-radius: var(--radius-small); border-bottom-left-radius: var(--radius-small); }
        th:last-child { border-top-right-radius: var(--radius-small); border-bottom-right-radius: var(--radius-small); }

        tbody tr {
            transition: all 0.2s ease;
            position: relative;
        }

        tbody tr:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: scale(1.002);
            z-index: 10;
            box-shadow: 0 4px 10px rgba(203, 213, 224, 0.4);
            border-radius: var(--radius-small);
        }
        
        tbody tr:hover td:first-child { border-top-left-radius: var(--radius-small); border-bottom-left-radius: var(--radius-small); }
        tbody tr:hover td:last-child { border-top-right-radius: var(--radius-small); border-bottom-right-radius: var(--radius-small); }

        td {
            color: var(--ink);
            font-weight: 500;
            border-bottom: 2px solid rgba(255, 255, 255, 0.4);
        }
        
        tr:last-child td {
            border-bottom: 0;
        }

        .tag {
            display: inline-flex;
            align-items: center;
            min-height: 28px;
            padding: 4px 14px;
            color: var(--brand);
            background: var(--bg-color);
            border-radius: 999px;
            font-size: 0.75rem;
            font-weight: 700;
            box-shadow: inset 3px 3px 6px var(--shadow-dark), inset -3px -3px 6px var(--shadow-light);
            text-transform: uppercase;
            letter-spacing: 0.8px;
        }

        .site-footer {
            max-width: 1120px;
            margin: 0 auto;
            padding: 40px 24px;
            color: var(--muted);
            font-size: 0.95rem;
            text-align: center;
            font-weight: 500;
            border-top: 2px solid rgba(255, 255, 255, 0.4);
            margin-top: 24px;
        }

        @media (max-width: 768px) {
            .nav {
                flex-direction: column;
                gap: 20px;
                padding: 24px;
            }
            .hero {
                padding: 40px 24px;
            }
            .section-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
            }
            h1 {
                font-size: 2.2rem;
            }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <nav class="nav" aria-label="Main navigation">
            <a class="brand" href="<?= site_url('/') ?>">POS Foundations</a>
            <ul class="nav-links">
                <li><a class="<?= ($active ?? '') === 'home' ? 'active' : '' ?>" href="<?= site_url('/') ?>" <?= ($active ?? '') === 'home' ? 'aria-current="page"' : '' ?>>Home</a></li>
                <li><a class="<?= ($active ?? '') === 'about' ? 'active' : '' ?>" href="<?= site_url('about') ?>" <?= ($active ?? '') === 'about' ? 'aria-current="page"' : '' ?>>About</a></li>
                <li><a class="<?= ($active ?? '') === 'customers' ? 'active' : '' ?>" href="<?= site_url('customers') ?>" <?= ($active ?? '') === 'customers' ? 'aria-current="page"' : '' ?>>Customers</a></li>
                <li><a class="<?= ($active ?? '') === 'users' ? 'active' : '' ?>" href="<?= site_url('users') ?>" <?= ($active ?? '') === 'users' ? 'aria-current="page"' : '' ?>>Users</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="site-footer">
        IT0049 Technical Formative Assessment 1 - CodeIgniter POS Foundations
    </footer>
</body>
</html>
