@extends('layouts.app', ['class' => 'register-page', 'page' => __('Register Page'), 'contentClass' => 'register-page'])

@section('content')
    <div class="row">
  
        <!-- <div class="col-md-5 ml-auto">
            <div class="info-area info-horizontal mt-5">
                <div class="icon icon-warning">
                    <i class="tim-icons icon-wifi"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('Marketing') }}</h3>
                    <p class="description">
                        {{ __('We\'ve created the marketing campaign of the website. It was a very interesting collaboration.') }}
                    </p>
                </div>
            </div>
            <div class="info-area info-horizontal">
                <div class="icon icon-primary">
                    <i class="tim-icons icon-triangle-right-17"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('Fully Coded in HTML5') }}</h3>
                    <p class="description">
                        {{ __('We\'ve developed the website with HTML5 and CSS3. The client has access to the code using GitHub.') }}
                    </p>
                </div>
            </div>
            <div class="info-area info-horizontal">
                <div class="icon icon-info">
                    <i class="tim-icons icon-trophy"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('Built Audience') }}</h3>
                    <p class="description">
                        {{ __('There is also a Fully Customizable CMS Admin Dashboard for this product.') }}
                    </p>
                </div>
            </div>
        </div> -->
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        
            <div align="center" class="card card-register card-white">
                <div class="card-header">
                <img src="{{ asset('black') }}/img/flycash.png" alt="">
                    <h4 align= "center" class="card-title">{{ __('Registration') }}</h4>
                </div>
                <form class="form" method="post">
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
                            <input type="password" name="password_confirmation" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Confirm Password') }}">
                            @include('alerts.feedback', ['field' => 'password'])
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
                                    <i class="tim-icons icon-badge"></i>
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
                            <input type="date" name="dob" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" placeholder="{{ __('Date of Birth') }}">
                            @include('alerts.feedback', ['field' => 'dob'])
                        </div>
                        <div class="input-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <select  type="text" name="type" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" placeholder="{{ __('Account Type') }}">

                            <option value="admin" name= "admin" placeholder="{{ __('Account Type') }}">Admin</option>
                            <option value="customer" name= "customer" placeholder="{{ __('Account Type') }}">Customer</option>
                            <option value="agent" name= "agent" placeholder="{{ __('Account Type') }}">Agent</option>
                            <option value="officer" name= "communication_officer" placeholder="{{ __('Account Type') }}">Communication Officer</option>
                            </select>
                            @include('alerts.feedback', ['field' => 'type'])
                        </div>
                        {{session('msg')}}
                                        
                        @foreach ($errors->all() as $err)
                            {{$err}}
                        @endforeach
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-round btn-lg">{{ __('Get Started') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
