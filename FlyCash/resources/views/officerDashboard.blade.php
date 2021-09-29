@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')

    <h1>Hello, Ruhul Amin</h1>
    <table align="center">
        <tr>
            <td><h1>Welcome To Our FlyCash Apps</h1></td>
        </tr>
    </table>

@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush