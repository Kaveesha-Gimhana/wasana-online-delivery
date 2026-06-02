@extends('admin.layout')

@section('content')

<!-- STATS CARDS -->
<div class="row g-4">

    <div class="col-md-3">
        <div class="card card-box p-3">
            <h6>Total Users</h6>
            <h3>120</h3>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card card-box p-3">
            <h6>Total Orders</h6>
            <h3>58</h3>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card card-box p-3">
            <h6>Products</h6>
            <h3>34</h3>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card card-box p-3">
            <h6>Revenue</h6>
            <h3>Rs. 85,000</h3>
        </div>
    </div>

</div>

<!-- CHART / TABLE SECTION -->
<div class="row mt-4">

    <div class="col-md-8">
        <div class="card card-box p-3">
            <h6>Recent Orders</h6>

            <table class="table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>User</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>#1001</td>
                        <td>Kaveesha</td>
                        <td><span class="badge bg-success">Completed</span></td>
                    </tr>
                    <tr>
                        <td>#1002</td>
                        <td>John</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-box p-3">
            <h6>Notifications</h6>
            <p>✔ New order received</p>
            <p>✔ New user registered</p>
            <p>✔ Payment confirmed</p>
        </div>
    </div>

</div>

<form method="POST" action="{{ route('admin.logout') }}">
    @csrf

    <button type="submit" class="btn btn-danger">
        Logout
    </button>
</form>

@endsection