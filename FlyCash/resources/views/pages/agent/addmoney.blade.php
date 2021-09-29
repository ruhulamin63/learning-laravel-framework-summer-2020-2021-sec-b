@extends('layouts.app', ['page' => ('Icons'), 'pageSlug' => 'icons'])

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h2 class="title">Add Money</h2>
        </div>
        <div class="card-body all-icons">
          <div class="row">

          <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('agent_bkash') }}">
                    <img src="{{ asset('black') }}/img/Bkash.png" alt="{{ ('Profile Photo') }}">
                        <h4>Bkash</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('agent_nagad') }}">
                    <img src="{{ asset('black') }}/img/Nagad.png" alt="{{ ('Profile Photo') }}">
                        <h4>Nagad</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('agent_rocket') }}">
                    <img src="{{ asset('black') }}/img/Rocket.png" alt="{{ ('Profile Photo') }}">
                        <h4>Rocket</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('agent_upay') }}">
                    <img src="{{ asset('black') }}/img/upay.jpg" alt="{{ ('Profile Photo') }}">
                        <h4>Upay</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('agent_surecash') }}">
                    <img src="{{ asset('black') }}/img/surecash.png" alt="{{ ('Profile Photo') }}">
                        <h4>Sure Cash</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('agent_bankcard') }}">
                    <img src="{{ asset('black') }}/img/CreditCard.png" alt="{{ __('Profile Photo') }}">
                        <h4>Bank Card</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection