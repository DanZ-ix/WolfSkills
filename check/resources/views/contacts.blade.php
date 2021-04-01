@extends("layouts.app")


@section('title')
    Контакты
@endsection



@section('content')
<h1 style="text-align: center;">Контакты</h1>

<div class="container">
  <div style="text-align:center">
    
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <div id="map" style="width:100%;height:500px"></div>
    </div>
    <div class="column">
      <form action="{{ route('home') }}">
        <h3><label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.."></h3>
        <h3><label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name.."></h3>
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:50px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

<!-- Initialize Google Maps -->
<script>
function myMap() {
  var myCenter = new google.maps.LatLng(51.508742,-0.120850);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 12};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
@endsection



