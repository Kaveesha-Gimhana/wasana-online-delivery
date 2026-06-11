@extends('admin.dashboard')

@section('content')
<style>
    /* Full height content frame system */
    .product-layout-container {
        display: flex;
        flex-direction: column;
        height: 100%;
        overflow: hidden;
    }

    .content-card {
        background: #fff;
        border: none;
        border-radius: 16px;
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.03);
        padding: 20px;
    }

    /* Main Table Card dynamic flex ratio rule */
    .table-card {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        margin-bottom: 15px; /* Action buttons spacing */
    }

    .search-input {
        border-radius: 8px 0 0 8px;
        border: 1px solid #e5e7eb;
        padding: 10px 16px;
    }

    .search-input:focus {
        border-color: #ff5722;
        box-shadow: 0 0 0 3px rgba(255, 87, 34, 0.15);
    }

    .search-btn {
        background-color: #ff5722;
        color: #fff;
        border: none;
        border-radius: 0 8px 8px 0;
        padding: 0 20px;
        transition: background 0.2s ease;
    }

    .search-btn:hover {
        background-color: #e04819;
        color: #fff;
    }

    /* Table container inside flex structure takes leftover height */
    .table-scroll-container {
        flex-grow: 1;
        overflow-y: auto;
        overflow-x: auto;
        border-radius: 8px;
        border: 1px solid #f3f4f6;
    }

    /* Modern Minimalist Scrollbar Custom Styling */
    .table-scroll-container::-webkit-scrollbar {
        width: 6px;
        height: 6px;
    }

    .table-scroll-container::-webkit-scrollbar-track {
        background: #f9fafb;
        border-radius: 8px;
    }

    .table-scroll-container::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 8px;
    }

    .table-scroll-container::-webkit-scrollbar-thumb:hover {
        background: #94a3b8;
    }

    /* Table Grid Rules */
    .custom-table {
        margin-bottom: 0;
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
    }

    .custom-table th {
        position: sticky;
        top: 0;
        background-color: #f9fafb;
        color: #4b5563;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.5px;
        padding: 14px;
        border-bottom: 2px solid #f3f4f6;
        z-index: 10;
    }

    .custom-table td {
        padding: 12px 14px;
        vertical-align: middle;
        color: #374151;
        border-bottom: 1px solid #f3f4f6;
        background-color: #fff;
    }

    .custom-table tbody tr:hover td {
        background-color: #fcfdfd;
    }

    .product-img-placeholder {
        width: 40px;
        height: 40px;
        background: #f3f4f6;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #9ca3af;
        border: 1px dashed #d1d5db;
    }

    /* Controls Panel Footer Frame */
    .control-card {
        flex-shrink: 0; /* Action panel elements custom locked size */
        padding: 15px 20px;
    }

    .btn-action-group .btn {
        padding: 10px 18px;
        font-weight: 600;
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.2s ease;
    }

    .btn-orange-primary {
        background-color: #ff5722;
        color: white;
        border: none;
    }

    .btn-orange-primary:hover {
        background-color: #e04819;
        color: white;
    }

    .btn-outline-custom {
        border: 1px solid #e5e7eb;
        background: #fff;
        color: #4b5563;
    }

    .btn-outline-custom:hover {
        background: #f9fafb;
        color: #1f2937;
        border-color: #d1d5db;
    }
</style>

<div class="product-layout-container">
    <div class="content-card table-card">
        <div class="row align-items-center mb-3 flex-shrink-0">
            <div class="col-md-6">
                <h5 class="mb-0 font-weight-bold" style="color: #1f2937;">Product Catalog Management</h5>
            </div>
            <div class="col-md-6">
                <form action="#" method="GET" class="input-group">
                    <input type="text" class="form-control search-input" placeholder="Search product by code or description...">
                    <button class="btn search-btn" type="submit">
                        <i class="bi bi-search"></i> Search
                    </button>
                </form>
            </div>
        </div>

        <div class="table-scroll-container">
            <table class="table custom-table mb-0">
                <thead>
                    <tr>
                        <th scope="col" style="width: 100px;">Img</th>
                        <th scope="col">Code</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>
                            <div class="product-img-wrapper"
                                style="width: 45px; height: 45px; border-radius: 8px; overflow: hidden; border: 1px solid #e5e7eb;">

                                <img src="{{ asset('uploads/products/' . $product->image) }}"
                                    alt="Product Image"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </td>

                        <td>
                            <span class="badge bg-light text-dark border font-monospace">
                                {{ $product->product_code }}
                            </span>
                        </td>

                        <td class="fw-bold text-dark">
                            Rs. {{ number_format($product->price, 2) }}
                        </td>

                        <td class="text-muted">
                            {{ $product->description }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="content-card control-card">
        <h6 class="text-uppercase tracking-wider text-muted mb-2" style="font-size: 0.72rem; font-weight: 700;">Product Management Controls</h6>
        <div class="d-flex flex-wrap gap-3 btn-action-group">
            
            <a href="{{ route('controller_page.product_add') }}" class="btn btn-orange-primary shadow-sm">
                <i class="bi bi-plus-circle"></i> Add Product
            </a>

            <a href="#" class="btn btn-outline-custom">
                <i class="bi bi-pencil-square text-warning"></i> Edit Product
            </a>

            <a href="#" class="btn btn-outline-custom">
                <i class="bi bi-trash3 text-danger"></i> Delete Product
            </a>

            <a href="#" class="btn btn-outline-custom">
                <i class="bi bi-eye text-info"></i> View Details
            </a>

        </div>
    </div>
</div>
@endsection