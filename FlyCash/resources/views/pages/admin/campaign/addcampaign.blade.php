@extends('layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile'])

@section('content')
<body>

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
                                <img class="avatar" src="{{ asset('black') }}/img/admin/campaign.png" alt="addcampaign">
                                </a>
                                <h3>Add Campaign</h3>
                        </div>
                    </p>
                    <label>{{ __('Campaign Name') }}</label>
                    <input type="text" name="name" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" placeholder="{{ __('Enter a name') }}">
                    @include('alerts.feedback', ['field' => 'name'])
                    <!-- <label>{{ __('Start Date') }}</label>
                    <input type="text" name="number" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" placeholder="{{ __('Enter a name') }}">
                    @include('alerts.feedback', ['field' => 'date'])
                    <label>{{ __('end Date') }}</label>
                    <input type="text" name="number" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" placeholder="{{ __('Enter a name') }}">
                    @include('alerts.feedback', ['field' => 'date']) -->

                    <input type="file" id="myFile" name="filename">
                </div>
                <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Add Campaign') }}</button>
                    </div>
                </div>
            </div>
    </div>
    </body>
@endsection