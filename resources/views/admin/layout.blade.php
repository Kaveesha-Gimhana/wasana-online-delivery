<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Wasana Bakers</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --primary-orange: #ff5722;
            --dark-sidebar: #111827;
            --hover-bg: #1f2937;
            --body-bg: #f8f9fa;
        }

        /* Viewport eka lock karala high-level scroll hidden karන්න */
        html, body {
            height: 100vh;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: var(--body-bg);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .wrapper {
            display: flex;
            height: 100vh;
            width: 100vw;
        }

        /* Sidebar Viewport Level Fix */
        .sidebar {
            width: 260px;
            height: 100vh;
            background: var(--dark-sidebar);
            color: #fff;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-shrink: 0;
            box-shadow: 4px 0 10px rgba(0, 0, 0, 0.05);
        }

        .sidebar-brand {
            padding: 10px 24px;
            font-size: 1.25rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar-nav {
            margin-top: 15px;
            flex-grow: 1;
        }

        .sidebar a {
            color: #9ca3af;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 24px;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .sidebar a:hover, .sidebar a.active {
            color: #fff;
            background: var(--hover-bg);
            border-left: 4px solid var(--primary-orange);
        }

        .sidebar-footer {
            padding: 20px 24px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logout-btn {
            width: 100%;
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #ef4444;
            padding: 10px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .logout-btn:hover {
            background: #ef4444;
            color: #fff;
            border-color: #ef4444;
        }

        /* Main Section Viewport Grid Layout */
        .main {
            flex-grow: 1;
            height: 100vh;
            display: flex;
            flex-direction: column;
            padding: 25px;
            overflow: hidden; /* Page eka full scroll wenne na */
        }

        /* Top Navigation Bar */
        .topbar {
            background: #fff;
            padding: 15px 30px;
            border-radius: 16px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.03);
            flex-shrink: 0; /* Header compress wenne na */
        }

        .topbar h5 {
            font-weight: 600;
            margin: 0;
            color: #1f2937;
        }

        .admin-badge {
            background-color: #fff4f0;
            color: var(--primary-orange);
            padding: 6px 16px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.85rem;
            border: 1px solid rgba(255, 87, 34, 0.2);
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        /* Dynamic Section flex container wrap */
        .page-content-wrapper {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <div class="sidebar">
            <div>
                <div class="sidebar-brand text-center text-white pb-3">
                    <i class="bi bi-bakery text-warning me-2"></i>Wasana Bakers
                </div>

                <div class="sidebar-nav">
    <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <i class="bi bi-speedometer2"></i> Dashboard
    </a>
    
    <a href="{{ route('admin.product') }}" class="{{ request()->routeIs('admin.product') || request()->routeIs('controller_page.product_add') ? 'active' : '' }}">
        <i class="bi bi-box"></i> Products
    </a>
    
    <a href="{{ route('admin.orders') }}" class="{{ request()->routeIs('admin.orders') ? 'active' : '' }}">
        <i class="bi bi-cart"></i> Orders
    </a>
    
    <a href="{{ route('admin.customers') }}" class="{{ request()->routeIs('admin.customers') ? 'active' : '' }}">
        <i class="bi bi-person-vcard-fill"></i> Customers
    </a>
    
    <a href="{{ route('admin.admin') }}" class="{{ request()->routeIs('admin.admin') ? 'active' : '' }}">
        <i class="bi bi-people"></i> Admin
    </a>
    
    <a href="{{ route('admin.settings') }}" class="{{ request()->routeIs('admin.settings') ? 'active' : '' }}">
        <i class="bi bi-gear"></i> Settings
    </a>
</div>
            </div>

            <div class="sidebar-footer">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="logout-btn">
                        <i class="bi bi-box-arrow-left"></i> Logout
                    </button>
                </form>
            </div>
        </div>

        <div class="main">
            <div class="topbar">
                <h5>Dashboard / Products</h5>
                <div class="d-flex align-items-center gap-3">
                    <button class="btn btn-light position-relative rounded-circle p-2">
                        <i class="bi bi-bell fs-5"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.6rem;">3</span>
                    </button>
                    <div class="admin-badge">
                        <i class="bi bi-shield-check"></i> Admin Panel
                    </div>
                </div>
            </div>

            <div class="page-content-wrapper">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>