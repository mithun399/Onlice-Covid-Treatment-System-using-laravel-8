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
          <div align="center" style="padding-top:10px;">
            <b style=" font-size: 40px;">OXYGEN LIST</b>
        </div>
          <div align="center" style="padding-top:10px;">
        <table  class="table table-bordered table-hover ">
                <tr style="background-color:black;">
                    <th style="padding:10px;font-size: 20px;color:white">Name</th>
                    <th style="padding:10px;font-size: 20px;color:white">Types</th>
                    <th style="padding:10px;font-size: 20px;color:white">Address</th>
                    <th style="padding:10px;font-size: 20px;color:white">Phone</th>
                    <th style="padding:10px;font-size: 20px;color:white">Source</th>
                    <th style="padding:10px;font-size: 20px;color:white">Delete</th>
                    <th style="padding:10px;font-size: 20px;color:white">Update</th>
                </tr>
                @foreach($oxygen as $oxy)
                <tr style="background-color:skyblue;" align="center">
                    <td style="padding:10px;font-size: 20px;color:black">{{$oxy->name}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$oxy->types}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$oxy->address}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$oxy->phone}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$oxy->source}}</td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are You Sure to Delte This?')" href="{{url('delete_oxygen',$oxy->id)}}">Delete</a></td>
                    <td><a class="btn btn-primary" href="{{url('update_oxygen',$oxy->id)}}">Edit</a></td>
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
