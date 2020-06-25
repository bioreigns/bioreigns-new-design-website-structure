<?php include 'header.php';?>
<?php include 'navbar.php';?>


    <!-- main content -->

    <main>

    <section class="page-hero-section">
        <div class="jumbotron-fluid page-hero-jumbotron" style="background-image: url('img/page-hero-bg.png');" >

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="page-featured-image mx-auto p-5">
                            <img class="img-fluid" src="img/biodefense.png" alt="" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex align-items-center">
                        <div class="page-hero-content">
                            <h2 class="font-weight-bold">Biodefense</h2>
                            <h5 class="font-weight-bold mb-5">lorem ipsum kamuka moa ko</h5>

                            <div class="product-price">
                                <h3 id="price" class="font-weight-bold"></h3>
                            </div>

                            <div class="strength mb-4">
                                    <small class="text-black">lorems&nbsp;</small>
                                    <small class="text-black">212</small><br>

                            </div>
                            <div class="f"></div>
                            <a href="{{ config('bioreigns.shopping_cart_url') }}/auth/login?from={{ $rep_id }}&redirect={{ urlencode($product->buy_url) }}" class="btn btn-gold mt-3">SHOP NOW!</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="overlay"></div>

        </div>

    </section>



        <section class="product-about my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h3 class="text-gold">WHAT IS IT?</h3>
                        <p>If after eating right, sleeping well, and following all best practices to protect yourself from germs, you still want to do more, there’s BioDefense. Help your body protect itself with an all-natural combination of nutrients that
                            support immune function. </p>
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="text-gold">WHAT DOES IT DO? </h3>
                        <p>Helps your immune cells fight pathogens by stimulating and enhancing their natural defensive processes. EGCG can increase the power of Natural Killer immune cells to destroy pathogens, and 1,3-ß D-Glucan can enhance the function
                            of macrophage cells, which engulf and digest foreign substances in the body.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <section class="product-ingredients bg-white my-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 col-md-4 d-flex align-items-center mb-5">
                        <div class="">
                            <img class="img-fluid" src="img/biodefense.png" alt="">
                            <div class="icons d-block mt-5">
                                <img width="100" class="img-fluid" src="img/organically-grown.png" alt="">
                                <img width="200" class="img-fluid" src="img/biocx-logo.png" alt="">
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-8 d-flex align-items-center">
                        <div class="pi-content">
                            <div class="ingrdients">
                                <h6 class="text-gold">FULL LIST OF INGREDIENTS</h6>
                                <p>BioCx Proprietary Complex (Sterile DI Water, Naturally Occurring Citric Acid) with Curcumin, Green Tea Extract (EGCG), 1,3-ß D-Glucan
                                </p>
                            </div>
                            <div class="directions">
                                <h6 class="text-gold">RECOMMENDED USE
                                </h6>
                                <p>Place one one full dropper under the tongue daily, or add one dropper to your favorite beverage. Increase or decrease amount as needed. Store in a cool, dry place.
                                </p>
                            </div>
                            <div class="reminder">
                                <h6 class="text-gold">REMINDER
                                </h6>
                                <p>This product is not for use by or sale to persons under the age of 18. A Doctor’s advice should be sought before using this and any supplemental dietary product. *These statements have not been evaluated by the FDA. This
                                    product is not intended to diagnose, treat, cure or prevent any disease.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section class="key-ingredients my-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-5 font-weight-bold text-gold">KEY INGREDIENTS AND <br> FUNCTIONS</h2>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h6 class="text-gold">Epigallocatechin-3-gallate (EGCG</h6>
                                <p>An antioxidant derived from tea leaves that supports your liver, your blood vessels, your heart, and stimulates the immune system.
                                </p>
                            </div>
                            <div class="col-12 col-md-6">
                                <h6 class="text-gold">1,3ß D-glucan</h6>
                                <p>Along with EGCG, can boost the ability of NK immune cells to better destroy pathogens.
                                </p>
                            </div>
                            <div class="col-12 col-md-6">
                                <h6 class="text-gold">Quercetin</h6>
                                <p>A naturally occuring polyphenol that can increase the bioavailability of EGCG and help boost its antioxidant properties. On its own, quercetin can help with inflammation.
                                </p>
                            </div>
                            <div class="col-12 col-md-6">
                                <h6 class="text-gold">Curcumin</h6>
                                <p>An extract of turmeric that can help the body manage pain, stress, and inflammation.
                                </p>
                            </div>
                            <div class="col-12 col-md-6">
                                <h6 class="text-gold">BioCx</h6>
                                <p>Our proprietary complex that delivers molecules with low bioavailability, like CBD and curcumin, to the body in a way that enhances absorption.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="other-products my-5">
            <div class="container">
                <h2 class="mb-5 font-weight-bold text-gold">YOU MAY ALSO LOVE</h2>
                <div class="row blog">
                    <div class="col-md-12">
                        <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                            <!-- <ol class="carousel-indicators">
                                <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#blogCarousel" data-slide-to="1"></li>
                            </ol> -->

                            <!-- Carousel items -->
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <div class="row">

                                        <div class="col-12 col-sm-12 col-md-4">
                                            <div class="card border-0 shadow-sm">
                                                <div class="px-3 pt-5 mx-auto">
                                                    <img width="200px" class="img-fluid" src="img/biodefense.png" alt="">
                                                </div>

                                                <div class="card-body">
                                                    <hr class="seprator-black">
                                                    <div class="product-title mb-4">
                                                        <h5 class="font-weight-bold">BIODEFENSE</h5>
                                                        <small class="text-gray">Naturally reinforce your immune system</small>
                                                    </div>
                                                    <div class="product-price my-4">
                                                        <h5 class="font-weight-bold">$ 89.99 </h5>
                                                    </div>

                                                    <a href="view-product.html" class="btn btn-outline-black btn-block">LEARN MORE</a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-12 col-sm-12 col-md-4">
                                            <div class="card border-0 shadow-sm">
                                                <div class="px-3 pt-5 mx-auto">
                                                    <img width="200px" class="img-fluid" src="img/biodefense.png" alt="">
                                                </div>

                                                <div class="card-body">
                                                    <hr class="seprator-black">
                                                    <div class="product-title mb-4">
                                                        <h5 class="font-weight-bold">BIODEFENSE</h5>
                                                        <small class="text-gray">Naturally reinforce your immune system</small>
                                                    </div>
                                                    <div class="product-price my-4">
                                                        <h5 class="font-weight-bold">$ 89.99 </h5>
                                                    </div>

                                                    <a href="view-product.html" class="btn btn-outline-black btn-block">LEARN MORE</a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-12 col-sm-12 col-md-4">
                                            <div class="card border-0 shadow-sm">
                                                <div class="px-3 pt-5 mx-auto">
                                                    <img width="200px" class="img-fluid" src="img/biodefense.png" alt="">
                                                </div>

                                                <div class="card-body">
                                                    <hr class="seprator-black">
                                                    <div class="product-title mb-4">
                                                        <h5 class="font-weight-bold">BIODEFENSE</h5>
                                                        <small class="text-gray">Naturally reinforce your immune system</small>
                                                    </div>
                                                    <div class="product-price my-4">
                                                        <h5 class="font-weight-bold">$ 89.99 </h5>
                                                    </div>

                                                    <a href="view-product.html" class="btn btn-outline-black btn-block">LEARN MORE</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!--.row-->
                                </div>
                                <!--.item-->

                            </div>
                            <!--.carousel-inner-->
                        </div>
                        <!--.Carousel-->

                    </div>
                </div>
            </div>
        </section>



    </main>


    <?php include 'footer.php';?>