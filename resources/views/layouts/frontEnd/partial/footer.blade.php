<footer>

    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="footer-section">

                    <a class="logo" href="#"><img src="{{ asset('assets/frontEnd/images/logo.png') }}" alt="Logo Image"></a>

                    @foreach( $siteInfo as $site_Info)
                        <p class="copyright">{{ $site_Info->copyright }}</p>
                    @endforeach
                    <p class="copyright">Designed by <a href="#" target="_blank">{{ $site_Info->developedBy }}</a></p>
                    <ul class="icons">
                        <li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
                    </ul>

                </div><!-- footer-section -->
            </div><!-- col-lg-4 col-md-6 -->

            <div class="col-lg-4 col-md-6">
                <div class="footer-section">
                    <h4 class="title"><b>CATAGORIES</b></h4>

                    <ul>
                        @foreach($categories as $object)

                            <li><a href="{{ route('category.posts',$object->slug) }}">{{ $object->name }}</a></li>
                        @endforeach


                    </ul>

                </div><!-- footer-section -->
            </div><!-- col-lg-4 col-md-6 -->

            <div class="col-lg-4 col-md-6">
                <div class="footer-section">

                    <h4 class="title"><b>SUBSCRIBE</b></h4>
                    <div class="input-area">

                            <form class="" role="form" method="POST" action="{{ route('subscriber.store') }}">
                            {{ csrf_field() }}

                            <input name="email" class="email-input" type="email" placeholder="Enter your email">
                            <button class="submit-btn" type="submit"><i class="icon ion-ios-email-outline"></i></button>
                        </form>
                    </div>

                </div><!-- footer-section -->
            </div><!-- col-lg-4 col-md-6 -->

        </div><!-- row -->
    </div><!-- container -->
</footer>