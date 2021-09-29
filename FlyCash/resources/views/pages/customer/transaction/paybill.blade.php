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
                                <img class="avatar" src="{{ asset('black') }}/img/flycash.png" alt="">
                                </a>
                                <h3>Pay Bill</h3>
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
                    <label>{{ __('Bill Number') }}</label>
<<<<<<< HEAD
                    <input type="text" name="billnumber" class="form-control{{ $errors->has('billnumber') ? ' is-invalid' : '' }}" placeholder="{{ __('54789652') }}">
=======
                    <input type="text" name="phone" class="form-control{{ $errors->has('billnumber') ? ' is-invalid' : '' }}" placeholder="{{ __('54789652') }}">
>>>>>>> bd3f34329c35277c057c0a8768bc29c87d9f965e
                    @include('alerts.feedback', ['field' => 'bill number'])

                    <label>{{ __('Bill Type') }}</label>
                    <select  type="text" name="bill type" class="form-control{{ $errors->has('bill type') ? ' is-invalid' : '' }}" placeholder="{{ __('Select BIll Type') }}">

                            <option value="{{ 'Bill Type' }}" name= "billtype" placeholder="{{ __('Bill Type') }}">Electricity</option>
                            <option value="Bill Type" name= "billtype" placeholder="{{ __('Bill Type') }}">Gas</option>
                            <option value="{{ 'Bill Type' }}" name= "billtype" placeholder="{{ __('Bill Type') }}">Water</option>
                            <option value="Bill Type" name= "billtype" placeholder="{{ __('Bill Type') }}">Internet</option>

                            <option value="{{ 'Bill Type' }}" name= "billtype" placeholder="{{ __('Bill Type') }}">Telephone</option>
                            <option value="Bill Type" name= "billtype" placeholder="{{ __('Bill Type') }}">DTH</option>
                            <option value="{{ 'Bill Type' }}" name= "billtype" placeholder="{{ __('Bill Type') }}">Education</option>
                            <option value="Bill Type" name= "billtype" placeholder="{{ __('Bill Type') }}">Credit Card</option>
                            <option value="{{ 'Bill Type' }}" name= "billtype" placeholder="{{ __('Bill Type') }}">Others</option>
                            </select>
                            @include('alerts.feedback', ['field' => 'bill type'])

                    <label>{{ __('Amount') }}</label>
                    <input type="text" name="amount" class="form-control{{ $errors->has('amount') ? ' is-invalid' : '' }}" placeholder="{{ __('0.00') }}">
                    @include('alerts.feedback', ['field' => 'amount'])
                    
                    <label>{{ __('Password') }}</label>
                    <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('********') }}">
                    @include('alerts.feedback', ['field' => 'password'])
                </div>
                <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Pay Bill') }}</button>
                    </div>
                    </form>
                </div>
            </div>
    </div>
@endsection