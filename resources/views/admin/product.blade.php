@extends('admin.dashboard')

@section('content')
<p>Product</p>
<a href="{{ route('controller_page.product_add') }}" class="btn btn-primary">product add</a>
@endsection