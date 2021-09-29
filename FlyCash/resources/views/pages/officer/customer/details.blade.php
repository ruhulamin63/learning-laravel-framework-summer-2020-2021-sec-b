@extends('layouts.app', ['page' => __('Profile Details'), 'pageSlug' => 'information'])

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="title">{{ __('Customer Transantion Data') }}</h3>
                </div>
                <form method="#" autocomplete="off">
                    <div class="card-body">
                            @csrf
                           <!-- detete method -->
                    
                        <table border="1">
                            <tr>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Transaction Type</th>
                                <th>Amount</th>
                                <th>Balance</th>
                            </tr>
                            <tr>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->transaction_type}}</td>
                                <td>{{$user->amount}}</td>
                                <td>{{$user->balance}}</td>
                            </tr>
                        </table>
                    </div>
                    <a href="{{route('customer_pdf_invoice', $user->email)}}" class="btn btn-success">Download Pdf</a>
                    <a href="{{route('customer_show')}}" class="btn btn-success">Back</a>
                </form>
            </div>

        </div>
      
    </div>
@endsection
