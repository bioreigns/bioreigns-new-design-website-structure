<?php include 'header.php';?>
<?php include 'navbar.php';?>

<section class="page-hero-section">
    <div class="jumbotron-fluid page-hero-jumbotron" style="background-image:url('/img/documentation/feature-img.jpg')" >

        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="page-hero-content ">
                        <h2 class="page-title">Documentation</h2>
                        <p class="page-desc">These test results are conducted on our raw material and not our finished products.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="overlay"></div>

    </div>

</section>


<section class="my-5 py-5">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-4">

                <div class="card border-0">
                    <div class="card-body">
                        <a href="#" onclick="openModal();currentSlide(1)" data-toggle="modal" data-target="#bsModal">
                            <img class="img-fluid" src="{{asset('/img/documentation/broad-spectrum/broad-spectrum-1.png')}}" alt="">
                        </a>
                        <div class="card-title text-center my-3">
                            <h5 class="text-uppercase">Broad Spectrum</h5>
                            <a href="#" class="btn btn-block btn-outline-black" data-toggle="modal" data-target="#bsModal">View</a>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="col-12 col-md-4">
                
                <div class="card border-0">
                    <div class="card-body">
                        <a href="#" data-toggle="modal" data-target="#isoModal">
                            <img class="img-fluid" src="{{asset('/img/documentation/isolate/isolate-1.png')}}" alt="">
                        </a>
                        <div class="card-title text-center my-3">
                            <h5 class="text-uppercase">Isolate</h5>
                            <a href="#" class="btn btn-block btn-outline-black" data-toggle="modal" data-target="#isoModal">View</a>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="col-12 col-md-4">
                
                <div class="card border-0">
                    <div class="card-body">
                        <a href="#" data-toggle="modal" data-target="#fsModal">
                            <img class="img-fluid" src="{{asset('/img/documentation/full-spectrum/full-spectrum-1.png')}}" alt="">
                        </a>
                        <div class="card-title text-center my-3">
                            <h5 class="text-uppercase">full Spectrum</h5>
                            <a href="#" class="btn btn-block btn-outline-black" data-toggle="modal" data-target="#fsModal">View</a>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</section>





  <!--BS Modal -->
<div class="modal fade" id="bsModal" tabindex="-1" role="dialog" aria-labelledby="BroadSpectrum" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header d-flex align-items-center">
            <div class="controller">
                <a class="prev btn btn-outline-gold mr-2" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next btn btn-outline-gold" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <a class="btn btn-outline-gold mr-1 close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </a>
            </div>
                <div class="modal-body">
                    <div class="bsSlides">
                        <img class="img-fluid" src="{{asset('/img/documentation/broad-spectrum/broad-spectrum-1.png')}}" >
                    </div>
                
                    <div class="bsSlides">
                        <img class="img-fluid" src="{{asset('/img/documentation/broad-spectrum/broad-spectrum-2.png')}}" >
                    </div>
                
                    <div class="bsSlides">
                        <img class="img-fluid" src="{{asset('/img/documentation/broad-spectrum/broad-spectrum-3.png')}}">
                    </div>
                    
                    <div class="bsSlides">
                        <img class="img-fluid" src="{{asset('/img/documentation/broad-spectrum/broad-spectrum-4.png')}}">
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between">
                    <div class="controller">
                        <a class="prev btn btn-outline-gold mr-2" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next btn btn-outline-gold" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                     <a class="btn btn-outline-gold mr-1 close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                     </a>
            </div>
        </div>
    </div>
</div>




  <!--iso Modal -->
<div class="modal fade" id="isoModal" tabindex="-1" role="dialog" aria-labelledby="Isolate" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header d-flex align-items-center">
            <div class="controller">
                <a class="prev btn btn-outline-gold mr-2" onclick="ISOplusSlides(-1)">&#10094;</a>
                <a class="next btn btn-outline-gold" onclick="ISOplusSlides(1)">&#10095;</a>
                </div>
                <a class="btn btn-outline-gold mr-1 close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </a>
            </div>
                <div class="modal-body">
                    <div class="isoSlides">
                        <img class="img-fluid" src="{{asset('/img/documentation/isolate/isolate-1.png')}}" >
                    </div>
                
                    <div class="isoSlides">
                        <img class="img-fluid" src="{{asset('/img/documentation/isolate/isolate-2.png')}}" >
                    </div>
                
                    <div class="isoSlides">
                        <img class="img-fluid" src="{{asset('/img/documentation/isolate/isolate-3.png')}}">
                    </div>
                    
                    <div class="isoSlides">
                        <img class="img-fluid" src="{{asset('/img/documentation/isolate/isolate-4.png')}}">
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between">
                    <div class="controller">
                        <a class="prev btn btn-outline-gold mr-2" onclick="ISOplusSlides(-1)">&#10094;</a>
                        <a class="next btn btn-outline-gold" onclick="ISOplusSlides(1)">&#10095;</a>
                    </div>
                     <a class="btn btn-outline-gold mr-1 close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                     </a>
            </div>
        </div>
    </div>
</div>




  <!--fs Modal -->
<div class="modal fade" id="fsModal" tabindex="-1" role="dialog" aria-labelledby="FullSpectrum" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header d-flex align-items-center">
            <div class="controller">
                <a class="prev btn btn-outline-gold mr-2" onclick="FSplusSlides(-1)">&#10094;</a>
                <a class="next btn btn-outline-gold" onclick="FSplusSlides(1)">&#10095;</a>
                </div>
                <a class="btn btn-outline-gold mr-1 close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </a>
            </div>
                <div class="modal-body">
                    <div class="fsSlides">
                        <img class="img-fluid" src="{{asset('/img/documentation/full-spectrum/full-spectrum-1.png')}}" >
                    </div>
                
                    <div class="fsSlides">
                        <img class="img-fluid" src="{{asset('/img/documentation/full-spectrum/full-spectrum-2.png')}}" >
                    </div>
                
                    <div class="fsSlides">
                        <img class="img-fluid" src="{{asset('/img/documentation/full-spectrum/full-spectrum-3.png')}}">
                    </div>
                    
                    <div class="fsSlides">
                        <img class="img-fluid" src="{{asset('/img/documentation/full-spectrum/full-spectrum-4.png')}}">
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between">
                    <div class="controller">
                        <a class="prev btn btn-outline-gold mr-2" onclick="FSplusSlides(-1)">&#10094;</a>
                        <a class="next btn btn-outline-gold" onclick="FSplusSlides(1)">&#10095;</a>
                    </div>
                     <a class="btn btn-outline-gold mr-1 close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                     </a>
            </div>
        </div>
    </div>
</div>





<script>
    function openModal() {
    document.getElementById("myModal").style.display = "block";
    }
    function closeModal() {
    document.getElementById("myModal").style.display = "none";
    }
    var slideIndex = 1;
    showBsSlides(slideIndex);
    function plusSlides(n) {
    showBsSlides(slideIndex += n);
    }
    function currentSlide(n) {
    showBsSlides(slideIndex = n);
    }
    // bs slides
    function showBsSlides(n) {
    var i;
    var slides = document.getElementsByClassName("bsSlides");
    var dots = document.getElementsByClassName("demo");
    //   var captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    //   captionText.innerHTML = dots[slideIndex-1].alt;
    }
</script>

<script>
// iso slides ==================================================================================================================
var ISOslideIndex = 1;
showIsoSlides(ISOslideIndex);
function ISOplusSlides(n) {
  showIsoSlides(ISOslideIndex += n);
}
function ISOcurrentSlide(n) {
  showIsoSlides(ISOslideIndex = n);
}
function showIsoSlides(n) {
  var i;
  var slides = document.getElementsByClassName("isoSlides");
  var dots = document.getElementsByClassName("demo");
//   var captionText = document.getElementById("caption");
  if (n > slides.length) {ISOslideIndex = 1}
  if (n < 1) {ISOslideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[ISOslideIndex-1].style.display = "block";
  dots[ISOslideIndex-1].className += " active";
//   captionText.innerHTML = dots[slideIndex-1].alt;
}
    
</script>



<script>
// fs slides ==================================================================================================================
var FSslideIndex = 1;
showFsSlides(FSslideIndex);
function FSplusSlides(n) {
  showFsSlides(FSslideIndex += n);
}
function FScurrentSlide(n) {
  showFsSlides(FSslideIndex = n);
}
function showFsSlides(n) {
  var i;
  var slides = document.getElementsByClassName("fsSlides");
  var dots = document.getElementsByClassName("demo");
//   var captionText = document.getElementById("caption");
  if (n > slides.length) {FSslideIndex = 1}
  if (n < 1) {FSslideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[FSslideIndex-1].style.display = "block";
  dots[FSslideIndex-1].className += " active";
//   captionText.innerHTML = dots[slideIndex-1].alt;
}
    
</script>



<?php include 'footer.php';?>