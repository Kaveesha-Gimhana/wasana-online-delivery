<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel | Wasana Bakers</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }

        /* Sidebar */
        .sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            background: #111827;
            color: #fff;
            padding-top: 20px;
        }

        .sidebar a {
            color: #cbd5e1;
            display: block;
            padding: 12px 20px;
            text-decoration: none;
        }

        .sidebar a:hover {
            border-left: 2px solid #ff5722;
            background: #1f2937;
            color: #fff;
        }

        /* Main */
        .main {
            margin-left: 260px;
            padding: 20px;
        }

        /* Cards */
        .card-box {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }

        .topbar {
            background: #fff;
            padding: 15px;
            border-radius: 12px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h4 class="text-center mb-4"> Admin Panel</h4>

    <a href="{{ route('admin.dashboard') }}"><i class="bi bi-speedometer2"></i> Dashboard</a>
    <a href="{{ route('admin.product') }}"><i class="bi bi-box"></i> Products</a>
    <a href="{{ route('admin.orders') }}"><i class="bi bi-cart"></i> Orders</a>
    <a href="{{ route('admin.customers') }}"><i class="bi bi-person-vcard-fill"></i> Customers</a>
    <a href="{{ route('admin.admin') }}"><i class="bi bi-people"></i> Admin</a>
    <a href="{{ route('admin.settings') }}"><i class="bi bi-gear"></i> Settings</a>
    <a href=""><i class="bi bi-box-arrow-in-right"></i>Logout</a>
    <form method="POST" action="{{ route('admin.logout') }}">
    @csrf

    <button type="submit" class="btn logout-btn">
        Logout
    </button>
</form>
</div>

<!-- MAIN CONTENT -->
<div class="main">

    <!-- TOP BAR -->
    <div class="topbar">
        <h5>Dashboard</h5>

        <div>
            <i class="bi bi-bell me-3"></i>
            <span class="badge bg-dark">Admin</span>
        </div>
    </div>

    @yield('content')
</div>

</body>
</html>