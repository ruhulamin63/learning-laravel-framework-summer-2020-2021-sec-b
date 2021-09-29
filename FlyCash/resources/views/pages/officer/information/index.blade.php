@extends('layouts.app', ['page' => __('All Information'), 'pageSlug' => 'information'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> All Data Information</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>Id</th>
                <th>Email</th>
                <th >Phone</th>
                <th>Trans Type</th>
                <th>Amount</th>
                <th>Balance</th>
                <th>Action &nbsp &nbsp Button</th>
              </tr>
            </thead>
            <tbody>

            @foreach($userlist as $key => $user)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->transaction_type}}</td>
                <td>{{$user->amount}}</td>
                <td>{{$user->balance}}</td>
                
                <td>
                  <a href="/pages/officer/information/details/{{$user->id}}">
                    <i class="fas fa-info-circle"></i>
                      Details
                  </a> |
                  <a href="/pages/officer/information/edit/{{$user->id}}">
                      <i class="tim-icons icon-pencil"></i>
                        Edit
                  </a> | 
                  <a href="/pages/officer/information/delete/{{$user->id}}">
                    <i class="tim-icons icon-trash-simple"></i>
                      Delete
                  </a>
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
