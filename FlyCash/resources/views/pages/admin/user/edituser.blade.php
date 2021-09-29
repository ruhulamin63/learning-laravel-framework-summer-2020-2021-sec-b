@extends('layouts.app', ['page' => __('Tables'), 'pageSlug' => 'tables'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h3 class="card-title"> User List</h3>
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
                <th>                <a class="btn btn-primary btn-sm">Edit</a> 
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