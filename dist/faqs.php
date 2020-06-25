<?php include 'header.php';?>
<?php include 'navbar.php';?>

    <!-- main content -->

    <main>

    <section class="page-hero-section">
        <div class="jumbotron-fluid page-hero-jumbotron" style="background-image:url('/img/faqs-banner.png')" >
    
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="page-hero-content ">
                            <h2 class="page-title">Frequently Ask Questions</h2>
                            <p class="page-desc">HERE ARE SOME COMMON
                                QUESTIONS ABOUT BIOREIGNS.</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="overlay"></div>
    
        </div>
    
    </section>



    <section class="all-products my-5 py-5">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div id="accordion" role="tablist">
                        <div class="card border-0 mb-2">
                            <div class="card-header bg-white border-0 collapsed collapse-icon align-items-center" role="tab" id="heading-1" data-toggle="collapse" href="#collapse-1" aria-expanded="false" aria-controls="collapseOne" style="cursor: pointer">
                                <div class="faq-title mb-0 d-flex justify-content-between">
                                    <a class=" font-weight-bold text-gold p-text">
                                        Q: question
                                    </a>

                                </div>
                            </div>

                            <div id="collapse-1" class="collapse" role="tabpanel"  aria-labelledby="heading-1">
                                <div class="card-body">
                                    answer
                                </div>
                            </div>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </section>


    </main>
    
<?php include 'footer.php';?>