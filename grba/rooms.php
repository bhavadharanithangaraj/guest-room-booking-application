<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge"> 
    <meta name="viewport"content="width=device-width,initial-scale=1.0">
    <title>GRBA - ROOMS</title>
    <link rel="stylesheet"href="css/common.css"/>
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>



    <?php require('inc/links.php')?>

</head>
<body class= bg-light>
<?php require('inc/header.php');?>

<div class ="my-5 px-4">
    <h2 class="fw-bold h-font text-center ">OUR ROOMS</h2>
    <div class="h-line bg-dark"></div>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-12 mb-log-0 mb-4">
          <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow mt-4">
            <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2 mb-2">FILTERS</h4>
            
             <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
        <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3"style="font-size:17px;">CHECK AVAILABILITY</h5>
        <label  class="form-label" >Check-In</label>
            <input type="date" class="form-control shadow-none">
        <label  class="form-label" >Check-Out</label>
            <input type="date" class="form-control shadow-none">
    </div>
  <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3"style="font-size:17px;">FACILITIES</h5>
        <div class="mb-2">
          <input type="checkbox" id=f1 class="form-check-input shadow-none me-1">
            <label  class="form-check-label" for="f1">Facility one</label>
        <div class="mb-2">
          <input type="checkbox" id=f2 class="form-check-input shadow-none me-1">
            <label  class="form-check-label" for="f2">Facility two</label>
        <div class="mb-2">
          <input type="checkbox" id=f3 class="form-check-input shadow-none me-1">
            <label  class="form-check-label" for="f3">Facility three</label>
       </div>
</div>
</div>
</div>

       <div class="border bg-light p-3 rounded mb-3">
           <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
           <div class="d-flex">
           <div class="me-3">
        <label  class="form-label">Adults</label>
        <input type="number"class="form-control shadow-none">
</div>
<div>
        <label  class="form-label">Childrens</label>
        <input type="number"class="form-control shadow-none">
</div>
</div>
            
</div>
</div>
</div>
</nav> 
</div>           

<!-- room cards-->
<div class="col-lg-9 col-md-12 px-4 "><br>
<div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mn-3 ">
      <img src="images/rooms/7.jpg" class="img-fluid rounded">
    </div>

    <div class="col-md-5 px-lg-1 px-md-3 px-0  ">
      <h5 class="mb-2">Simple Room</h5>
      <div class="Features mb-4 ">
      <h6 class ="mb-1">Features</h6>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        2 Rooms
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        1 Bathroom
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        1 Balcony
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
       3 Sofa 
      </span>
       </div>
       <div class="facilities mb-3">
        <h6 class="mb-1 ">Facilities</h6>
        <span class="badge rounded-pill bg-light text-dark text-wrap ">
        Wifi
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap ">
        Television
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap ">
        AC
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap ">
        Room heater
      </span>
     </div>
     <div class="guests mb-3">
        <h6 class="mb-1 ">Guests</h6>
        <span class="badge rounded-pill bg-light text-dark text-wrap ">
         3 Adults
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap ">
        2 Childrens
      </span>
</div> 

</div>
<div class="col-md-2 text-center ">
 <h6 class="mb-4">₹200 per night</h6>
    <a href="#" class ="btn btn-sm w-100 text-white custom-bg shadow-none mb-2 "> Book Now</a>
    <a href="#" class ="btn btn-sm w-100 btn-outline-dark shadow-none " >More Details</a>
  </div>
    </div>
</div>
<!--2nd room card-->
<div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mn-3">
      <img src="images/rooms/3.png" class="img-fluid rounded">
    </div>

    <div class="col-md-5 px-lg-3 px-md-3 px-0 ">
      <h5 class="mb-2">Deluxe Room</h5>
      <div class="Features mb-4 ">
      <h6 class ="mb-1">Features</h6>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        2 Rooms
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        1 Bathroom
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        1 Balcony
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
       3 Sofa 
      </span>
       </div>
       <div class="facilities mb-3">
        <h6 class="mb-1 ">Facilities</h6>
        <span class="badge rounded-pill bg-light text-dark text-wrap ">
        Wifi
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap ">
        Television
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap ">
        AC
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap ">
        Room heater
      </span>
     </div>
     <div class="guests mb-3">
        <h6 class="mb-1 ">Guests</h6>
        <span class="badge rounded-pill bg-light text-dark text-wrap ">
         3 Adults
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap ">
        2 Childrens
      </span>
</div> 

</div>
<div class="col-md-2 text-center ">
 <h6 class="mb-4">₹200 per night</h6>
    <a href="#" class ="btn btn-sm w-100 text-white custom-bg shadow-none mb-2 "> Book Now</a>
    <a href="#" class ="btn btn-sm w-100 btn-outline-dark shadow-none " >More Details</a>
  </div>
    </div>
  </div>
 <!--3rd room card-->
 <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mn-3">
      <img src="images/rooms/4.png" class="img-fluid rounded">
    </div>

    <div class="col-md-5 px-lg-2 px-md-3 px-0 ">
      <h5 class="mb-2">Luxury Room</h5>
      <div class="Features mb-4 ">
      <h6 class ="mb-1">Features</h6>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        2 Rooms
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        1 Bathroom
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        1 Balcony
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
       3 Sofa 
      </span>
       </div>
       <div class="facilities mb-3">
        <h6 class="mb-1 ">Facilities</h6>
        <span class="badge rounded-pill bg-light text-dark text-wrap ">
        Wifi
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap ">
        Television
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap ">
        AC
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap ">
        Room heater
      </span>
     </div>
     <div class="guests mb-3">
        <h6 class="mb-1 ">Guests</h6>
        <span class="badge rounded-pill bg-light text-dark text-wrap ">
         3 Adults
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap ">
        2 Childrens
      </span>
</div> 

</div>
<div class="col-md-2 text-center ">
 <h6 class="mb-4">₹200 per night</h6>
    <a href="#" class ="btn btn-sm w-100 text-white custom-bg shadow-none mb-2 "> Book Now</a>
    <a href="#" class ="btn btn-sm w-100 btn-outline-dark shadow-none " >More Details</a>
  </div>
    </div>
  </div>
</div>
</div>
<!-- footer-->
<?php require('inc/footer.php'); ?>



</body>
</html>