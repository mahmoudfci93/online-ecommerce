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
            {!! Form::open(['route' => 'product.store', 'method' => 'POST', 'files' => true]) !!}
                    {{csrf_field()}}
            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'Description') }}
                {{ Form::textarea('description', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('overview', 'Overview') }}
                {{ Form::text('overview', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('price', 'Price') }}
                {{ Form::text('price', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('price_before', 'Price Before') }}
                {{ Form::text('price_before', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('size', 'Size') }}
                {{ Form::text('size', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('quantity', 'Quantity') }}
                {{ Form::text('quantity', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('category_id', 'Categories') }}
                {{ Form::select('category_id', $categories, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
            </div>
            <div class="form-group">
                {{ Form::label('available', 'Available') }}
                {{ Form::select('available', [ 'yes' => 'Yes', 'no' => 'No'], null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('images', 'Image') }}
                {{ Form::file('images[]', array('multiple'=>true)) }}
            </div>

            {{ Form::submit('Add Product', array('class' => 'btn btn-success')) }}
            {!! Form::close() !!}

        </div>
    </div>



@endsection