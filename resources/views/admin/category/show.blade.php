@extends('admin.layout.admin')
@section('content')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <div class="panel panel-default">
        <div class="panel-heading">{{$category->name}}</div>
        <div class="panel-body">
            @forelse($products as $product)
             <ul>
                 <li>{{$product->name}}</li>
             </ul>
            @empty
                <h4>No products for this category</h4>
            @endforelse
        </div>
    </div>

    {{Form::open(['route'=>['category.destroy',$category->id],'method'=>'POST'])}}
    {{method_field('DELETE')}}
    <input class="btn btn-danger" type="submit" value="Delete">
    {{Form::close()}}

@endsection