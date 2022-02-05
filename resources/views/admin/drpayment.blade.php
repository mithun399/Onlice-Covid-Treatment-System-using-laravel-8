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
            <b style=" font-size: 40px;">Doctor Charge</b>
        </div>
          <div align="center" style="padding-top:50px;">
        <table>
                <tr style="background-color:black;" align="center">
                <th style="padding:10px;font-size: 20px;color:white">Doctor Name</th>
                    <th style="padding:10px;font-size: 20px;color:white">Bkash</th>
                    <th style="padding:10px;font-size: 20px;color:white">Amount</th>

                    <th style="padding:10px;font-size: 20px;color:white">Transaction ID</th>



                </tr>
                @foreach($drpayment as $dpayment)
                <tr style="background-color:skyblue;" align="center">
                <td style="padding:10px;font-size: 20px;color:black">{{$dpayment->doctor}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$dpayment->bkash}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{($dpayment->amount*10)/100}}</td>

                    <td style="padding:10px;font-size: 20px;color:black">{{$dpayment->trxID}}</td>



                    
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