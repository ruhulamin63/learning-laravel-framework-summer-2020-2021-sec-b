@extends('layouts.app', ['page' => __('Officer Profile'), 'pageSlug' => 'profile'])

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="title">{{ __('Communicatin Officer Profile') }}</h3>
                </div>
                <form method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf

                        @if (session()->has('update'))
                            <div class="alert alert-success" role="alert">
                                {{ session()->get('update') }}
                            </div>
                        @endif

                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <label>{{ __('Name') }}</label>
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  value="{{ __('Ruhul Amin') }}">
                            @include('alerts.feedback', ['field' => 'name'])
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <label>{{ __('Email address') }}</label>
                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  value="{{ __('abc@gmail.com') }}">
                            @include('alerts.feedback', ['field' => 'email'])
                        </div>

                        <div class="form-group">
                            <label>{{ __('Phone Number') }}</label>
                            <input type="text" name="phone" class="form-control" value="{{  __('+880 1743-369163') }}">
                            @include('alerts.feedback', ['field' => 'phone'])
                        </div>

                        <div class="form-group">
                            <label>{{ __('NID') }}</label>
                            <input type="text" name="nid" class="form-control" value="{{  __('53533535') }}">
                            @include('alerts.feedback', ['field' => 'nid'])
                        </div>

                        <div class="form-group">
                            <label>{{ __('DOB') }}</label>
                            <input type="text" name="dob" class="form-control" value="{{  __('05-Jul-1998') }}">
                            @include('alerts.feedback', ['field' => 'nid'])
                        </div>

                        <div class="form-group">
                            <label>{{ __('Type') }}</label>
                            <input type="text" name="type" class="form-control" value="{{  __('Communication') }}">
                            @include('alerts.feedback', ['field' => 'nid'])
                        </div>

                        <!-- <div class="form-group">
                            <label></label>
                            <input type="file" name="image" class="form-control" value="Upload">
                        </div> -->
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Save') }}</button>
                        <a href="{{route('officer_home')}}" class="btn btn-success">Back</a>
                    </div>
                </form>
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
                                <img class="avatar" src="{{ asset('black') }}/img/officer/hi.png" alt="">
                                <h5 class="title">{{ __('Profile') }}</h5>
                            </a>
                            <p class="description">
                                {{ __('Communication Officer') }}
                            </p>
                        </div>
                    </p>
                    <div class="card-description">
                        {{ __('Hello Everyone, Always Active' )}} <br> {{__('Never Give Up"...') }}
                    </div>
                </div>

                <div class="card-footer">
                    <div class="button-container">
                        <button class="btn btn-icon btn-round btn-facebook">
                            <a href="https://www.facebook.com/">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </button>
                        <button class="btn btn-icon btn-round btn-twitter">
                            <a href="https://www.linkedin.com/feed/">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
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
