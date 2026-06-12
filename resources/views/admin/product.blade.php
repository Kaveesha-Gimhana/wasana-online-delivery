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
        margin-bottom: 15px;
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
        table-layout: fixed;
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
        white-space: nowrap;
    }

    .custom-table td {
        padding: 14px;
        vertical-align: middle;
        color: #374151;
        border-bottom: 1px solid #f3f4f6;
        background-color: #fff;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }

    .custom-table tbody tr:hover td {
        background-color: #fcfdfd;
    }

    /* Action Buttons in Table Row */
    .table-action-btn {
        padding: 6px 10px;
        border-radius: 6px;
        border: 1px solid #e5e7eb;
        background: #fff;
        color: #4b5563;
        transition: all 0.2s;
    }

    .table-action-btn:hover {
        background: #f9fafb;
        border-color: #cbd5e1;
    }

    /* Controls Panel Footer Frame */
    .control-card {
        flex-shrink: 0;
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

    /* --- Modern Popup (Modal) Custom Styles --- */
    .modern-modal .modal-content {
        border: none;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .modern-modal .modal-header {
        border-bottom: 1px solid #f3f4f6;
        background: #fafafa;
        padding: 20px 24px;
    }

    .modern-modal .modal-body {
        padding: 24px;
    }

    .cake-preview-img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        border: 1px solid #e5e7eb;
    }

    .detail-label {
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #9ca3af;
        font-weight: 700;
        margin-bottom: 4px;
    }

    .detail-value {
        color: #1f2937;
        font-weight: 600;
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
                    <div class="input-group">
                        <input type="text" id="tableSearchInput" class="form-control search-input" placeholder="Search product by code...">
                        <button class="btn search-btn" type="button">
                            <i class="bi bi-search"></i> Search
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="table-scroll-container">
            <table class="table custom-table mb-0">
                <thead>
                    <tr>
                        <th scope="col" style="width: 12%;">Img</th>
                        <th scope="col" style="width: 38%;">Code</th>
                        <th scope="col" style="width: 25%;">Price</th>
                        <th scope="col" style="width: 25%; text-align: right; padding-right: 20px;">Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>
                            <div class="product-img-wrapper" style="width: 45px; height: 45px; border-radius: 8px; overflow: hidden; border: 1px solid #e5e7eb;">
                                <img src="{{ asset('uploads/products/' . $product->image) }}" alt="Product Image" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </td>

                        <td>
                            <span class="badge bg-light text-dark border font-monospace px-2 py-1.5" style="font-size: 0.85rem;">
                                {{ $product->product_code }}
                            </span>
                        </td>

                        <td class="fw-bold text-dark">
                            Rs. {{ number_format($product->price, 2) }}
                        </td>

                        <td>
                            <div class="d-flex gap-2 justify-content-end" style="padding-right: 6px;">
                                <button class="btn table-action-btn text-info view-cake-btn"
                                    title="View"
                                    data-bs-toggle="modal"
                                    data-bs-target="#cakeViewModal"
                                    data-code="{{ $product->product_code }}"
                                    data-price="Rs. {{ number_format($product->price, 2) }}"
                                    data-img="{{ asset('uploads/products/' . $product->image) }}"
                                    data-desc="{{ $product->description ?? 'No description available for this cake.' }}">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button class="btn table-action-btn text-warning" title="Edit"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn table-action-btn text-danger" title="Delete"><i class="bi bi-trash3"></i></button>
                            </div>
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
                <i class="bi bi-plus-circle"></i> Add Cake
            </a>
            <a href="#" class="btn btn-outline-custom"><i class="bi bi-pencil-square text-warning"></i> Edit Product</a>
            <a href="#" class="btn btn-outline-custom"><i class="bi bi-trash3 text-danger"></i> Delete Product</a>
            <a href="#" class="btn btn-outline-custom"><i class="bi bi-eye text-info"></i> View Details</a>
        </div>
    </div>
</div>

<div class="modal fade modern-modal" id="cakeViewModal" tabindex="-1" aria-labelledby="cakeViewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between">
                <h5 class="modal-title font-weight-bold" id="cakeViewModalLabel" style="color: #1f2937; font-weight: 700;">
                    <i class="bi bi-cake2 text-warning me-2"></i> Cake Details
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-4">
                    <div class="col-md-5">
                        <img id="modalCakeImg" src="" alt="Cake Preview" class="cake-preview-img">
                    </div>
                    <div class="col-md-7 d-flex flex-column justify-content-between">
                        <div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="detail-label">Cake Code</div>
                                    <div class="detail-value">
                                        <span id="modalCakeCode" class="badge bg-light text-dark border font-monospace px-2 py-1.5" style="font-size: 0.9rem;"></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="detail-label">Price</div>
                                    <div id="modalCakePrice" class="detail-value text-success fs-5 fw-bold"></div>
                                </div>
                            </div>

                            <hr class="my-3" style="border-color: #f3f4f6;">

                            <div class="mb-3">
                                <div class="detail-label">Description / Ingredients</div>
                                <p id="modalCakeDesc" class="text-muted" style="font-size: 0.92rem; line-height: 1.6; white-space: normal;"></p>
                            </div>
                        </div>

                        <div class="text-end mt-4">
                            <button type="button" class="btn btn-outline-custom px-4" data-bs-dismiss="modal" style="border-radius: 8px;">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const viewButtons = document.querySelectorAll('.view-cake-btn');

        viewButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Button එකෙන් data ටික ගන්නවා
                const code = this.getAttribute('data-code');
                const price = this.getAttribute('data-price');
                const img = this.getAttribute('data-img');
                const desc = this.getAttribute('data-desc');

                // Popup (Modal) එකේ elements වලට data ටික inject කරනවා
                document.getElementById('modalCakeCode').innerText = code;
                document.getElementById('modalCakePrice').innerText = price;
                document.getElementById('modalCakeImg').setAttribute('src', img);
                document.getElementById('modalCakeDesc').innerText = desc;
            });
        });
        const searchInput = document.getElementById('tableSearchInput');

        if (searchInput) {
            searchInput.addEventListener('keyup', function() {
                const filter = this.value.toLowerCase();
                const rows = document.querySelectorAll('.custom-table tbody tr');

                rows.forEach(row => {
                    const codeText = row.cells[1] ? row.cells[1].textContent.toLowerCase() : '';

                    if (codeText.includes(filter)) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                });
            });
        }
    });
</script>
@endsection