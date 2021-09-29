
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="title">{{ __('Customr Transaction Information') }}</h3>
            </div>
            
            <h2>Welcome to our service center</h2>
            <h3>02/location,Dhaka,Bangladesh</h3>
            <h3>email: flycash@info.com</h3>
            
            <table border="1">
                <tr>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Transacton Type</th>
                    <th>Amount</th>
                    <th>Balance</th>
                    <th>Date</th>
                </tr>
                <tr>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->transaction_type}}</td>
                    <td>{{$user->amount}}</td>
                    <td>{{$user->balance}}</td>
                    <td>{{$user->date}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
