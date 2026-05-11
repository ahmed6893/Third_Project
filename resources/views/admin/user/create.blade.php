@extends('admin.master')
@section('body')

    <main class="main-content-wrapper">
        <div class="container">
            <div class="row mb-8">
                <div class="col-md-12">
                    <div>
                        <h2>Create Customer</h2>
                        <!-- breacrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Create</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    <div class="card shadow border-0">
                        <form action="{{route('new.user')}}" method="POST">
                            @csrf
                            <div class="card-body d-flex flex-column gap-8 p-7">
                            <div class="d-flex flex-column flex-md-row align-items-center mb-4 file-input-wrapper gap-2">
                                <div>
                                    <img class="image avatar avatar-lg rounded-3" src="../assets/images/docs/placeholder-img.jpg" alt="Image" />
                                </div>

                                <div class="file-upload btn btn-light ms-md-4">
                                    <input type="file" name="image" class="file-input opacity-0" />
                                    Upload Photo
                                </div>

                                <span class="ms-2">JPG, GIF or PNG. 1MB Max.</span>
                            </div>
                            <div class="d-flex flex-column gap-4">
                                <h3 class="mb-0 h6">User Information</h3>
                                <div class="row g-3 needs-validation" >
                                    <div class="col-lg-6 col-12">
                                        <div>
                                            <!-- input -->
                                            <label for="creatCustomerName" class="form-label" >
                                                Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="creatCustomerName" name="name" placeholder="Customer Name" required />
                                            <div class="invalid-feedback">Please enter User name</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div>
                                            <!-- input -->
                                            <label for="creatCustomerEmail" class="form-label">
                                                Email
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="email" class="form-control" id="creatCustomerEmail" name="email" placeholder="Email Address" required />
                                            <div class="invalid-feedback">Please enter email</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col-12 mt-3">
                                            <div class="d-flex flex-column flex-md-row gap-2">
                                                <button class="btn btn-primary" type="submit">Create New User</button>
                                                <button class="btn btn-secondary" type="submit">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
