<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('Website.LinkHeader')
  </head>
  <body>
    <div class="wrapper">
        <header>
            <div class="header-part header-reduce sticky">
              @include('Website.Header')
              @include('Website.Menu')
            </div>
        </header>
        <main>
          <div class="main-part">
            @include('Website.Slide')
            @include('Website.About')
            @include('Website.Product')
            <section class="food-hours home-icon wow fadeInDown" data-stellar-offset-parent="true" data-stellar-background-ratio="0.5" data-wow-duration="1000ms" data-wow-delay="300ms" style="background-image: url('/images/banner2.jpg');">
                    <div class="icon-default icon-gold">
                        <img src="/images/icon19.png" alt="">
                    </div>
                    <div class="container">
                        <div class="food-blog">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12 food-mxs">
                                    <div class="food-blog-inner">
                                        <div class="food-item">
                                            <div class="food-item-inner">
                                                <img src="/images/icon15.png" alt="">
                                            </div>
                                        </div>
                                        <h2>Breakfast</h2>
                                        <span>8.00 am 10.00 am</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12 food-mxs">
                                    <div class="food-blog-inner">
                                        <div class="food-item">
                                            <div class="food-item-inner">
                                                <img src="/images/icon16.png" alt="">
                                            </div>
                                        </div>
                                        <h2>Lunch</h2>
                                        <span>1.00 am 2.00 am</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12 food-mxs">
                                    <div class="food-blog-inner">
                                        <div class="food-item">
                                            <div class="food-item-inner">
                                                <img src="/images/icon17.png" alt="">
                                            </div>
                                        </div>
                                        <h2>Dinner</h2>
                                        <span>7.00 am 9.00 am</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12 food-mxs">
                                    <div class="food-blog-inner">
                                        <div class="food-item">
                                            <div class="food-item-inner">
                                                <img src="/images/icon18.png" alt="">
                                            </div>
                                        </div>
                                        <h2>Dessert</h2>
                                        <span>All Day</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @include('Website.News')
                @include('Website.Contact')
                @include('Website.Service')
                @include('Website.LoginRegister')
                @include('Website.Footer')
          </div>
        </main>
    </div>
    @include('Website.LinkFooter')
  </body>
</html>
