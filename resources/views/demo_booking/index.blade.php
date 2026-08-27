@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Book a Live BranZo Techno Solution Demo</h2>
    </div>

    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4 col-md-8">
        <form action="{{ route('marketing.book-demo.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label>Company Name</label>
                <input type="text" name="company_name" class="form-control" required placeholder="Enter your company name">
            </div>
            <div class="form-group mb-3">
                <label>Contact Name</label>
                <input type="text" name="name" class="form-control" required placeholder="Enter your full name">
            </div>
            <div class="form-group mb-3">
                <label>Email Address</label>
                <input type="email" name="email" class="form-control" required placeholder="Enter your email">
            </div>
            <div class="form-group mb-3">
                <label>Mobile Number</label>
                <input type="text" name="mobile" class="form-control" required placeholder="Enter mobile number">
            </div>
            <button type="submit" class="btn btn-primary">Request Live Demo</button>
        </form>
    </div>
</div>
@endsection
