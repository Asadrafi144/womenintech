
@extends('layouts.app')

@section('content')



<div class="wrapper">
  <h1>This is the current list of women in the technology field who we hope can also inspire other young females to try or pursue there career within this field</h1>

@foreach($profiles as $profile)
<div class="card border-black mb-3 offset-4" style="max-width: 50rem;">
  <div class="card-header"><h1>{{$profile->occupation}}</h1>
</div>

<img src="/pictures/{{$profile->profilepic}}" alt="no image" width="300"height="200" padding="20px">
  
<div class="card-body text-black">
    <h5 class="card-title"><strong>What is your name?</strong></h5>
    <p class="card-text"> 
    {{$profile->name}}
</p></div>

<div class="card-body text-black">
    <h5 class="card-title"><strong><P> What is your current job and please provide a breif description of your role? <P></strong></h5>
    <p class="card-text"> 
    {{$profile->job}}
</p></div>

<div class="card-body text-black">
    <h5 class="card-title"><strong><p>What motivated you to pursue a career in technology?</p></strong></h5>
    <p class="card-text"> 
    {{$profile->motivation}}
</p></div>

<div class="card-body text-black">
    <h5 class="card-title"><strong><p> In your previous studies did you study anything related to IT/technology whether it was in your degree, alevels or GCSE?</p></strong></h5>
    <p class="card-text"> 
    {{$profile->education}}
</p></div>

<div class="card-body text-black">
    <h5 class="card-title"><strong><p>Did you gain experience in the above fields before? This can be at a job or from home.</p></strong></h5>
    <p class="card-text"> 
    {{$profile->experience}}
</p></div>

<div class="card-body text-black">
    <h5 class="card-title"><strong> <p>What would help motivate females in the fuuture to study a IT/technology course?</p></strong></h5>
    <p class="card-text"> 
    {{$profile->motivatetwo}}
</p></div>

<div class="card-body text-black">
    <h5 class="card-title"><strong> <p>For the future how could we encourage younger females to move towards the technology sector?</p></strong></h5>
    <p class="card-text"> 
    {{$profile->future}}
</p></div>
 
<div class="card-body text-black">
    <h5 class="card-title"><strong> <p>From the position you are in currently what advice would you give to yourself to when you first started?</p></strong></h5>
    <p class="card-text"> 
    {{$profile->advice}}
</p></div>





</div>

</div>
</div>
  
@endforeach


</div>
          


@endsection