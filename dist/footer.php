<footer class="mt-5">
    <div class="footer-wrap mt-5">

        <div class="overlay"></div>

        <div class="container footer-menu pt-5">
            <div class="row">

                <div class="col-12 col-md-5 text-center text-md-left">
                    <div class="footer-logo">
                        <img class="logo-footer mb-2" src="img/bioreigns-icon.png" width="80" alt="">
                    </div>
                    <span class="mb-3">Join our team. <br>
                            Become a rep click <a class="distributor-link"
                                                  href="{{ url('/rep-signup') }}/{{ $rep_id }}">here</a></span>
                    <div class="social-media mt-3">
                        <h6 class="footer-title-menu">FOLLOW US</h6>
                        <a href="https://www.facebook.com/bioreigns/" target="_blank" class="hvr-grow mr-3"><i
                                        class="fab fa-facebook-square fa-2x"></i></a>
                        <a href="https://www.instagram.com/bioreigns/" target="_blank" class="hvr-grow mr-3"><i
                                        class="fab fa-instagram fa-2x" aria-hidden="true"></i></a>
                        <a href="https://vimeo.com/bioreigns" target="_blank" class="hvr-grow mr-3"><i
                                        class="fab fa-vimeo-square fa-2x" aria-hidden="true"></i></a>
                    </div>
                </div>

                <div class="col-12 col-md-7 \ mt-5 mt-md-2 mt-lg-0">
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <h6 class="footer-title-menu">CONTACT US</h6>
                            <span class="mb-2 d-block">
                                    U.S. Customer Service <br>
                                    1-949-922-2032</span>
                            <span class="d-block">support@bioreigns.com</span>
                        </div>
                        <div class="col-3 col-lg-4">
                            <h6 class="footer-title-menu">ADDRESS</h6>
                            <address>BioReigns Corporate <br> Headquarters<br>
                                    1451 Edinger Ave<br> Unit D, Tustin, <br> CA 92780
                                </address>
                        </div>

                        <div class="col-3 col-lg-4">
                            <h6 class="footer-title-menu">QUICK LINKS</h6>
                            <ul class="list-unstyled">
                                <li class="list-item my-2"><a class="list-links" href="/">Home</a>
                                </li>
                                <li class="list-item my-2"><a class="list-links" href="{{ config('bioreigns.shopping_cart_url') }}/auth/login?from={{ $rep_id }}">Shop</a></li>
                                <li class="list-item my-2"><a class="list-links" href="all-products.php">Products</a>
                                </li>
                                <li class="list-item my-2"><a class="list-links" href="technology.php">Technology</a>
                                </li>
                                <li class="list-item my-2"><a class="list-links" href="faq.php">FAQs</a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <div class="container mt-4">
            <div class="card border-0 legal-text bg-transparent">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <small>This product is not for use by or sale to persons under the age of 18. This
                                    product should be used only as directed on the label. It should not be used if you
                                    are pregnant or nursing. Consult with a physician before use if you
                                    have a serious medical condition or use prescription medications.</small>
                        </div>
                        <div class="col-12 col-md-4">
                            <small>
                                    A Doctor's advice should be sought before using this and any supplemental dietary
                                    product. All trademarks and copyrights are property of their respective owners and
                                    are not affiliated with nor do they endorse this product.
                                </small>
                        </div>
                        <div class="col-12 col-md-4">
                            <small>
                                    These statements have not been evaluated by the FDA. This product is not intended to
                                    diagnose, treat, cure or prevent any disease. Individual weight loss results will
                                    vary. By using this site, you agree to follow the Privacy Policy and all Terms &
                                    Conditions
                                    printed on this site. Void Where Prohibited by Law.
                                </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mode-payment text-center my-3">
            <a href="" class="mr-2"><i class="fab fa-cc-visa fa-2x" aria-hidden="true"></i></a>
            <a href="" class="mr-2"><i class="fab fa-cc-mastercard fa-2x" aria-hidden="true"></i></a>
            <a href="" class="mr-2"><i class="fab fa-cc-amex fa-2x" aria-hidden="true"></i></a>
            <a href="" class="mr-2"><i class="fab fa-cc-discover fa-2x" aria-hidden="true"></i></a>
        </div>

        <div class="copyrights py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 order-1 order-md-0 d-flex justify-content-center justify-content-md-start">
                        <span>© 2020 Bio-Reigns Inc, All Rights Reserved</span>
                    </div>

                    <div class="col-12 col-md-6 order-1 order-md-1 d-flex justify-content-center justify-content-md-end">

                        <ul class="policies-list list-unstyled d-flex m-0">
                            <li class="list-item mx-2"><a class="list-links" href="terms-and-conditions.php">Terms and
                                        Conditions</a></li>
                            <li class="list-item mx-2"><a class="list-links" href="privacy-policy.php">Privacy Policy</a>
                            </li>
                            <li class="list-item mx-2"><a class="list-links" href="refund-policy.php">Refund
                                        Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>

</footer>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/custom.js"> </script>
</body>

</html>