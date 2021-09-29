@extends('layouts.app', ['page' => __('Transection'), 'pageSlug' => 'transection'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Transection Information </h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>Account Number</th>
                <th>Agent Number</th>
                <th>Type</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>980*****</td>
                <td>017******</td>
                <td>Cash Out</td>
                <td>5000</td>
                <td>5-Jun-2021, 12:30 pm</td>
                <td>
                  <a href="/transection/tran_edit/">
                    <i class="tim-icons icon-pencil"></i>
                      Edit
                  </a> | 
                  <a href="#">
                    <i class="tim-icons icon-trash-simple"></i>
                    delete
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
