@extends('admin.layout.admin')

@section('content')
    <div class="row">
        <h3>Products</h3>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Overview</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Price bef.</th>
                <th>Size</th>
                <th>Available</th>
                <th>Category</th>
                <td>Action</td>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->overview}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->price_before}}</td>
                    <td>{{$product->size}}</td>
                    <td>{{$product->available}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>
                        <form action="{{route('edit.product',$product->id)}}"  method="POST">

                            {{csrf_field()}}
                            <input class="btn btn-info" type="submit" value="Edit">
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
