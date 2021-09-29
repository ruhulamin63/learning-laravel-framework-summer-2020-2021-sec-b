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
<<<<<<< HEAD
                            <form method="post">
=======
                            
>>>>>>> bd3f34329c35277c057c0a8768bc29c87d9f965e
                            <a href="#">
                                <img class="avatar" src="{{ asset('black') }}/img/icons/cashin.png" alt="sendmoney">
                                </a>
                                <h3>Mobile Recharge</h3>
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
                    <label>{{ __('Mobile Number') }}</label>
<<<<<<< HEAD
                    <input type="text" name="mobile number" class="form-control{{ $errors->has('mobile number') ? ' is-invalid' : '' }}" placeholder="{{ __('+8801*********') }}">
=======
                    <input type="text" name="phone" class="form-control{{ $errors->has('mobile number') ? ' is-invalid' : '' }}" placeholder="{{ __('+8801*********') }}">
>>>>>>> bd3f34329c35277c057c0a8768bc29c87d9f965e
                    @include('alerts.feedback', ['field' => 'mobile number'])

                    <label>{{ __('Amount') }}</label>
                    <input type="text" name="amount" class="form-control{{ $errors->has('amount') ? ' is-invalid' : '' }}" placeholder="{{ __('0.00') }}">
                    @include('alerts.feedback', ['field' => 'amount'])
                    
                    <label>{{ __('Password') }}</label>
                    <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('******') }}">
                    @include('alerts.feedback', ['field' => 'password'])
                </div>
                <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Send') }}</button>
                    </div>
                    </form>
                </div>
            </div>
    </div>
@endsection