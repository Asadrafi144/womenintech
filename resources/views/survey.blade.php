
@extends('layouts.app')

@section('content')

<html>
<head>
<title> Survey page</title>
</head>

<body>
<div class="container">
  <div class="row col-md-5 col-lg-12">
    <div class="panel panel-danger">
      <div class="panel-heading">
      <h4 size="4">The following below is a general survey for our members to fill in by choice
   just so that we can get a hindsight of various workplaces and thoughts of people about women (mainly the technology sector).</h4>
         </div>

      <div class="panel-body">
         <form action="/survey" method="POST">
    @csrf

    <div class="col-md-6 col-lg-12">
    <label for="name" class="form-label">What is your name?</label>
    <input type="text" class="form-control" name="name" id="name" required>
    <br><br>
</div>

<div class="col-md-6 col-lg-12">
    <label for="sex" class="form-label" >What is your gender:</label>
  <select name="sex" id="sex" class="form-control">
    <option value="female">Female</option>
    <option value="male">Male</option>
    <option value="prefernottosay">Prefer not to say</option>
   </select>
</div>
  <br><br>

  <div class="col-md-6 col-lg-12">
    <label for="Job" class="form-label">Job title</label>
    <input type="text" class="form-control" name="job" id="name" required>
</div>
  
<div class="col-md-6 col-lg-12">
    <label for="questionone" >What is it like being a woman in the tech world,or working with women in the tech industry?</label>
     <textarea class="questionone form-control" name="questionone" rows="4" cols="50 "></textarea>
</div>

   <div class="col-md-6 col-lg-12">
 <label for="questionthree"> As a employee(male) or female in the tech industry have you seen any issues women have faced? if your answer was yes please state a reason why.</label>
<textarea class="questionthree form-control" name="questionthree" rows="4" cols="50" required></textarea>
</div>

<div class="col-md-6 col-lg-12">
  <label for="questionfour"> What do you believe can be done to help encourage young females to join the technology industry? </label>
<textarea class="questionfour form-control" name="questionfour" rows="4" cols="50" required></textarea>
</div>

<div class="col-md-6 col-lg-12">
  <label for="questionfive"> What changes would you make to help encourage more females to join the technology sector? </label>
<textarea class="questionfive form-control" name="questionfive" rows="4" cols="50" required></textarea> 
</div>

<div class="col-md-6 col-lg-12">
  <label for="questionsix"> Do you feel that the IT industry has changed or developed over time?</label>
<textarea class="questionsix form-control" name="questionsix" rows="4"cols="50" required></textarea>
</div>

<div class="col-md-6 col-lg-12">
<label for="questiontwo" > If your answer was no, please state why? </label>
<input type="text" class="questiontwo form-control" name="questiontwo" rows="4" cols="50"  value="optional" required>
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