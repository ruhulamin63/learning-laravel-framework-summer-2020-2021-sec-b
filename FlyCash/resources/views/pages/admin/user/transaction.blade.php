@extends('layouts.app', ['page' => __('Tables'), 'pageSlug' => 'tables'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h3 class="card-title"> Translation List</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">

            <thead class=" text-primary">
              <tr>

                <th>
                  Account Number
                </th>
                <th>
                  Transaction Type
                </th>
                <th class="text-center">
                  Transaction Amount
                </th>
                <th class="text-center">
                  Current Balance
                </th>
                <th class="text-center">
                  Date
                </th>
              </tr>
            </thead>
            </tbody>
            @foreach ($transaction as $transaction)
              <tr>

                <th>{{ $transaction->phone }}</th>
                <th>{{ $transaction->transaction_type }}</th>
                <th class="text-center">{{ $transaction->amount }}</th>
                <th class="text-center">{{ $transaction-> balance }}</th>
                <th class="text-center">{{ $transaction->   date }}</th>
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