<!-- 
  Template Name: shop_page
 -->
<?php get_header(); ?>
<div class="page-header page-title-left page-title-pattern">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="title">Shop - List</h1>
        <h5>A Short Page title</h5>
        <ul class="breadcrumb">
          <li>
            <a href="<?php home_url(); ?>">Home</a>
          </li>
          <li>
            <a href="#"><?php echo ucfirst($pagename); ?></a>
          </li>
          <li class="active"><?php echo ucfirst($pagename); ?></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- page-header -->
<section class="page-section">
  <div class="container shop">
    <div class="row">
      <div class="col-md-12 product-page">
        <?php
          // Start Loop
        ?>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="product-item">
              <div class="product-img">
                <a href="shop-single.html">
                  <img src="img/sections/shop/thumb/1.png" alt="" width="350" height="400" />
                </a>
              </div>
            </div>
          </div>
          <!-- .product -->
          <div class="col-md-9 col-sm-6">
            <div class="product-rating pull-right">
              <div class="star-rating color">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
            <div class="price-details">
              <h3>Hammer Drill</h3>
              <span class="price">$199</span>
            </div>
            <div class="product-description">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec posuere odio.Phasellus
                odio lectus, ultrices non pretium ac, mollis id elit.</p>
              <p>Fusce tempor tellus non felis tempus vestibulum. Donec molestie purus sem. Suspendisse a neque
                quam.</p>
            </div>
            <ul class="arrow-style">
              <li>Blows / Minute:1,030</li>
              <li>Watts: 2,050</li>
              <li>Impact Energy: 39</li>
            </ul>
            <a href="shop-single.html" class="btn btn-default">Read More</a>
            <a href="#" class="btn btn-default">
              <i class="fa fa-shopping-cart"></i> Add to Cart</a>
          </div>
        </div>
        <?php
          // End Loop
        ?>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="product-item">
              <div class="product-img">
                <a href="shop-single.html">
                  <img src="img/sections/shop/thumb/2.png" alt="" width="350" height="400" />
                </a>
              </div>
            </div>
          </div>
          <!-- .product -->
          <div class="col-md-9 col-sm-6">
            <div class="product-rating pull-right">
              <div class="star-rating color">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
            <div class="price-details">
              <h3>Concrete Grinders</h3>
              <span class="price">$299</span>
            </div>
            <div class="product-description">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec posuere odio.Phasellus
                odio lectus, ultrices non pretium ac, mollis id elit.</p>
              <p>Fusce tempor tellus non felis tempus vestibulum. Donec molestie purus sem. Suspendisse a neque
                quam.</p>
            </div>
            <ul class="arrow-style">
              <li>Blows / Minute:1,030</li>
              <li>Watts: 2,050</li>
              <li>Impact Energy: 39</li>
            </ul>
            <a href="#" class="btn btn-default">Read More</a>
            <a href="#" class="btn btn-default">
              <i class="fa fa-shopping-cart"></i> Add to Cart</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="product-item">
              <div class="product-img">
                <a href="shop-single.html">
                  <img src="img/sections/shop/thumb/3.png" alt="" width="350" height="400" />
                </a>
              </div>
            </div>
          </div>
          <!-- .product -->
          <div class="col-md-9 col-sm-6">
            <div class="product-rating pull-right">
              <div class="star-rating color">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
            <div class="price-details">
              <h3>Cleaning Machines</h3>
              <span class="price">$189</span>
            </div>
            <div class="product-description">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec posuere odio.Phasellus
                odio lectus, ultrices non pretium ac, mollis id elit.</p>
              <p>Fusce tempor tellus non felis tempus vestibulum. Donec molestie purus sem. Suspendisse a neque
                quam.</p>
            </div>
            <ul class="arrow-style">
              <li>Blows / Minute:1,030</li>
              <li>Watts: 2,050</li>
              <li>Impact Energy: 39</li>
            </ul>
            <a href="#" class="btn btn-default">Read More</a>
            <a href="#" class="btn btn-default">
              <i class="fa fa-shopping-cart"></i> Add to Cart</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="product-item">
              <div class="product-img">
                <a href="shop-single.html">
                  <img src="img/sections/shop/thumb/4.png" alt="" width="350" height="400" />
                </a>
              </div>
            </div>
          </div>
          <!-- .product -->
          <div class="col-md-9 col-sm-6">
            <div class="product-rating pull-right">
              <div class="star-rating color">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
            <div class="price-details">
              <h3>Laser Levels</h3>
              <span class="price">$79</span>
            </div>
            <div class="product-description">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec posuere odio.Phasellus
                odio lectus, ultrices non pretium ac, mollis id elit.</p>
              <p>Fusce tempor tellus non felis tempus vestibulum. Donec molestie purus sem. Suspendisse a neque
                quam.</p>
            </div>
            <ul class="arrow-style">
              <li>Blows / Minute:1,030</li>
              <li>Watts: 2,050</li>
              <li>Impact Energy: 39</li>
            </ul>
            <a href="#" class="btn btn-default">Read More</a>
            <a href="#" class="btn btn-default">
              <i class="fa fa-shopping-cart"></i> Add to Cart</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="product-item">
              <div class="product-img">
                <a href="shop-single.html">
                  <img src="img/sections/shop/thumb/5.png" alt="" width="350" height="400" />
                </a>
              </div>
            </div>
          </div>
          <!-- .product -->
          <div class="col-md-9 col-sm-6">
            <div class="product-rating pull-right">
              <div class="star-rating color">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
            <div class="price-details">
              <h3>Caulk Guns</h3>
              <span class="price">$39</span>
            </div>
            <div class="product-description">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec posuere odio.Phasellus
                odio lectus, ultrices non pretium ac, mollis id elit.</p>
              <p>Fusce tempor tellus non felis tempus vestibulum. Donec molestie purus sem. Suspendisse a neque
                quam.</p>
            </div>
            <ul class="arrow-style">
              <li>Blows / Minute:1,030</li>
              <li>Watts: 2,050</li>
              <li>Impact Energy: 39</li>
            </ul>
            <a href="#" class="btn btn-default">Read More</a>
            <a href="#" class="btn btn-default">
              <i class="fa fa-shopping-cart"></i> Add to Cart</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="product-item">
              <div class="product-img">
                <img src="img/sections/shop/thumb/6.png" alt="" width="350" height="400" />
              </div>
            </div>
          </div>
          <!-- .product -->
          <div class="col-md-9 col-sm-6">
            <div class="product-rating pull-right">
              <div class="star-rating color">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
            <div class="price-details">
              <h3>Concrete Saws</h3>
              <span class="price">$849</span>
            </div>
            <div class="product-description">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec posuere odio.Phasellus
                odio lectus, ultrices non pretium ac, mollis id elit.</p>
              <p>Fusce tempor tellus non felis tempus vestibulum. Donec molestie purus sem. Suspendisse a neque
                quam.</p>
            </div>
            <ul class="arrow-style">
              <li>Blows / Minute:1,030</li>
              <li>Watts: 2,050</li>
              <li>Impact Energy: 39</li>
            </ul>
            <a href="#" class="btn btn-default">Read More</a>
            <a href="#" class="btn btn-default">
              <i class="fa fa-shopping-cart"></i> Add to Cart</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="product-item">
              <div class="product-img">
                <a href="shop-single.html">
                  <img src="img/sections/shop/thumb/7.png" alt="" width="350" height="400" />
                </a>
              </div>
            </div>
          </div>
          <!-- .product -->
          <div class="col-md-9 col-sm-6">
            <div class="product-rating pull-right">
              <div class="star-rating color">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
            <div class="price-details">
              <h3>Cement Mixers</h3>
              <span class="price">$519</span>
            </div>
            <div class="product-description">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec posuere odio.Phasellus
                odio lectus, ultrices non pretium ac, mollis id elit.</p>
              <p>Fusce tempor tellus non felis tempus vestibulum. Donec molestie purus sem. Suspendisse a neque
                quam.</p>
            </div>
            <ul class="arrow-style">
              <li>Blows / Minute:1,030</li>
              <li>Watts: 2,050</li>
              <li>Impact Energy: 39</li>
            </ul>
            <a href="#" class="btn btn-default">Read More</a>
            <a href="#" class="btn btn-default">
              <i class="fa fa-shopping-cart"></i> Add to Cart</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="product-item">
              <div class="product-img">
                <a href="shop-single.html">
                  <img src="img/sections/shop/thumb/8.png" alt="" width="350" height="400" />
                </a>
              </div>
            </div>
          </div>
          <!-- .product -->
          <div class="col-md-9 col-sm-6">
            <div class="product-rating pull-right">
              <div class="star-rating color">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
            <div class="price-details">
              <h3>Jobsite Radios</h3>
              <span class="price">$199</span>
            </div>
            <div class="product-description">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec posuere odio.Phasellus
                odio lectus, ultrices non pretium ac, mollis id elit.</p>
              <p>Fusce tempor tellus non felis tempus vestibulum. Donec molestie purus sem. Suspendisse a neque
                quam.</p>
            </div>
            <ul class="arrow-style">
              <li>Blows / Minute:1,030</li>
              <li>Watts: 2,050</li>
              <li>Impact Energy: 39</li>
            </ul>
            <a href="#" class="btn btn-default">Read More</a>
            <a href="#" class="btn btn-default">
              <i class="fa fa-shopping-cart"></i> Add to Cart</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="product-item">
              <div class="product-img">
                <a href="shop-single.html">
                  <img src="img/sections/shop/thumb/9.png" alt="" width="350" height="400" />
                </a>
              </div>
            </div>
          </div>
          <!-- .product -->
          <div class="col-md-9 col-sm-6">
            <div class="product-rating pull-right">
              <div class="star-rating color">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
            <div class="price-details">
              <h3>Pipe Locators</h3>
              <span class="price">$539</span>
            </div>
            <div class="product-description">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec posuere odio.Phasellus
                odio lectus, ultrices non pretium ac, mollis id elit.</p>
              <p>Fusce tempor tellus non felis tempus vestibulum. Donec molestie purus sem. Suspendisse a neque
                quam.</p>
            </div>
            <ul class="arrow-style">
              <li>Blows / Minute:1,030</li>
              <li>Watts: 2,050</li>
              <li>Impact Energy: 39</li>
            </ul>
            <a href="#" class="btn btn-default">Read More</a>
            <a href="#" class="btn btn-default">
              <i class="fa fa-shopping-cart"></i> Add to Cart</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="product-item">
              <div class="product-img">
                <a href="shop-single.html">
                  <img src="img/sections/shop/thumb/10.png" alt="" width="350" height="400" />
                </a>
              </div>
            </div>
          </div>
          <!-- .product -->
          <div class="col-md-9 col-sm-6">
            <div class="product-rating pull-right">
              <div class="star-rating color">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
            <div class="price-details">
              <h3>Rebar Cutters</h3>
              <span class="price">$1599</span>
            </div>
            <div class="product-description">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec posuere odio.Phasellus
                odio lectus, ultrices non pretium ac, mollis id elit.</p>
              <p>Fusce tempor tellus non felis tempus vestibulum. Donec molestie purus sem. Suspendisse a neque
                quam.</p>
            </div>
            <ul class="arrow-style">
              <li>Blows / Minute:1,030</li>
              <li>Watts: 2,050</li>
              <li>Impact Energy: 39</li>
            </ul>
            <a href="#" class="btn btn-default">Read More</a>
            <a href="#" class="btn btn-default">
              <i class="fa fa-shopping-cart"></i> Add to Cart</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="product-item">
              <div class="product-img">
                <a href="shop-single.html">
                  <img src="img/sections/shop/thumb/11.png" alt="" width="350" height="400" />
                </a>
              </div>
            </div>
          </div>
          <!-- .product -->
          <div class="col-md-9 col-sm-6">
            <div class="product-rating pull-right">
              <div class="star-rating color">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
            <div class="price-details">
              <h3>Brick Trowel</h3>
              <span class="price">$39</span>
            </div>
            <div class="product-description">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec posuere odio.Phasellus
                odio lectus, ultrices non pretium ac, mollis id elit.</p>
              <p>Fusce tempor tellus non felis tempus vestibulum. Donec molestie purus sem. Suspendisse a neque
                quam.</p>
            </div>
            <ul class="arrow-style">
              <li>Blows / Minute:1,030</li>
              <li>Watts: 2,050</li>
              <li>Impact Energy: 39</li>
            </ul>
            <a href="#" class="btn btn-default">Read More</a>
            <a href="#" class="btn btn-default">
              <i class="fa fa-shopping-cart"></i> Add to Cart</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- page-section -->
<div id="get-quote" class="bg-color black text-center">
  <div class="container">
    <div class="row get-a-quote">
      <div class="col-md-12">Get A Free Quote / Need a Help ?
        <a class="black" href="#">Contact Us</a>
      </div>
    </div>
    <div class="move-top bg-color page-scroll">
      <a href="#page">
        <i class="glyphicon glyphicon-arrow-up"></i>
      </a>
    </div>
  </div>
</div>
<!-- request -->
<?php get_footer(); ?>