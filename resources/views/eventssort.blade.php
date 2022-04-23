
@extends('layouts.app')

@section('content')

<form action="/sortby" method="POST" enctype="multipart/form-data">
<select name="sortby" id="sort">
    <option value="ascending" name="sortby">Ascending date</option>
    <option value="descending" name="sortby">descending date</option>
     </select>
  <br><br>

  <input type="submit" value="Submit"> name
</form>

<h1>Network with other women</h1>
<h2>This is the chance for many women out there to get together during social events and help one another. This could be anything from motivational speeches for the young females out there aswell as job opportunities! Which could be a leap foward or a stepping stone into your tech career!</h2>

@foreach($events as $event)

<strong>Name of event</strong>
{{$event->title}}
<br>
<strong>address and postcode of the event</strong>
{{$event->location}}
<br>
<strong>Purpose  of the event?</strong>  <
{{$event->description}}
<br>
<strong>Date</strong>
{{$event->date}}
<br>
<strong>Time of event</strong>
{{$event->date}}
<br>

   

@endforeach

@endsection