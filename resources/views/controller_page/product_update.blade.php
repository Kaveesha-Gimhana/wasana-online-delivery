<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-orange: #ff6b35;
            --bg-dark-slate: rgba(15, 23, 42, 0.95);
            --bg-card: rgba(30, 41, 59, 0.7);
            --text-light: #f8fafc;
            --text-muted: #94a3b8;
        }

        body {
            background-color: #0f172a;
            color: var(--text-light);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .form-container {
            background-color: var(--bg-dark-slate);
            border: 1px solid rgba(255, 107, 53, 0.2);
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            max-width: 800px;
            width: 100%;
        }

        .form-header {
            background: linear-gradient(90deg, rgba(255, 107, 53, 0.1) 0%, rgba(15, 23, 42, 0) 100%);
            border-bottom: 1px solid rgba(255, 107, 53, 0.1);
            padding: 20px 25px;
        }

        .form-header h2 {
            color: var(--text-light);
            font-weight: 600;
            margin: 0;
            font-size: 1.5rem;
            letter-spacing: 0.5px;
        }

        .form-body {
            padding: 30px;
        }

        /* Image Upload Box Styles */
        .image-upload-wrapper {
            border: 2px dashed rgba(255, 107, 53, 0.4);
            border-radius: 12px;
            background-color: rgba(255, 107, 53, 0.02);
            min-height: 160px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .image-upload-wrapper:hover {
            border-color: var(--primary-orange);
            background-color: rgba(255, 107, 53, 0.05);
        }

        .image-upload-wrapper i {
            font-size: 2.5rem;
            color: var(--primary-orange);
            margin-bottom: 10px;
        }

        .image-upload-wrapper p {
            margin: 0;
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        #imagePreview {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none;
        }

        /* Input Controls Styles */
        .form-label {
            color: var(--text-muted);
            font-weight: 500;
            font-size: 0.9rem;
            margin-bottom: 8px;
        }

        .form-control {
            background-color: rgba(30, 41, 59, 0.5);
            border: 1px solid rgba(148, 163, 184, 0.2);
            color: var(--text-light);
            padding: 12px 15px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .form-control::placeholder {
            color: #929292bf !important;
        }

        .form-control:focus {
            background-color: rgba(30, 41, 59, 0.8);
            border-color: var(--primary-orange);
            box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.25);
            color: var(--text-light);
        }

        /* Checkbox Styles */
        .category-title {
            color: var(--text-muted);
            font-weight: 500;
            font-size: 0.9rem;
            margin-bottom: 12px;
        }

        .form-check-input {
            background-color: rgba(30, 41, 59, 0.5);
            border: 1px solid rgba(148, 163, 184, 0.4);
            cursor: pointer;
        }

        .form-check-input:checked {
            background-color: var(--primary-orange);
            border-color: var(--primary-orange);
        }

        .form-check-label {
            color: var(--text-light);
            cursor: pointer;
            font-size: 0.95rem;
        }

        /* Button Styles */
        .btn-custom-save {
            background-color: var(--primary-orange);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-custom-save:hover {
            background-color: #e05626;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 53, 0.4);
            color: white;
        }

        .btn-custom-clear {
            background-color: transparent;
            color: var(--text-muted);
            border: 1px solid rgba(148, 163, 184, 0.3);
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-custom-clear:hover {
            background-color: rgba(148, 163, 184, 0.1);
            color: var(--text-light);
            border-color: rgba(148, 163, 184, 0.6);
        }

        .btn-custom-close {
            background-color: rgba(239, 68, 68, 0.1);
            color: #ef4444;
            border: 1px solid rgba(239, 68, 68, 0.2);
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            height: 100%;
        }

        .btn-custom-close:hover {
            background-color: #ef4444;
            color: white;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <div class="form-header d-flex justify-content-between align-items-center">
            <h2><i class="fa-solid fa-box-open me-2" style="color: var(--primary-orange);"></i>Update Products</h2>
        </div>

        <form action="{{ route('product.store') }}" method="post" id="productForm" class="form-body" enctype="multipart/form-data">
            @csrf
            <div class="row g-4">

                <div class="col-md-4">
                    <div class="d-flex flex-column h-100 justify-content-between gap-3">
                        <label class="form-label d-block mb-0">Action</label>
                        <button type="button" class="btn btn-custom-close w-100 py-3" id="clearImageBtn">
                            <i class="fa-solid fa-circle-xmark"></i> Close / Reset Image
                        </button>
                    </div>
                </div>

                <div class="col-md-8">
                    <label class="form-label">Product Image</label>
                    <div class="image-upload-wrapper" onclick="document.getElementById('imageInput').click()">
                        <i class="fa-regular fa-images"></i>
                        <p id="uploadText">Click here to upload product image</p>
                        <img id="imagePreview" alt="Preview">
                        <input type="file"
                            name="image"
                            id="imageInput"
                            accept="image/*"
                            class="d-none">
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="productCode" class="form-label">Product Code</label>
                    <input type="text" name="product_code" class="form-control" id="productCode" placeholder="Enter product code" required>
                </div>

                <div class="col-md-6">
                    <label for="productPrice" class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" id="productPrice" placeholder="Enter price" required>
                </div>

                <div class="col-md-7">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="6" placeholder="Enter product description..."></textarea>
                </div>

                <div class="col-md-5">
                    <span class="category-title d-block">Category</span>
                    <!-- <div class="row g-2">
                    <div class="col-6">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="catAnniversary">
                            <label class="form-check-label" mapping="catAnniversary">Anniversary</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="catBirthday">
                            <label class="form-check-label" for="catBirthday">Birthday</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="catCake">
                            <label class="form-check-label" for="catCake">Cake</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="catChristmas">
                            <label class="form-check-label" for="catChristmas">Christmas</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="catNewYear">
                            <label class="form-check-label" for="catNewYear">New Year</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="catOtherIsing">
                            <label class="form-check-label" for="catOtherIsing">Other Ising</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="catPrChemh">
                            <label class="form-check-label" for="catPrChemh">Pr.chemh</label>
                        </div>
                    </div>
                </div> -->
                    <select class="form-control" name="category">
                        <option value="Anniversary">Anniversary</option>
                        <option value="Birthday">Birthday</option>
                        <option value="Cake">Cake</option>
                        <option value="Christmas">Christmas</option>
                        <option value="New Year">New Year</option>
                        <option value="Parchment ">Parchment</option>
                        <option value="Other Icing Cake">Other Ising Cake</option>
                    </select>
                </div>

                <div class="col-12 mt-4 pt-2 border-top border-secondary border-opacity-25 d-flex gap-3 justify-content-start">
                    <button type="submit" class="btn btn-custom-save">
                        <i class="fa-solid fa-floppy-disk me-2"></i>Save Product
                    </button>
                    <button type="button" class="btn btn-custom-clear" id="clearFormBtn">
                        <i class="fa-solid fa-broom me-2"></i>Clear
                    </button>
                </div>

            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const imageInput = document.getElementById('imageInput');
        const imagePreview = document.getElementById('imagePreview');
        const uploadText = document.getElementById('uploadText');
        const clearImageBtn = document.getElementById('clearImageBtn');
        const clearFormBtn = document.getElementById('clearFormBtn');
        const productForm = document.getElementById('productForm');

        // Image Upload Preview Logic
        imageInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.addEventListener('load', function() {
                    imagePreview.setAttribute('src', this.result);
                    imagePreview.style.display = 'block';
                    uploadText.style.display = 'none';
                });
                reader.readAsDataURL(file);
            }
        });

        // Reset Image Only
        clearImageBtn.addEventListener('click', function() {
            imageInput.value = '';
            imagePreview.style.display = 'none';
            imagePreview.setAttribute('src', '');
            uploadText.style.display = 'block';
        });

        // Clear Full Form
        clearFormBtn.addEventListener('click', function() {
            productForm.reset();
            imageInput.value = '';
            imagePreview.style.display = 'none';
            imagePreview.setAttribute('src', '');
            uploadText.style.display = 'block';
        });

        // Form Submit Event (Prevent actual reload for preview)
        
    </script>

</body>

</html>