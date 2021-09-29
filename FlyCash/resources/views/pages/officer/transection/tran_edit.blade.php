@extends('layouts.app', ['page' => __('Edit Transection'), 'pageSlug' => 'tran_edit'])

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="title">{{ __('Transection Update') }}</h4>
                </div>
                <form method="post" action="#" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            @method('post')

                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('account_no') ? ' has-danger' : '' }}">
                                <label>{{ __('Account Number') }}</label>
                                <input type="text" name="account_no" class="form-control{{ $errors->has('account_no') ? ' is-invalid' : '' }}" placeholder="{{ __('Account No') }}" value="{{ __('980*****') }}">
                                @include('alerts.feedback', ['field' => 'account_no'])
                            </div>

                            <div class="form-group{{ $errors->has('agent_no') ? ' has-danger' : '' }}">
                                <label>{{ __('Agent Number') }}</label>
                                <input type="text" name="agent_no" class="form-control{{ $errors->has('agent_no') ? ' is-invalid' : '' }}" placeholder="{{ __('Agent Number') }}" value="{{ __('017*****') }}">
                                @include('alerts.feedback', ['field' => 'account_no'])
                            </div>

                            <div class="form-group">
                                <label>{{ __('Type') }}</label>
                                <input type="text" name="type" class="form-control" placeholder="{{ __('Type') }}" value="{{ __('Cash Out') }}">
                                @include('alerts.feedback', ['field' => 'type'])
                            </div>

                            <div class="form-group">
                                <label>{{ __('Amount') }}</label>
                                <input type="text" name="amount" class="form-control" placeholder="{{ __('Amount') }}" value="{{ __('5000') }}">
                                @include('alerts.feedback', ['field' => 'amount'])
                            </div>

                            <div class="form-group">
                                <label>{{ __('Date') }}</label>
                                <input type="date" name="date" class="form-control" placeholder="{{ __('Date') }}" value="{{ __('5-Jun-2021, 12:30 pm') }}">
                                @include('alerts.feedback', ['field' => 'date'])
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
