
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
     <h4> Welcome to the profile page where you can make a profile to inspire younger females to join the tech industry, by giving your opinions based on your work life. 
       Together we act as a community and help narrow down the gender gap.</h4>
    
       </div>
    <div class="panel-body">
<form action="/profileupdate/{{$profiles->profileid}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6 col-lg-12">
    <label for="occupation" class="form-label" >What is your occupation</label>
  <select name="occupation" id="occupation" class="form-control">
    <option value="employer">Employer</option>
    <option value="employee">Employee</option>
    <option value="student">Student</option>
   </select>
</div>

    <div class="col-md-6 col-lg-12">
    <label for="name" class="form-label">What is your name?</label>
    <input type="text" class="form-control" name="name" value="{{$profiles->name}}" required>
   </div>

   <div class="col-md-6 col-lg-12">
   <label for="questionone" class="form-label">What is your current job and please provide a breif description of your role</label>
    <textarea class="questionone form-control" name="job"placeholder="{{$profiles->job}}"  rows="4"  cols="50" required>{{$profiles->job}}</textarea>
   </div>


   
   <div class="col-md-6 col-lg-12">
   <label for="questiontwo" class="form-label">What motivated you to pursue a career in technology?</label>
  <textarea class="questiontwo form-control" name="motivation" placeholder="{{$profiles->motivation}}"rows="4" cols="50" required>{{$profiles->motivation}}</textarea> 
   </div>


   <div class="col-md-6 col-lg-12">
   <label for="questionthree" class="form-label"> In your previous studies did you study anything related to IT/technology whether it was in your degree, alevels or GCSE?</label>
    <textarea class="questionthree form-control" name="education" placeholder="{{$profiles->education}}" rows="4" cols="50" required>{{$profiles->education}}</textarea>
    </div>

<div class="col-md-6 col-lg-12">
<label for="questionfour" class="form-label">Did you gain experience in the above fields before? This can be at a job or from home.</label>
<textarea class="questionfour form-control" name="experience" placeholder="{{$profiles->experience}}" rows="4" cols="50" required>{{$profiles->experience}}</textarea>
</div>

<div class="col-md-6 col-lg-12">
<label for="questionfour" class="form-label">What would help motivate females in the fuuture to study a IT/technology course?.</label>
<textarea class="questionfour form-control" name="motivatetwo" placeholder="{{$profiles->motivatetwo}}" rows="4" cols="50" required> {{$profiles->motivatetwo}} </textarea>
</div>



<div class="col-md-6 col-lg-12">
<label for="questionsix" class="form-label">For the future how could we encourage younger females to move towards the technology sector?</label>
<textarea class="questionsix form-control" name="future" placeholder="{{$profiles->future}}" rows="4" cols="50" required>{{$profiles->future}}</textarea>
</div>

<div class="col-md-6 col-lg-12">
<label for="questionseven" class="form-label">From the position you are in currently what advice would you give to yourself to when you first started?</label>
  <textarea class="questionseven form-control" name="advice" placeholder="{{$profiles->advice}}"rows="4" cols="50"required>{{$profiles->advice}}</textarea>
</div>
<br>
<div class="col-s-6 col-md-6 col-lg-6">
    <button type="submit" class="btn-block"><h5>Submit</h5></button>
</div>

</form> 

<form action="/remove/{{$profiles->id}}" method="POST">
  @CSRF
  @method('POST')
<div class="col-s-6 col-md-6 col-lg-6">
<button type="submit" class="btn-block"> <h5>Delete your profile</h5> </a>
</div>
</div>
</div>
  </div>
 </div>
</div>









</body>



















</html>















@endsection