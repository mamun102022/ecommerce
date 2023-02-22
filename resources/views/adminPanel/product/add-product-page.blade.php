@extends('adminPanel.master')

@section('title')
    Add Product
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Product</h3></div>
                    <div class="card-body">
                        <form action="{{route('new.product')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-floating mb-3">
                                <input class="form-control" name="name" type="text" placeholder="Product Name"/>
                                <label>Product Name</label>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="category_name" type="text"
                                               placeholder="Category"/>
                                        <label>Category</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" name="brand_name" type="text" placeholder="Brand"/>
                                        <label>Brand</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" name="price" type="text" placeholder="Product Price"/>
                                <label>Product Price</label>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="description" placeholder="Description"></textarea>
                                <label>Description</label>
                            </div>

                            <div class="form mb-3">
                                <input type="file" class="form-control" name="image" placeholder="image"/>
                            </div>

                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
