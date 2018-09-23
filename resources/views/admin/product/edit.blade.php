@extends('admin.layout.admin')

@section('content')

    <h3>Add Product</h3>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            {!! Form::open(['route' => ['product.update',$products->id], 'method' => 'PATCH']) !!}
                {{--{{csrf_field()}}--}}
                {{--{{method_field('PATCH')}}--}}
            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::textarea('name',$products->name, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'Description') }}
                {{ Form::text('description',$products->description, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('overview', 'Overview') }}
                {{ Form::text('overview',$products->overview, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('price', 'Price') }}
                {{ Form::text('price',$products->price, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('price_before', 'Price Before') }}
                {{ Form::text('price_before',$products->price_before, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('size', 'Size') }}
                {{ Form::text('size',$products->size, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('quantity', 'Quantity') }}
                {{ Form::text('quantity',$products->quantity, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('category_id', 'Categories') }}
                {{ Form::select('category_id', $categories,$category, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('available', 'Available') }}
                {{ Form::select('available', [ 'yes' => 'Yes', 'no' => 'No'], null, ['class' => 'form-control']) }}
            </div>


            {{ Form::submit('Update Product', array('class' => 'btn btn-success')) }}
            {!! Form::close() !!}

        </div>
    </div>



@endsection