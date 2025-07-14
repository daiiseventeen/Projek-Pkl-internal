@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Admin Dashboard Special</h1>
    <p>Welcome</p>
    <p>You Can Manage Users, Product, And Category</p>
</div>
 <div class="row gx-3">
    <div class="col-lg-4 col-xxl-2 col-6">
    <div class="card text-white bg-primary rounded">
      <div class="card-body p-4">
        <span>
          <i class="ti ti-layout-grid fs-8"></i>
        </span>
        <h3 class="card-title mt-3 mb-0 text-white">{{ $data['totalProducts'] }}</h3>
        <p class="card-text text-white-50 fs-3 fw-normal">
          Total Products
        </p>
      </div>
    </div>
    </div>
    <div class="col-lg-4 col-xxl-2 col-6">
    <div class="card text-white text-bg-success">
      <div class="card-body p-4">
        <span>
          <i class="ti ti-archive fs-8"></i>
        </span>
        <h3 class="card-title mt-3 mb-0 text-white">{{ $data['totalCategories'] }}</h3>
        <p class="card-text text-white-50 fs-3 fw-normal">
          Total Categories
        </p>
      </div>
    </div>
    </div>
    <div class="col-lg-4 col-xxl-2 col-6">
    <div class="card text-white text-bg-warning">
      <div class="card-body p-4">
        <span>
          <i class="ti ti-users fs-8"></i>
        </span>
        <h3 class="card-title mt-3 mb-0 text-white">{{ $data['totalUsers'] }}</h3>
        <p class="card-text text-white-50 fs-3 fw-normal">
          Total Customers
        </p>
      </div>
    </div>
    </div>
    <div class="col-lg-4 col-xxl-2 col-6">
    <div class="card text-white text-bg-danger">
      <div class="card-body p-4">
        <span>
          <i class="ti ti-gift fs-8"></i>
        </span>
        <h3 class="card-title mt-3   mb-0 text-white">15</h3>
        <p class="card-text text-white-50 fs-3 fw-normal">
          Birthday Gifts
        </p>
      </div>
    </div>
    </div>
    </div>
@endsection