<?php include 'header.php';?>
<?php include 'navbar.php';?>
<section class="page-hero-section">
            <div class="jumbotron-fluid page-hero-jumbotron">
                <video preload muted autoplay loop id="video-background" class="embed-responsive-item">
                    <source
                        src="https://player.vimeo.com/external/368574039.hd.mp4?s=c1aab3a709fccb0cbf5f2c9c6d34b5185fadef6c&profile_id=175"
                        type="video/mp4">
                </video>
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <div class="page-hero-content">
                                <h2 class="page-title">BRAIN TESTING</h2>
                                <p class="page-desc">Nourishing your body with the vitamins and minerals you need is challenging. Today’s fruits and vegetables are less nutritious than they were fifty years ago. You might think of taking supplements as a luxury, but these
                                    days it has become a necessity to get all the nutrients</p>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="overlay"></div>
        
            </div>
        
        </section>    


    <section id="brain-testing" class="mt-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="card border-0">
                        <div class="card-body">
                            <a href="#" data-toggle="modal" data-target="#testModal">
                                <img class="img-fluid" src="img/test/test-1.png" alt="">
                            </a>
                            <div class="card-title text-center my-3">
                                <h5 class="text-uppercase">Test Result</h5>
                                <a href="#" class="btn btn-block btn-outline-black" data-toggle="modal" data-target="#testModal">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- 
    {{-- modal test --}} -->

    <div class="modal fade" id="testModal" tabindex="-1" role="dialog" aria-labelledby="TestResult" aria-hidden="true">
        <div class="modal-dialog modal-lg">
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
                        <div class="testSlides">
                            <img class="img-fluid" src="img/test/test-1.png" >
                        </div>
                    
                        <div class="testSlides">
                            <img class="img-fluid" src="img/test/test-2.png" >
                        </div>
                    
                        <div class="testSlides">
                            <img class="img-fluid" src="img/test/test-3.png">
                        </div>
                        
                        <div class="testSlides">
                            <img class="img-fluid" src="img/test/test-4.png">
                        </div>
                        <div class="testSlides">
                            <img class="img-fluid" src="img/test/test-5.png">
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
    var slides = document.getElementsByClassName("testSlides");
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
        var player = new Vimeo.Player(document.querySelector('#brain-video iframe'));
        player.setVolume(0);
        player.play();
        player.setLoop(true);
    </script>

<?php include 'footer.php';?>