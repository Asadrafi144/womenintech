
@extends('layouts.app')

@section('content')

<body>
<div class="container mt-5">
<h1> Contact us!</h1>
<form action="/contactus"  class="row g-4"method="POST" enctype="multipart/form-data">
@csrf
<div class="col-md-5">
    <label for="forename" class="form-label"> First Name </label>
    <input type="text" class="form-control" name="fname" required>
</div>
<div class="col-md-5">
<label for="surname" class="form-label"> Last Name </label>
    <input type="text" class="form-control" name="lname" required>
</div>
<div class="col-md-7">
<label for="email" class="form-label">Email</label>
<input type="email" class="form-control" name="email" required>
</div>
<div class="col-md-5">
<label for="phonenum" class="form-label">Phone Number</label>
<input type="text" class="form-control" name="number" required placeholder="+44">
</div>

<div class="col-md-12">
    <label for="commentsection" class="form-label">If there are any questions,comments or if you would like to host a event please list the description below</label>
    <textarea class="form-control" name="cmnt" rows="4" required></textarea>
</div>
<BR>
<div class="col-md-12">
<button type="submit" class="btn btn-primary"> Submit</button>

</form>

</div>






</body>         

@endsection