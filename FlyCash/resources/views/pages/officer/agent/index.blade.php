@extends('layouts.app', ['page' => __('Agent Details'), 'pageSlug' => 'agentinfo'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">

      @if (session()->has('msg'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('msg') }}
        </div>
      @endif

      <div class="card-header">
        <h4 class="card-title"> Agent Details Information</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>NID</th>
                <th>Date Of Birth</th>
                <th>Type</th>
                <th>Balance</th>
                <th>Active &nbsp &nbsp Button</th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->phone}}</td>
                  <td>{{$user->nid}}</td>
                  <td>{{$user->dob}}</td>
                  <td>{{$user->type}}</td>
                  <td>{{$user->balance}}</td>

                  <td>
                    <a href="{{ url ('agent-transaction/'.$user->id )}}" class="btn btn-primary btn-sm">Details</a>

                    <a href="{{ url ('agent-edit/'.$user->id )}}" class="btn btn-primary btn-sm">Edit</a> 

                    <?php
                      if ($user->transaction_status=="unblocked"){
                        ?>
                        <a href="{{ url ('agent-blockeduser/'.$user->id )}}" class="btn btn-primary btn-sm">Block</a> 
                    <?php
                      }if ($user->transaction_status=="blocked"){
                    ?>
                        <a href="{{ url ('agent-unblockuser/'.$user->id )}}" class="btn btn-primary btn-sm">Unblock</a>
                    <?php  
                      }
                    ?>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection