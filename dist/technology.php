<?php include 'header.php';?>
<?php include 'navbar.php';?>

    <!-- main content -->

    <main>
    <section class="page-hero-section">
    <div class="jumbotron-fluid page-hero-jumbotron" style="background-image:url('/img/documentation/feature-img.jpg')" >

        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="page-hero-content">
                        <h2 class="page-title">OIL AND WATER DON'T MIX!</h2>
                        <p class="page-desc">Nourishing your body with the vitamins and minerals you need is challenging. Today’s fruits and vegetables are less nutritious than they were fifty years ago. You might think of taking supplements as a luxury, but these
                            days it has become a necessity to get all the nutrients</p>
                        <a class="btn btn-gold mt-3" href="braintesting.php">VIEW TEST RESULTS</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="overlay"></div>

    </div>

</section>



<section class="imagine-section my-5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 d-flex align-items-center">
                <img class="img-fluid" src="img/laboratory.jpg" alt="">
            </div>
            <div class="col-12 col-sm-12 col-md-6 d-flex align-items-center">
                <div>
                    <h2 class="font-weight-bold mb-3 text-gold">BioReigns Water Dissolvable Technology
                    </h2>
                    <p>Our Laboratory partner has developed the only true water dissolvable CBD complex. These products are formed with pharmaceutical technology used in circumstances of increasing vital water insoluble protein for patients that
                        are ill. Unlike the competition, there is no nano complex, which merely disperses small clusters (nano-size) of CBD molecules in an otherwise insoluble mixture. Eventually, all nano products will separate, like oil and
                        water, providing minimal bioavailability.</p>
                    <a class="btn btn-gold mt-3 distributor-link" href="{{ config('bioreigns.shopping_cart_url') }}/auth/login?from={{ $rep_id }}">SHOP PRODUCTS</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="breacktrough-section my-5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 order-1 order-md-0 d-flex align-items-center">
                <div>
                    <h2 class="font-weight-bold mb-3 text-gold">Understanding Bioavailability
                    </h2>
                    <p>Our solubilization tool, is safe, stable and omni potent because of the increase in bioavailability. The Biopharmaceutics Classification System (BCS) predicts oral drug absorption based on the chemical’s aqueous solubility
                        and intrinsic permeability through the gastrointestinal mucosa. Studies have been shown that Cannabinoids have limited water solubility, considered as “BCS class II”. These studies demonstrate why our CBD and Curcumin complex
                        is the best solution to absorb into the human body. Our bodies are made up of approximately 65% water and in order for us to readily absorb materials we need to consume 100% water based CBD and Curcumin.
                    </p>
                    <a class="btn btn-gold mt-3" href="braintesting.php">VIEW TEST RESULTS</a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 order-0 order-md-1 d-flex align-items-center">
                <img class="img-fluid" src="img/centrifuge.jpg" alt="">
            </div>
        </div>
    </div>
</section>





    </main>


<?php include 'footer.php';?>