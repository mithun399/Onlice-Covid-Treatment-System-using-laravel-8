<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <!-- top navigation bar -->
    @include('admin.navbar')
    <!-- top navigation bar -->
    <!-- offcanvas -->
    @include('admin.sidebar')
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
     <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Dashboard</h4>
          </div>
          <div align="center" style="padding-top:50px;">
            <b style=" font-size: 40px;">Payment View</b>
        </div>
          <div align="center" style="padding-top:50px;">
        <table>
                <tr style="background-color:black;">
                    <th style="padding:10px;font-size: 20px;color:white">Product ID</th>
                    <th style="padding:10px;font-size: 20px;color:white">User ID</th>
                    <th style="padding:10px;font-size: 20px;color:white">Status</th>
                    <th style="padding:10px;font-size: 20px;color:white">Payment Method</th>
                    <th style="padding:10px;font-size: 20px;color:white">Payment Status</th>
                    <th style="padding:10px;font-size: 20px;color:white">Address</th>
                    <th style="padding:10px;font-size: 20px;color:white">Bkash</th>
                    <th style="padding:10px;font-size: 20px;color:white">Transaction ID</th>



                </tr>
                @foreach($medicinepayment as $mpayment)
                <tr style="background-color:skyblue;" align="center">
                    <td style="padding:10px;font-size: 20px;color:black">{{$mpayment->product_id}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$mpayment->user_id}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$mpayment->status}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$mpayment->payment_method}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$mpayment->payment_status}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$mpayment->address}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$mpayment->bkash}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$mpayment->transaction_id}}</td>


                    <td style="padding:10px;font-size: 20px;color:black"></td>

                    
                </tr>
                @endforeach
</table>
        </div>
        </div>
</div>
</main>
  @include('admin.script')
  </body>
</html>
