@extends('layouts.app', ['page' => __('Tables'), 'pageSlug' => 'tables'])

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
        <h3 class="card-title"> block User</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">

            <thead class=" text-primary">
              <tr>

                <th>
                   Name
                </th>
                <th>
                   Email
                </th>
               
                <th >
                  Phone
                </th>
                <th >
                  Nid
                </th>
                <th>
                  Action
                </th>
              </tr>
            </thead>
            </tbody>
            @foreach ($customers as $customers)
   
              <tr>

              <th>{{ $customers->name }}</th>
              <th>{{ $customers->email }}</th>

                <th>{{ $customers->phone }}</th>
                <th>{{ $customers->nid }}</th>
                <th> 
                
                <?php
                  if ($customers->transaction_status=="unblocked"){
                    ?>
                     <a href="{{ url ('admin-blockeduser/'.$customers->email )}}" class="btn btn-primary btn-sm">Block</a> 
                   <?php
                  }if ($customers->transaction_status=="blocked"){
                    ?>
                    <a href="{{ url ('admin-unblockuser/'.$customers->email )}}" class="btn btn-primary btn-sm">Unblock</a>
                    <?php  
                }
                ?>
                </th>
                
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