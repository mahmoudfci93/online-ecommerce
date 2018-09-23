@extends('layout.inner')

@section('content')

    <div class="men">
        <div class="container">
            <div class="row">
            <h2>Cart Items</h2>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cartItems as $cartItem)
                <tr>
                    <td>{{$cartItem->name}}</td>
                    <td>{{$cartItem->price}}</td>
                    <td width="50px">
                        {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}

                        <input  class="form-control" name="qty" type="text" value="{{$cartItem->qty}}">

                    </td>
                    <td>
                        <input style="float: left;background-color: #4CAF50;padding: 5px 15px;font-size: 16px"  type="submit" class="btn success" value="Done">
                        {!! Form::close() !!}

                        <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input style="background-color: #f44336;padding: 5px 15px;font-size: 16px" class="btn danger" type="submit" value="Delete">
                        </form>
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>
                <br>
                <tr>
                    <td></td>
                    <td>
                        Items: {{Cart::count()}}<br>
                        Tax: ${{Cart::tax()}} <br>
                        Sub Total: $ {{Cart::subtotal()}} <br>
                        Grand Total: $ {{Cart::total()}}<br><br><br>
                    <td></td>
                    <td></td>
                </tr>

                <a href="{{route('checkout.shipping')}}" class="btn btn-primary btn-normal btn-inline btn_form">Checkout</a>

        </div>
        </div>
        </div>
@endsection