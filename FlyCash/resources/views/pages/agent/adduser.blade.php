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
                                <img class="avatar" src="{{ asset('black') }}/img/addpropic.png" alt="">
                                </a>
                                <h3>Add User</h3>
                        </div>
                    </p>
                    <form class="form" method="post" action="{{ route('register') }}">
                    @csrf

                    <div class="card-body">
                        <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}">
                            @include('alerts.feedback', ['field' => 'name'])
                        </div>
                        <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-email-85"></i>
                                </div>
                            </div>
                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}">
                            @include('alerts.feedback', ['field' => 'email'])
                        </div>
                        <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}">
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password') }}">
                        </div>
                        <div class="input-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-mobile"></i>
                                </div>
                            </div>
                            <input type="digit" name="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="{{ __('Phone Number') }}">
                            @include('alerts.feedback', ['field' => 'phone'])
                        </div>
                        <div class="input-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-credit-card"></i>
                                </div>
                            </div>
                            <input type="text" name="nid" class="form-control{{ $errors->has('nid') ? ' is-invalid' : '' }}" placeholder="{{ __('NID Number') }}">
                            @include('alerts.feedback', ['field' => 'nid'])
                        </div>
                        
                        <div class="input-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-calendar-60"></i>
                                </div>
                            </div>
                            <input type="date" name="dob" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" placeholder="{{ __('') }}">
                            @include('alerts.feedback', ['field' => 'dob'])
                        </div>
                        <div class="input-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-badge"></i>
                                </div>
                            </div>
                            <select  type="text" name="type" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" placeholder="{{ __('Account Type') }}">
                            <option value="{{ 'Account Type' }}" name= "user" placeholder="{{ __('Account Type') }}">User</option>
                            </select>
                            @include('alerts.feedback', ['field' => 'type'])
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-round btn-lg">{{ __('Add') }}</button>
                    </div>
                </form>
                </div>
            </div>
    </div>
@endsection

<!-- <div class="row">
        
        <div class="col-md-7 mr-auto">
            <div class="card card-register card-white">
                <div class="card-header">
                <img src="{{ asset('black') }}/img/flycash.png" alt="">
                    <h4 align= "center" class="card-title">{{ __('Registration') }}</h4>
                </div>
                
            </div>
        </div>
    </div> -->
