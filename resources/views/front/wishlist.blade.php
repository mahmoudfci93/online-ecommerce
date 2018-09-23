@extends('layout.inner')

@section('content')

    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <h2>Add Your Wish List</h2>
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            {!! Form::open(['route' => ['store.wishlist',$id], 'method' => 'POST']) !!}
           <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
           </div>
            {{ Form::submit('Add WishList', array('class' => 'btn btn-success')) }}
            {!! Form::close() !!}
        </div>
    </div>
@endsection