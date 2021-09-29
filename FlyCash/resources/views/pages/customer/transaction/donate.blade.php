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
                                <h3>Donate</h3>
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
                    <label>{{ __('Donation') }}</label>
                    <select  type="text" name="billtype" class="form-control{{ $errors->has('bill type') ? ' is-invalid' : '' }}" placeholder="{{ __('Select BIll Type') }}">

                            <option value="Brac" name= "brac" placeholder="{{ __('Bill Type') }}">Brac </option>
                            <option value="Ek Takay Ahar" name= "1takayahar" placeholder="{{ __('Bill Type') }}">Ek Takay Ahar</option>
                            <option value="Esho Shobai" name= "eshoShobai" placeholder="{{ __('Bill Type') }}">Esho Shobai </option>
                            <option value="MASTUL Foundation" name= "mastul" placeholder="{{ __('Bill Type') }}">MASTUL Foundation </option>
                            <option value="Alter Youth" name= "alter youth" placeholder="{{ __('Bill Type') }}">Alter Youth </option>
                            <option value="Sajida Foundation" name= "sajida" placeholder="{{ __('Bill Type') }}">Sajida Foundation</option>
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
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('donate') }}</button>
                    </div>
                    </form>
                </div>
            </div>
    </div>
@endsection