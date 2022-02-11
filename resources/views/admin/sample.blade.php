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
        </div>
        <div align="center" style="padding-top:10px; font-size:20px;"><b>Sample Collection List</b></div>
        <div align="center" style="padding-top:10px;">
        <table>
                <tr style="background-color:black;" align="center">
                    <th style="padding:10px;font-size: 20px;color:white">Name</th>
                    <th style="padding:10px;font-size: 20px;color:white">Email</th>
                    <th style="padding:10px;font-size: 20px;color:white">Phone</th>
                    <th style="padding:10px;font-size: 20px;color:white">Date</th>
                    <th style="padding:10px;font-size: 20px;color:white">Message</th>
                    <th style="padding:10px;font-size: 20px;color:white">Address</th>
                    <th style="padding:10px;font-size: 20px;color:white">Call</th>
                    
                </tr>
                @foreach($sample as $patient)
                <tr style="background-color:skyblue;" align="center">
                    <td style="padding:10px;font-size: 20px;color:black">{{$patient->name}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$patient->email}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$patient->number}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$patient->date}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$patient->message}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$patient->address}}</td>
                    <td style="padding:10px;font-size: 20px;color:black"><a href="tel:{{$patient->number}}" class="btn btn-primary">Call</a></td>
                    

                   
                </tr>
                @endforeach
</table>
        </div>
    </div>
</main>
  @include('admin.script')
  </body>
</html>
