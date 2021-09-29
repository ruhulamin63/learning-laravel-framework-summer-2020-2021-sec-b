@extends('layouts.app', ['page' => __('Tables'), 'pageSlug' => 'tables'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Ongoing Campaign</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>
                  Campaign Name
                </th>
                <th>
                  Released Date
                </th>
                <th>
                  End Date
                </th>
                <th>
                  Portfolio
                </th>
              </tr>
            </thead>
            <tbody>
            @foreach ($campaigns as $campaign)
              <tr>
                <th>{{ $campaign->title }}</th>
                <th>{{ $campaign->sdate }}</th>
                <th>{{ $campaign->edate }}</th>
                <th><img src="{{asset('black/img/campaigns/' . $campaign->image) }}" width="100px;" height="100px;" alt="image"></th>
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
