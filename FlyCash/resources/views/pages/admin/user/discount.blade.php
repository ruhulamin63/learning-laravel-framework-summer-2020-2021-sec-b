@extends('layouts.app', ['page' => ('User Profile'), 'pageSlug' => 'profile'])

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
                                <img class="avatar" src="{{ asset('black') }}/img/admin/discount-code.png" alt="">
                                </a>
                                <h3>Discount Code</h3>
                        </div>
                    </p>
                    <label>{{ ('Account Number') }}</label>
                    <input type="text" name="accountnumber" class="form-control{{ $errors->has('accountnumber') ? ' is-invalid' : '' }}" placeholder="{{ ('+8801*') }}">
                    @include('alerts.feedback', ['field' => 'accountnumber'])

                    <label>{{ ('Code') }}</label>
                    <input type="text" name="amount" class="form-control{{ $errors->has('amount') ? ' is-invalid' : '' }}" placeholder="{{ ('0.00') }}">
                    @include('alerts.feedback', ['field' => 'amount'])

                    
                </div>
                <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ ('Cash in') }}</button>
                    </div>
                </div>
            </div>
    </div>
@endsection