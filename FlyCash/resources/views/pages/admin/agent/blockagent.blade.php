@extends('layouts.app', ['page' => __('Tables'), 'pageSlug' => 'tables'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
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
            @foreach ($agents as $agents)
              <tr>

              <th>{{ $agents->name }}</th>
              <th>{{ $agents->email }}</th>

                <th>{{ $agents->phone }}</th>
                <th>{{ $agents->nid }}</th>
                <th>                <a class="btn btn-primary btn-sm">Block</a> 
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