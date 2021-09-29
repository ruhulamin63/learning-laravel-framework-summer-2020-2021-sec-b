@extends('layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile'])

@section('content')
@csrf
    <div class="d-flex justify-content-center">
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
                                <img class="avatar" src="{{ asset('black') }}/img/icons/cashin.png" alt="sendmoney">
                                </a>
                                <h3>Transfer Money</h3>
                        </div>
                        @if (session()->has('msg'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('msg') }}
                        </div>
                    @endif
                    @if (session()->has('err'))
                        <div class="alert alert-warning" role="alert">
                            {{ session()->get('err') }}
                        </div>
                    @endif
                    <form method="post">
                    </p>
                    <label>{{ __('Account Number') }}</label>
                    <input type="text" name="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="{{ __('+8801*********') }}">
                    @include('alerts.feedback', ['field' => 'phone'])

                    <label>{{ __('Amount') }}</label>
                    <input type="text" name="amount" class="form-control{{ $errors->has('amount') ? ' is-invalid' : '' }}" placeholder="{{ __('0.00') }}">
                    <label>{{ __('Branch Name') }}</label>
                    <input type="text" name="branch" class="form-control{{ $errors->has('amount') ? ' is-invalid' : '' }}" placeholder="{{ __('0.00') }}">
                    @include('alerts.feedback', ['field' => 'amount'])
                    
                    <label>{{ __('Password') }}</label>
                    <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('******') }}">
                    @include('alerts.feedback', ['field' => 'password'])
                </div>
                <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Transfer') }}</button>
                    </div>
                </from>
                </div>
            </div>
    </div>
@endsection