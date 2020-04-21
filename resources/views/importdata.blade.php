@extends('layouts.datatable')
@section('content')
<div class="container">
    <h3>Import Data</h3><br />
    <div class="col-5">
        <form action="{{ route('platform.import') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label>文件名：</label>
            <input type="file" name="file">
            <br>
            <button type="submit" class="btn btn-success">Import</button>
            {{-- <a href="{{ route('excel.export.all') }}" class="btn btn-success">Export All</a> --}}
        </form>
    </div>
    <br>
    <div>
        <table class="table table-striped" id="table">
           <thead>
              <tr>
                <th scope="col">date/time</th>
                <th scope="col">settlement id</th>
                <th scope="col">type</th>
                <th scope="col">order id</th>
                <th scope="col">sku</th>
                <th scope="col">description</th>
                <th scope="col">quantity</th>
                <th scope="col">marketplace</th>
                <th scope="col">fulfillment</th>
                <th scope="col">order city</th>
                <th scope="col">order_state</th>
                <th scope="col">order_postal</th>
                <th scope="col">product_sales</th>
                <th scope="col">shipping_credits</th>
                <th scope="col">gift_wrap_credits</th>
                <th scope="col">promotional_rebates</th>
                <th scope="col">sales_tax_collected</th>
                <th scope="col">Marketplace_Facilitator_Tax</th>
                <th scope="col">selling_fees</th>
                <th scope="col">fba_fees</th>
                <th scope="col">other_transaction_fees</th>
                <th scope="col">other</th>
                <th scope="col">total</th>
                <th></th>
              </tr>
           </thead>
        </table>
        <script>
        $(function() {
           $('#table').DataTable({
               processing: true,
               serverSide: true,

               pageLength: 50,
               ajax: '{{ route('get_amazon') }}',
               columns: [
                    { data: 'date/time'},
                    { data: 'settlement_id'},
                    { data: 'type'},
                    { data: 'order_id'},
                    { data: 'sku'},
                    { data: 'description'},
                    { data: 'quantity'},
                    { data: 'marketplace'},
                    { data: 'fulfillment'},
                    { data: 'order_city'},
                    { data: 'order_state'},
                    { data: 'order_postal'},
                    { data: 'product_sales'},
                    { data: 'shipping_credits'},
                    { data: 'gift_wrap_credits'},
                    { data: 'promotional_rebates'},
                    { data: 'sales_tax_collected'},
                    { data: 'Marketplace_Facilitator_Tax'},
                    { data: 'selling_fees'},
                    { data: 'fba_fees'},
                    { data: 'other_transaction_fees'},
                    { data: 'other'},
                    { data: 'total'}
        //             { data: "checkbox", orderable: false}
                ],
            });
        });
        </script>
     </div>
</div>
@endsection
