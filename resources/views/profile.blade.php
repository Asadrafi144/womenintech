
@extends('layouts.app')

@section('content')
<html>
<head>
  <title> Profile</title>
</head>

<body>
<div class="container">
  <div class="row">
    <div class="panel panel-primary">
      <div class="panel panel-heading">
      <h2>Welcome to the profile page where you can create a profile and share your views which can encourage younger females out there to 
      join the technology field.</h2>
    </div>
    <div class="panel-body">
<form action="/profile" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6">
   <input type="file" name="profilepic" class="file_input" accept="image/*">
    </div>
   
    <div class="col-md-6 col-lg-12">
    <label for="name" class="form-label">What is your name?</label>
    <input type="text" class="form-control" name="name" id="name" required>
   </div>

   <div class="col-md-6 col-lg-12">
    <label for="occupation" class="form-label" >What is your occupation</label>
  <select name="occupation" id="occupation" class="form-control">
    <option value="employer">Employer</option>
    <option value="employee">Employee</option>
    <option value="student">Student</option>
   </select>
</div>

   <div class="col-md-6 col-lg-12">
   <label for="questionone" class="form-label">What is your current job and please provide a breif description of your role</label>
    <textarea class="questionone form-control" name="job" rows="4" cols="50" required></textarea>
   </div>

   <div class="col-md-6 col-lg-12">
   <label for="questiontwo" class="form-label">What motivated you to pursue a career in technology?</label>
  <textarea class="questiontwo form-control" name="motivation" rows="4" cols="50" required></textarea> 
   </div>

   <div class="col-md-6 col-lg-12">
   <label for="questionthree" class="form-label"> In your previous studies did you study anything related to IT/technology whether it was in your degree, alevels or GCSE?</label>
    <textarea class="questionthree form-control" name="education" rows="4" cols="50" required></textarea>
    </div>

<div class="col-md-6 col-lg-12">
<label for="questionfour" class="form-label">Did you gain experience in the above fields before? This can be at a job or from home.</label>
<textarea class="questionfour form-control" name="experience" rows="4" cols="50" required></textarea>
</div>

<div class="col-md-6 col-lg-12">
<label for="questionfive" class="form-label">What would help motivate females in the fuuture to study a IT/technology course?.</label>
<textarea class="questionfive form-control" name="motivationtwo" rows="4" cols="50" required></textarea>
</div>

<div class="col-md-6 col-lg-12">
<label for="questionsix" class="form-label">For the future how could we encourage younger females to move towards the technology sector?</label>
<textarea class="questionsix form-control" name="future" rows="4" cols="50" required></textarea>
</div>

<div class="col-md-6 col-lg-12">
<label for="questionseven" class="form-label">From the position you are in currently what advice would you give to yourself to when you first started?</label>
  <textarea class="questionseven form-control" name="advice" rows="4" cols="50"required></textarea>
</div>

<div class="col-md-12 col-lg-12">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form> 

</div>
  </div>
 </div>
</div>









</body>



















</html>















@endsection