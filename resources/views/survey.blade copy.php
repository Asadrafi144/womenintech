
@extends('layouts.app')

@section('content')


<div class="conatiner mt-5">

 <h1>The following below is a general survey for our members to fill in by choice
   just so that we can get a hindsight of various workplaces and thoughts of people about women (mainly the technology sector).
  </h1>


  <form action="/survey" method="POST">
    @csrf

    <div class="col-md-6">
    <label for="name" class="form-label">What is your name?</label>
    <input type="text" class="form-control" name="name" id="name" required>
    <br><br>
</div>

<div class="col-md-6">
    <label for="sex" class="form-label" >What is your gender:</label>
  <select name="sex" id="sex" class="form-control">
    <option value="female">Female</option>
    <option value="male">Male</option>
    <option value="prefernottosay">Prefer not to say</option>
   </select>
</div>
  <br><br>

  <div class="col-md-6">
    <label for="Job" class="form-label">Job title</label>
    <input type="text" class="form-control" name="job" id="name" required>
</div>
  
<div class="col-md-6">
    <label for="questionone" class="form-control">What is it like being a woman in the tech world?</label>
    <br>
     <textarea class="questionone" name="questionone" rows="4" cols="50">
  </textarea>
</div>

    <div class="form-group">
    <label for="gender"> Gender</label>
    <div>
      <label for="male" class="radio-inline"><input type="radio" name="gender" id="male">male</label>
      <label for="female" class="radio-inline"><input type="radio" name="gender" id="female">female</label>
      <label for="other" class="radio-inline"><input type="radio" name="gender" id="other">other</label>
</div>
   </div>
<div class="col-md-6">
<p> If your answer was no, please state why? </p>
<textarea id="questiontwo" name="questiontwo" rows="4" cols="50" required>
</textarea>
</div>

<div class="col-md-6">
 <p> As a employee(male) or female in the tech industry have you seen any issues women have faced? if your answer was yes please state a reason why.</p>
<textarea id="questionthree" name="questionthree" rows="4" cols="50">
  </textarea>
</div>

<div class="col-md-6">
  <p> What do you believe can be done to help encourage young females to join the technology industry? </p>
<textarea id="questionfour" name="questionfour" rows="4" cols="50" required>
  </textarea>
</div>

<div class="col-md-6">
  <p> What changes would you make to help encourage more females to join the technology sector? </p>
<textarea id="questionfive" name="questionfive" rows="4" cols="50" required>
  </textarea> 
</div>

<div class="col-md-6">
  <p> Do you feel that the IT industry has changed or developed over time?</p>
<textarea id="questionsix" name="questionsix" rows="4" cols="50" required>
  </textarea>
</div>
<div class="col-md-6 col-lg-12">
<label for="questiontwo" > If your answer was no, please state why? </label>
<textarea class="questiontwo form-control" name="questiontwo" rows="4" cols="50" required></textarea>
</div>


    <div class="col-md-12">
    <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>
</div>       

@endsection