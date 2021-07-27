<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head.php'); ?>
</head>
<body>

    <?php include('nav.php'); ?>

    <header class="header-regular">
        <div class="container">
            <h3>buy sarms</h3>

            <div class="breadcrumbs">
                <ul class="breadcrumbs__list">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li> 
                        <a href="#" class="current">Buy sarms</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="bySarms-wrapper">
                <button type="button" class="shop-filter__mobile-btn" id="shopFilterMobileBtn">filter</button>

                <aside class="shop-filter" id="shopFilter">
                    <form>

                        <div class="shop-filter__wrapper">

                            <div class="shop-filter__item">
                                <input type="text" class="shop-filter__search-input" placeholder="Search products" aria-label="Search Product">
                            </div>
        
                            <div class="shop-filter__item">
                                <span class="shop-filter__header">filter by price</span>
        
                                <div class="rangeslider">
                                    <div class="rangeslider__values">
                                        <span id="rangesliderMin"></span>
                                        <span id="rangesliderMax"></span>
                                    </div>
                                    <div id="filterPriceRange"></div>
                                </div>
        
                            </div>
    
                            <div class="shop-filter__item">
                                <span class="shop-filter__header">product categories</span>
                                <div class="shop-filter__categories">
                                    
                                    <fieldset>
                                        <input class="custom-radio" name="category" value="all" type="radio" id="category1">
                                        <label for="category1">ALL SARM STACKS</label>
                                    </fieldset>
                                        
                                    <fieldset>
                                        <input class="custom-radio" name="category" value="fatBurning" type="radio" id="category2">
                                        <label for="category2">FAT BURNING STACKS</label>
                                    </fieldset>

                                    <fieldset>
                                        <input class="custom-radio" name="category" value="individual" type="radio" id="category3">
                                        <label for="category3">INDIVIDUAL SARMS</label>
                                    </fieldset>

                                    <fieldset>
                                        <input class="custom-radio" name="category" value="muscleBuilding" type="radio" id="category4">
                                        <label for="category4">MUSCLE BUILDING STACKS</label>
                                    </fieldset>

                                    <fieldset>
                                        <input class="custom-radio" name="category" value="postCycle" type="radio" id="category5">
                                        <label for="category5">Post Cycle Therapy (PCT)</label>
                                    </fieldset>

                                    <fieldset>
                                        <input class="custom-radio" name="category" value="supplements" type="radio" id="category6">
                                        <label for="category6">Supplements</label>
                                    </fieldset>

                                    <fieldset>
                                        <input class="custom-radio" name="category" value="protein" type="radio" id="category7">
                                        <label for="category7">Protein</label>
                                    </fieldset>

                                </div>
    
                            </div>

                            <div class="shop-filter__item">
                                <ul class="social-list">
                                    <li>
                                        <a href="#" class="social-list__link" aria-label="Facebook">
                                            Facebook
                                        </a>
                                    </li>
            
                                    <li>
                                        <a href="#" class="social-list__link" aria-label="Instagram">
                                            Instagram
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </form>
                </aside>
    
                <section class="shop shop_bySarms">
                    <h2 hidden>shop</h2>

                        <!-- <div class="shop__sorting-wrapper">
                            <div class="select-box">
                                <div class="select-box__current" tabindex="1">
                                  <div class="select-box__value">
                                    <input class="select-box__input" type="radio" id="0" value="1" name="sorting" checked="checked" value="Default sorting">
                                    <p class="select-box__input-text">Default sorting</p>
                                  </div>
                                  <div class="select-box__value">
                                    <input class="select-box__input" type="radio" id="1" value="2" name="sorting"/>
                                    <p class="select-box__input-text">Cheese</p>
                                  </div>
                                  <div class="select-box__value">
                                    <input class="select-box__input" type="radio" id="2" value="3" name="sorting"/>
                                    <p class="select-box__input-text">Milk</p>
                                  </div>
                                  <div class="select-box__value">
                                    <input class="select-box__input" type="radio" id="3" value="4" name="sorting"/>
                                    <p class="select-box__input-text">Honey</p>
                                  </div>
                                  <div class="select-box__value">
                                    <input class="select-box__input" type="radio" id="4" value="5" name="sorting"/>
                                    <p class="select-box__input-text">Toast</p>
                                  </div>
                                  
                                  
                                </div>
                                <ul class="select-box__list">
                                  <li>
                                    <label class="select-box__option" for="0" aria-hidden="aria-hidden">Default sorting</label>
                                  </li>
                                  <li>
                                    <label class="select-box__option" for="1" aria-hidden="aria-hidden">Cheese</label>
                                  </li>
                                  <li>
                                    <label class="select-box__option" for="2" aria-hidden="aria-hidden">Milk</label>
                                  </li>
                                  <li>
                                    <label class="select-box__option" for="3" aria-hidden="aria-hidden">Honey</label>
                                  </li>
                                  <li>
                                    <label class="select-box__option" for="4" aria-hidden="aria-hidden">Toast</label>
                                  </li>
                                </ul>
                              </div>
                        </div> -->

                        <form class="woocommerce-ordering" method="get">
                        <select name="orderby" class="orderby" aria-label="Shop order">
                                        <option value="menu_order" selected="selected">Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by latest</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                </select>
                        <input type="hidden" name="paged" value="1">
                        </form>

                        <ul class="shop__wrapper">
                            <li>
                                <div class="shop-card">
                                    <img src="img/shop-product3.jpg" alt="Athlete Stack">
                                    <span class="shop-card__title">
                                        Advanced Muscle Stack
                                    </span>
                                    <div class="shop-card__price-line">
                                        <b class="shop-card__price-value">
                                            $249
                                        </b>
            
                                        <div class="star-rating">
                                            <span class="star_full"></span>
                                            <span class="star_full"></span>
                                            <span class="star_full"></span>
                                            <span class="star_half"></span>
                                            <span class="star_empty"></span>
                                        </div>
                                    </div>
            
                                    <div class="shop-card__btn-line">
                                        <a href="product.php" class="btn btn_line-black">view product</a>
                                        <button href="#" class="btn btn_blue">add to cart</button>
                                    </div>

                                    <ul class="shop-card__category-line">
                                        <li hidden><img src="img/product-muscle.svg" alt="FAT BURNING STACKS" width="40" height="40"></li>
                                        <li hidden><img src="img/product-hormones.svg" alt="INDIVIDUAL SARMS" width="40" height="40"></li>
                                        <li><img src="img/product-muscles2.svg" alt="MUSCLE BUILDING STACKS" width="40" height="40"></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <div class="shop-card">
                                    <img src="img/shop-product3.jpg" alt="Athlete Stack">
                                    <span class="shop-card__title">
                                        Advanced Muscle Stack
                                    </span>
                                    <div class="shop-card__price-line">
                                        <b class="shop-card__price-value">
                                            $249
                                        </b>
            
                                        <div class="star-rating">
                                            <span class="star_full"></span>
                                            <span class="star_full"></span>
                                            <span class="star_full"></span>
                                            <span class="star_half"></span>
                                            <span class="star_empty"></span>
                                        </div>
                                    </div>
            
                                    <div class="shop-card__btn-line">
                                        <a href="product.php" class="btn btn_line-black">view product</a>
                                        <button href="#" class="btn btn_blue">add to cart</button>
                                    </div>

                                    <ul class="shop-card__category-line">
                                        <li hidden><img src="img/product-muscle.svg" alt="FAT BURNING STACKS" width="40" height="40"></li>
                                        <li hidden><img src="img/product-hormones.svg" alt="INDIVIDUAL SARMS" width="40" height="40"></li>
                                        <li><img src="img/product-muscles2.svg" alt="MUSCLE BUILDING STACKS" width="40" height="40"></li>
                                    </ul>
                                </div>
                            </li>
        
                            <li>
                                <div class="shop-card">
                                    <img src="img/shop-product3.jpg" alt="Athlete Stack">
                                    <span class="shop-card__title">
                                        Get Shredded – Athlete Stack
                                    </span>
                                    <div class="shop-card__price-line">
                                        <b class="shop-card__price-value">
                                            $249
                                        </b>
            
                                        <div class="star-rating">
                                            <span class="star_full"></span>
                                            <span class="star_full"></span>
                                            <span class="star_full"></span>
                                            <span class="star_half"></span>
                                            <span class="star_empty"></span>
                                        </div>
                                    </div>
            
                                    <div class="shop-card__btn-line">
                                        <a href="product.php" class="btn btn_line-black">view product</a>
                                        <button href="#" class="btn btn_blue added">Added</button>
                                    </div>
                                    <ul class="shop-card__category-line">
                                        <li><img src="img/product-muscle.svg" alt="FAT BURNING STACKS" width="40" height="40"></li>
                                        <li><img src="img/product-hormones.svg" alt="INDIVIDUAL SARMS" width="40" height="40"></li>
                                        <li><img src="img/product-muscles2.svg" alt="MUSCLE BUILDING STACKS" width="40" height="40"></li>
                                    </ul>
                                </div>
                            </li>
        
                            <li>
                                <div class="shop-card">
                                    <img src="img/shop-product3.jpg" alt="Athlete Stack">
                                    <span class="shop-card__title">
                                        Total Transformation Stack
                                    </span>
                                    <div class="shop-card__price-line">
                                        <b class="shop-card__price-value">
                                            $239
                                        </b>
            
                                        <div class="star-rating">
                                            <span class="star_full"></span>
                                            <span class="star_full"></span>
                                            <span class="star_full"></span>
                                            <span class="star_half"></span>
                                            <span class="star_empty"></span>
                                        </div>
                                    </div>
            
                                    <div class="shop-card__btn-line">
                                        <a href="product.php" class="btn btn_line-black">view product</a>
                                        <button href="#" class="btn btn_blue">add to cart</button>
                                    </div>
    
                                    <ul class="shop-card__category-line">
                                        <li><img src="img/product-muscle.svg" alt="FAT BURNING STACKS" width="40" height="40"></li>
                                        <li><img src="img/product-hormones.svg" alt="INDIVIDUAL SARMS" width="40" height="40"></li>
                                        <li><img src="img/product-muscles2.svg" alt="MUSCLE BUILDING STACKS" width="40" height="40"></li>
                                    </ul>
                                </div>
                            </li>
        
                            <li>
                                <div class="shop-card">
                                    <img src="img/shop-product2.jpg" alt="Athlete Stack">
                                    <span class="shop-card__title">
                                        Growth Stack
                                    </span>
                                    <div class="shop-card__price-line">
                                        <b class="shop-card__price-value">
                                            $169
                                        </b>
            
                                        <div class="star-rating">
                                            <span class="star_full"></span>
                                            <span class="star_full"></span>
                                            <span class="star_full"></span>
                                            <span class="star_half"></span>
                                            <span class="star_empty"></span>
                                        </div>
                                    </div>
            
                                    <div class="shop-card__btn-line">
                                        <a href="product.php" class="btn btn_line-black">view product</a>
                                        <button href="#" class="btn btn_blue">add to cart</button>
                                    </div>

                                    <ul class="shop-card__category-line">
                                        <li><img src="img/product-muscle.svg" alt="FAT BURNING STACKS" width="40" height="40"></li>
                                        <li><img src="img/product-hormones.svg" alt="INDIVIDUAL SARMS" width="40" height="40"></li>
                                        <li hidden><img src="img/product-muscles2.svg" alt="MUSCLE BUILDING STACKS" width="40" height="40"></li>
                                    </ul>
                                </div>
                            </li>
        
                            <li>
                                <div class="shop-card">
                                    <img src="img/shop-product2.jpg" alt="Athlete Stack">
                                    <span class="shop-card__title">
                                        Fitness Stack
                                    </span>
                                    <div class="shop-card__price-line">
                                        <b class="shop-card__price-value">
                                            $149
                                        </b>
            
                                        <div class="star-rating">
                                            <span class="star_full"></span>
                                            <span class="star_full"></span>
                                            <span class="star_full"></span>
                                            <span class="star_half"></span>
                                            <span class="star_empty"></span>
                                        </div>
                                    </div>
            
                                    <div class="shop-card__btn-line">
                                        <a href="product.php" class="btn btn_line-black">view product</a>
                                        <button href="#" class="btn btn_blue">add to cart</button>
                                    </div>
                                    <ul class="shop-card__category-line">
                                        <li><img src="img/product-muscle.svg" alt="FAT BURNING STACKS" width="40" height="40"></li>
                                        <li><img src="img/product-hormones.svg" alt="INDIVIDUAL SARMS" width="40" height="40"></li>
                                        <li><img src="img/product-muscles2.svg" alt="MUSCLE BUILDING STACKS" width="40" height="40"></li>
                                    </ul>
                                </div>
                            </li>
        
                            <li>
                                <div class="shop-card">
                                    <img src="img/shop-product2.jpg" alt="Athlete Stack">
                                    <span class="shop-card__title">
                                        Beginner Stack
                                    </span>
                                    <div class="shop-card__price-line">
                                        <b class="shop-card__price-value">
                                            $169
                                        </b>
            
                                        <div class="star-rating">
                                            <span class="star_full"></span>
                                            <span class="star_full"></span>
                                            <span class="star_full"></span>
                                            <span class="star_half"></span>
                                            <span class="star_empty"></span>
                                        </div>
                                    </div>
            
                                    <div class="shop-card__btn-line">
                                        <a href="product.php" class="btn btn_line-black">view product</a>
                                        <button href="#" class="btn btn_blue">add to cart</button>
                                    </div>
                                    <ul class="shop-card__category-line">
                                        <li><img src="img/product-muscle.svg" alt="FAT BURNING STACKS" width="40" height="40"></li>
                                        <li><img src="img/product-hormones.svg" alt="INDIVIDUAL SARMS" width="40" height="40"></li>
                                        <li><img src="img/product-muscles2.svg" alt="MUSCLE BUILDING STACKS" width="40" height="40"></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                </section>
            </div>
        </div>

    </main>

    <?php include('footer.php'); ?>

    <?php include('scripts.php'); ?>

</body>
</html>