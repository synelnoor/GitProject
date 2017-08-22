<div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel"  style="margin-top: 50px; margin-bottom: 0px">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{ asset('/img/m1.jpg')}}" style="width: 100%; height: 500px;" >
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('/img/m2.jpg')}}" style="width: 100%; height: 500px;">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    
    <div class="item">
      <img src="{{ asset('/img/m3.jpg')}}" style="width: 100%; height: 500px;">
      <div class="carousel-caption">
        ...
      </div>
    </div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="artikel">
   
      <div class="col-lg-4">
       
         <img src="{{ asset('/img/m1.jpg')}}" class="img-circle" alt="Generic placeholder image" style="width: 140px; height: 140px;">
        <h2 class="judul">Kampus Prof.Dr.Moestopo</h2>
        <p> ... </p>
        <p><a href="#" class="btn btn btn-warning btn-xs">Selengkapnya >></a></p>

      </div>

       <div class="col-lg-4">
       
         <img src="{{ asset('/img/m2.jpg')}}" class="img-circle" alt="Generic placeholder image" style="width: 140px; height: 140px;">
        <h2 class="judul">Kampus Prof.Dr.Moestopo</h2>
        <p> ... </p>
        <p><a href="#" class="btn btn btn-warning btn-xs">Selengkapnya >></a></p>

      </div>
       <div class="col-lg-4">
       
         <img src="{{ asset('/img/m3.jpg')}}" class="img-circle" alt="Generic placeholder image" style="width: 140px; height: 140px;">
        <h2 class="judul">Kampus Prof.Dr.Moestopo</h2>
        <p> ... </p>
        <p><a href="#" class="btn btn btn-warning btn-xs">Selengkapnya >></a></p>

      </div>
   
  </div>