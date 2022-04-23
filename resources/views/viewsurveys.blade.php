
@extends('layouts.app')

@section('content')



<div class="wrapper">
  <h1>This is the current list of women in the technology field who we hope can also inspire other young females to try or pursue there career within this field</h1>

@foreach($surveys as $survey)
<div class="card border-black mb-3 offset-4" style="max-width: 50rem;">
  <div class="card-header"><h1>{{$survey->name}}</h1>
</div>

  

<div class="card-body text-black">
    <h5 class="card-title"><strong>What is your name?</strong></h5>
    <p class="card-text"> 
    {{$survey->name}}
</p></div>


<div class="card-body text-black">
    <h5 class="card-title"><strong><P> What is your gender?<P></strong></h5>
    <p class="card-text"> 
    {{$survey->sex}}
</p></div>


<div class="card-body text-black">
    <h5 class="card-title"><strong><p>Job title?</p></strong></h5>
    <p class="card-text"> 
    {{$survey->job}}
</p></div>


<div class="card-body text-black">
    <h5 class="card-title"><strong><p> As an employee, male or female in the tech industry have you seen any issues women have faced? 
        if your answer was yes please state a reason why.
    </p></strong></h5>
    <p class="card-text"> 
    {{$survey->questionone}}
</p></div>


<div class="card-body text-black">
    <h5 class="card-title"><strong><p>What do you believe can be done to help encourage young femaless to join the tech industry?</p></strong></h5>
    <p class="card-text"> 
    {{$survey->questiontwo}}
</p></div>


<div class="card-body text-black">
    <h5 class="card-title"><strong> <p>What changes would you make to help encourage more females to join the technology sector?</p></strong></h5>
    <p class="card-text"> 
    {{$survey->questionthree}}}
</p></div>

 
<div class="card-body text-black">
    <h5 class="card-title"><strong> <p>Do you feel that the IT industry has changed or developed over time?</p></strong></h5>
    <p class="card-text"> 
    {{$survey->questionfour}}}
</p></div>
 
<div class="card-body text-black">
    <h5 class="card-title"><strong> <p>If your answer was no, please state why?</p></strong></h5>
    <p class="card-text"> 
    {{$survey->questionfive}}
</p></div>
 



</div>

</div>
</div>
  
@endforeach


</div>
          


@endsection