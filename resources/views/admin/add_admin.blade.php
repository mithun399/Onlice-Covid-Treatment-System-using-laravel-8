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
        <h1 align="center"  style="padding-top:20px; font-size:30px;"><b>Add Admin</b></h1>
        <div class="row" align="center" style="padding-top:50px;">
        @if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"></button>
          {{session()->get('message')}}
          </div>

        @endif
        <form action="{{url('upload_admin')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="form-group">
    <label>Admin Name</label>
    <input type="text" name="name" class="form-control"  placeholder="Admin Name" required>
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" name="email" class="form-control"   placeholder="Enter email" required>
    
  </div>
  <div class="form-group">
    <label>Phone Number</label>
    <input type="number" name="phone" class="form-control"  placeholder="Phone Number" required>
  </div>
  
  <div class="form-group">
    <label>Address</label>
    <input type="text" name="address" class="form-control"  placeholder="Enter Address" required>
  </div><br>
 
  <div class="form-group">
    <label>User Type</label>
    <input type="text" name="usertype" class="form-control"  placeholder="Enter User Type" required>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control"  placeholder="Enter Password" required>
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
