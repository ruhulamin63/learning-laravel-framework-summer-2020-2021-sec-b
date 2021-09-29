@extends('layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile'])

@section('content')
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
                                <img class="avatar" src="{{ asset('black') }}/img/CreditCard.png" alt="">
                                </a>
                                <h2>Add Money</h2>
                                <h3>Bank Card</h3>
                        </div>
                    </p>
                    <label>{{ __('Enter Card Number') }}</label>
                    <input type="text" name="cardnumber" class="form-control{{ $errors->has('cardnumber') ? ' is-invalid' : '' }}" placeholder="{{ __('+8801*********') }}">
                    @include('alerts.feedback', ['field' => 'cardnumber'])

                    <label>{{ __('Valid Till') }}</label>
                    <input type="text" name="validdate" class="form-control{{ $errors->has('validdate') ? ' is-invalid' : '' }}" placeholder="{{ __('02/21') }}">
                    @include('alerts.feedback', ['field' => 'validdate'])

                    <label>{{ __('CVC/CCV') }}</label>
                    <input type="text" name="cvc" class="form-control{{ $errors->has('cvc') ? ' is-invalid' : '' }}" placeholder="{{ __('325') }}">
                    @include('alerts.feedback', ['field' => 'cvc'])

                    <label>{{ __('Card Holder Number') }}</label>
                    <input type="text" name="cardholdernumber" class="form-control{{ $errors->has('cardholdernumber') ? ' is-invalid' : '' }}" placeholder="{{ __('+8801*********') }}">
                    @include('alerts.feedback', ['field' => 'cardholdernumber'])

                    <label>{{ __('Card Holder Name') }}</label>
                    <input type="text" name="cardholdername" class="form-control{{ $errors->has('cardholdername') ? ' is-invalid' : '' }}" placeholder="{{ __('MD, SABBIR HOSSAIN BORNO') }}">
                    @include('alerts.feedback', ['field' => 'cardholdername'])

                    <label>{{ __('Amount') }}</label>
                    <input type="text" name="amount" class="form-control{{ $errors->has('amount') ? ' is-invalid' : '' }}" placeholder="{{ __('0.00') }}">
                    @include('alerts.feedback', ['field' => 'amount'])
                    
                    <label>{{ __('Password') }}</label>
                    <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('********') }}">
                    @include('alerts.feedback', ['field' => 'password'])
                </div>
                <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Add Money') }}</button>
                    </div>
                </div>
            </div>
    </div>
@endsection