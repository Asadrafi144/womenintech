
@extends('layouts.app')

@section('content')

<body>
<div class="container mt-5">
<h1> Please fill in the event details below!</h1>
<form action="/addevent"  class="row g-4"method="POST" enctype="multipart/form-data">
@csrf
<div class="col-md-5">
    <label for="evename" class="form-label"> Title of the event</label>
    <input type="text" class="form-control" name="name" required>
</div>
<div class="col-md-5">
<label for="eveloc" class="form-label"> Address and postcode of event </label>
    <input type="text" class="form-control" name="location" required>
</div>
<div class="col-md-7">
<label for="evehost" class="form-label">Purpose of event</label>
<input type="text" class="form-control" name="description" required>
</div>
<div class="col-md-5">
<label for="evedate" class="form-label">Date of event</label>
<input type="date" class="form-control" name="date" required>
</div>
<div class="col-md-5">
<label for="evemail" class="form-label">Time of event</label>
<input type="time" class="form-control" name="time" required>
</div>

<div class="col-md-12">
<button type="submit" class="btn btn-primary"> Submit</button>

</form>

</div>






</body>         

@endsection