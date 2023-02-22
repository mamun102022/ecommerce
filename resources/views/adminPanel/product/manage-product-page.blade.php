@extends('adminPanel.master')

@section('title')
    Dashboard - Home
@endsection

@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Manage Product</h1>

        <div class="card mb-4">
            <div class="card-body">
                <a class="btn btn-success" href="{{route('add.product')}}">Add Product</a>
                <h3>{{session('message')}}</h3>
                .
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Product</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>

                    @php $i=1; @endphp
                    @foreach($products as $product)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->category_name}}</td>
                            <td>{{$product->brand_name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->description}}</td>
                            <td>
                                <img src="{{asset($product->image)}}" alt="" height="50px" width="50px">
                            </td>
                            <td>{{$product->status == 1? 'Published':'Unpublished'}}</td>
                            <td>
                                <a href="{{route('edit.product',['id'=>$product->id])}}" class="btn btn-primary btn-sm">Edit</a>
                                @if($product->status == 1)
                                    <a href="{{route('status',['id'=>$product->id])}}" class="btn btn-warning btn-sm">Unpublished</a>
                                @else()
                                    <a href="{{route('status',['id'=>$product->id])}}" class="btn btn-success btn-sm">Published</a>
                                @endif

                                <form action="{{route('delete.product')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure delete this?')">Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

@endsection
