<meta name="viewport" content="width=device-width, initial-scale=1">

@extends('admin.layout.admin')

@section('content')
    <div class="row">
        <h3>Products</h3>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Available</th>
                <th>Category</th>
                <th>Delete</th>
                <th>View</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->available}}</td>
                    @if(!empty($product->category))
                    <td>{{$product->category->name}}</td>
                    @else
                    <td> No Category</td>
                    @endif
                    <td>
                        <form action="{{route('product.destroy',$product->id)}}"  method="POST">

                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input class="btn btn-danger" type="submit" value="Delete">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('view.product',$product->id)}}"  method="POST">

                            {{csrf_field()}}
                            <input class="btn btn-warning" type="submit" value="view">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
