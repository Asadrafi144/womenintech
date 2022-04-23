
@extends('layouts.app')

@section('content')


<div class="dropdown" style="float:left;">
  <button class="btn btn-secondary">Sort by</button>
  <div class="dropdown-content" style="left:0;">
    <a href="sortbyasc">Date ascending</a>
    <a href="sortbydesc">Date descending</a>
    
  </div>
</div>

<div class= "container">
  <div class="row col-md-5 col-lg-12">
    <div class="panel panel-pink">
      <div class="panel-heading">
<h1>Future opportunities</h1>
<h3>This is the chance for many women out there to get together during social events and help one another. 
  This could be anything from motivational speeches for the young females out there aswell as job opportunities! 
  Which could be a leap foward or a stepping stone into your tech career!</h3>
</div>
      </div>
   </div>
</div>
@foreach($events as $event)
<div class="card border-black mb-3 offset-4" style="max-width: 50rem;">
  <div class="card-header"><h1>{{$event->title}}</h1>
</div>
  <div class="card-body text-black">
    <h5 class="card-title"><strong>Address and postcode of the event</strong></h5>
    <p class="card-text"> 
{{$event->location}}</p>
  </div>
  <div class="card-body text-black">
    <h5 class="card-title"><strong>Purpose  of the event?</strong> </h5>
    <p class="card-text">
{{$event->description}}</p>
  </div>
  <div class="card-body text-black">
    <h5 class="card-title"><strong>Date</strong> </h5>
    <p class="card-text">
{{$event->date}}</p>
  </div>
  <div class="card-body text-black">
    <h5 class="card-title"><strong>Time</strong> </h5>
    <p class="card-text">
{{$event->time}}</p>
  </div>
</div>

@endforeach

@endsection