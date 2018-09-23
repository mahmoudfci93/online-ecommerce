@extends('layout.inner')

@section('content')
    <div class="men">
        <div class="container">
            <div class="row">
               <div class="small-5 small-centered columns">
                  <h3>Shipping Info.</h3>

                   @if($errors->any())
                       <div class="alert alert-danger">
                           @foreach($errors->all() as $error)
                               <p>{{ $error }}</p>
                           @endforeach
                       </div>
                   @endif
                    {!! Form::open(['route' => 'address.store', 'method' => 'post']) !!}

                    <div class="form-group">
                        {{ Form::label('addressLine', 'Address Line') }}
                        {{ Form::text('addressLine', null, array('class' => 'form-control')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('city', 'City') }}
                        {{ Form::text('city', null, array('class' => 'form-control')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('state', 'State') }}
                        {{ Form::text('state', null, array('class' => 'form-control')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('zip', 'Zip') }}
                        {{ Form::text('zip', null, array('class' => 'form-control')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('country', 'Country') }}
                        {{ Form::text('country', null, array('class' => 'form-control')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('phone', 'Phone') }}
                        {{ Form::text('phone', null, array('class' => 'form-control')) }}
                    </div>
                    {{ Form::submit('Proceed to Payment', array('class' => 'btn btn-success')) }}
                    {!! Form::close() !!}
              </div>
            </div>
        </div>
    </div>


@endsection