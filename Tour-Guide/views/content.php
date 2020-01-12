<h2>I am in  content . php</h2>

<div class="container">
	<div class="row">
    <div class="col-lg-8 col-sm-12 Slidelayout">


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/sheesh_mehal.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Sheesh Mehal</h3>
        <p>We Love Lahore!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="../images/lahore_fort.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Lahore Fort</h3>
        <p>Thank you , Lahore Fort!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="../images/char_minar.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Char Minar</h3>
        <p>We love the Pakistan!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
 	</div>
  </div>
   <!-- filteres -->
   <br><br>

  <div class="row">
  <div class="col-lg-8 col-sm-12 Slidelayout">

    
    <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Filter Results
    <span class="caret"></span></button>
      <ul class="dropdown-menu">
      <input class="form-control" id="myInput" type="text" placeholder="Search..">
      <li><a href="#">lahore</a></li>
      <li><a href="#">islamabad</a></li>
      <li><a href="#">karachi</a></li>
      <li><a href="#">multan</a></li>
      <li><a href="#">rawalpindi</a></li>
      <li><a href="#">murree</a></li>
    </ul>
 
    <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Filter Results2
    <span class="caret"></span></button>
      <ul class="dropdown-menu">
      <input class="form-control" id="myInput2" type="text" placeholder="Search..">
      <li><a href="#">Culture</a></li>
      <li><a href="#">Heritage</a></li>
      <li><a href="#">Photogenic places</a></li>
      <li><a href="#">Historical Places</a></li>
      <li><a href="#">FOOD</a></li>
    </ul>


</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".dropdown-menu li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});


$(document).ready(function(){
  $("#myInput2").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".dropdown-menu li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>



  </div>
  	



  </div>


