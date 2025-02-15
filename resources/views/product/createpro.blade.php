@extends('welcome')

@section('title', 'Create product')

@section('styles')

@endsection

@section('content')
    <div class="main-content">
        <div class="content-wrapper">
            <h3 class="title m-2 text-uppercase">Create Product</h3>
            <div class="container-fluid"><!--Statistics cards Starts-->
                <div class="row">
                    <div class="modal-body">
                        <div class="card-body">
                            <form method="post" action="{{ route('products.store') }}">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-8">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <label for="inputFirstName">Product name</label>
                                            <input class="form-control" id="inputFirstName" name="name" type="text"
                                                placeholder="Enter your product name" />
                                        </div>
                                    </div>
                                    <div class="col-md-8 mt-3">
                                        <div class="form-floating">
                                            <label for="inputLastName">Product price</label>
                                            <input class="form-control" id="inputLastName" name="price" type="number"
                                                placeholder="Enter your product price" />
                                        </div>
                                    </div>
                                    <div class="col-md-8 mt-3">
                                        <div class="form-floating">
                                            <label for="inputLastName">Product quantity</label>
                                            <input class="form-control" id="inputLastName" name="quantity" type="number"
                                                placeholder="Enter your product price" />
                                        </div>
                                    </div>
                                    <div class="col-md-8 mt-3">
                                        <div class="form-floating">
                                            <label for="inputLastName">Product quantity min</label>
                                            <input class="form-control" id="inputLastName" name="quantity_min" type="number"
                                                placeholder="Enter your product price" />
                                        </div>
                                    </div>
                                    <div class="col-md-8 mt-3">
                                        <div class="form-floating">
                                            <label for="inputLastName">Category product</label>
                                            <select name="category_id" class="form-control" id="inputLastName">
                                                <option value="">Select category</option>
                                                @foreach ( $cat as $category ) 
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-8 mt-3">
                                        <div class="form-floating">
                                            <label for="inputLastName">unite product</label>
                                            <select name="unit_id" class="form-control" id="inputLastName">
                                                <option value="">Select unite</option>
                                                @foreach ( $unit as $unite ) 
                                                <option value="{{ $unite->id }}">{{ $unite->name }}</option>
                                                @endforeach
                                            </select>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <label for="inputEmail">Description</label><br>
                                    <textarea name="description" id="description" cols="30" rows="5" placeholder="Description"></textarea>
                                    {{-- <input class="form-control" id="inputEmail" type="email"
                                        placeholder="name@example.com" /> --}}
                                </div>
                                {{-- <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputPassword" type="password"
                                                placeholder="Create a password" />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputPasswordConfirm" type="password"
                                                placeholder="Confirm password" />
                                            <label for="inputPasswordConfirm">Confirm Password</label>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="mt-4 mb-0">
                                    <button type="submit" class="btn btn-primary btn-block">Create</button>
                                    {{-- <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html">Create</a></div> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

