@extends('layouts.rentcar')
@section('title','Edit Car')

@section('content')

@forelse ($CarDetail as $key=>$data)


<!--Page Header-->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Edit Car Details</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="home">Home</a></li>
        <li>Edit Car Details</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 


<section>
<div class="uploadcontainer">  

  <form id="contact" action="../updatecar/{{$data->id}}" method="get">
     @csrf
     {{$data->id}}
    <h2><a>{{$data->carname}}</a></h2>
    <h4><a>Provide The Details</a></h4>
    <fieldset>
      <input placeholder="Car name" type="text" name="carname" value="{{$data->carname}}">
    </fieldset>
    <fieldset>
      <input placeholder="Car Price Per Day" type="number" name="carprice" value="{{$data->carprice}}" >
    </fieldset>

    <fieldset>
      <input placeholder="Car Model" type="number" name="carmodel" value="{{$data->carmodel}}"  required autofocus>
    </fieldset>

    <fieldset>   
    <input placeholder="Car Seats" type="number" name="carseats" value="{{$data->carseats}}"  required autofocus>
    </fieldset>

    <fieldset>
      <input placeholder="Mileage" name="mileage" type="text" value="{{$data->mileage}}"  required>
    </fieldset>
    <!--fieldset>
      <input placeholder="Your Phone Number" value="{{ Auth::user()->number }}" name="personnumber" type="tel" required>
    </fieldset-->

  <input style="display:none"  value='{{ Auth::user()->id }}'  name="user_id"/>


    <fieldset>
    <div class="form-group">
              <button class="btn" type="submit" name="send" type="submit">Upload </button>
            </div>
    </fieldset>
   
  </form>
</div>

</section>
@empty
            no data found
        @endforelse

@endsection