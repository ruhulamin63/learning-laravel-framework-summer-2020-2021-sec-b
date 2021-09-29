@extends('layouts.app', ['page' => __('Agent Details'), 'pageSlug' => 'agenttransaction'])

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="title">{{ __('Agent Transantion Data') }}</h3>
                </div>
                <div class="card-body">
                    <table border="1">
                        <tr>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Transaction Type</th>
                            <th>Amount</th>
                            <th>Balance</th>
                            <th>Date</th>
                        </tr>
                        @foreach($user as $key=>$user)
                        <tr>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->transaction_type}}</td>
                            <td>{{$user->amount}}</td>
                            <td>{{$user->balance}}</td>
                            <td>{{$user->date}}</td>
                        </tr>
                        @endforeach
                    </table>
                        <br><br><br>
                        <a href="{{url('agent-invoice', $user->id)}}" class="btn btn-success">Download Pdf</a>
                        <a href="{{route('agent_index')}}" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text">
                        <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                            <a href="#">
                                <img class="avatar" src="{{ asset('black') }}/img/anime3.png" alt="">
                                <h5 class="title">{{ $user->email }}</h5>
                            </a>
                            <p class="description">
                                {{ __('Agent Profile') }}
                            </p>
                        </div>
                    </p>
                    <div class="card-description">
                        {{ __('Hello Everyone, Always "Never Give Up"...') }}
                    </div>
                </div>
                <div class="card-footer">
                    <div class="button-container">
                        <button class="btn btn-icon btn-round btn-facebook">
                            <i class="fab fa-facebook"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-twitter">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-google">
                            <i class="fab fa-google-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
