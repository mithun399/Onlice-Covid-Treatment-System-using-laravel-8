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
        <div align="center"  style="padding-top:20px; font-size:30px;">
        @if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"></button>
          {{session()->get('message')}}
          </div>

        @endif
        <h1><b>ADD EMERGENCY HELPLINE</b></h1>

        </div>
        <div class="d-flex justify-content-center" style="padding-top:30px;">
<form action="{{url('upload_help')}}" method="POST">
    @csrf
  <div class="form-group">
   <label>Number</label>
    <input type="text" name="number" class="form-control"   placeholder="Enter The Number">
  </div>
  <div class="form-group">
   <label>For Help</label>
    <input type="text" name="for_help" class="form-control"   placeholder="For Help">
  </div>
  
 <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</main>
  @include('admin.script')
  </body>
</html>
