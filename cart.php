<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head.php'); ?>
</head>
<body>

    <?php include('nav.php'); ?>

    <header class="header-regular">
        <div class="container">
            <h3 hidden>Advanced Muscle Stack</h3>

            <div class="breadcrumbs" hidden>
                <ul class="breadcrumbs__list">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li> 
                        <a href="cart.php" class="current">Your Cart</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        <?php include('cart-steps.php'); ?>

        <section class="cart-page">
            <div class="container">
                <div class="cart-page__wrapper">

                    <div class="cart-page__cart-wrapper">
                        <div class="discount-section">
                            <span>Double my SARMs Order - Save 25%</span>
                            <small>*EXCEPT for these 2 categories: Post Cycle Therapy, Supplements</small>
                        </div>
    
                        <ul class="cart-list">
                            <li>
                                <div class="cart-list__item">
                                    <div class="cart-list__piece">
                                        <span class="cart-list__piece-title">
                                            PRODUCT
                                        </span>
                                        <div class="cart-list__piece-product">
                                            <img class="cart-list__piece-product-img" src="img/shop-product3.png" alt="Advanced Muscle Stack - 30-day supply">
                                            <a href="#" class="cart-list__piece-product-title">Advanced Muscle Stack - 30-day supply</a>
                                        </div>
                                    </div>
    
                                    <div class="cart-list__piece">
                                        <span class="cart-list__piece-title">
                                            PRICE
                                        </span>
                                        <div class="cart-list__piece-perprice">
                                            $249.00
                                        </div>
                                    </div>
    
                                    <div class="cart-list__piece">
                                        <span class="cart-list__piece-title">
                                            QUANTITY
                                        </span>
                                        <div class="cart-list__piece-qty">
                                            <div class="quantity buttons_added">
                                                <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="cart-list__piece">
                                        <span class="cart-list__piece-title">
                                            SUBTOTAL
                                        </span>
                                        <div class="cart-list__piece-subtotal">
                                            $498.00
                                        </div>
                                    </div>
    
                                </div>
                            </li>
    
                            <li>
                                <div class="cart-list__item">
                                    <div class="cart-list__piece">
                                        <span class="cart-list__piece-title">
                                            PRODUCT
                                        </span>
                                        <div class="cart-list__piece-product">
                                            <img class="cart-list__piece-product-img" src="img/shop-product2.png" alt="Advanced Muscle Stack - 30-day supply">
                                            <span class="cart-list__piece-product-title">Advanced Muscle Stack - 30-day supply</span>
                                        </div>
                                    </div>
    
                                    <div class="cart-list__piece">
                                        <span class="cart-list__piece-title">
                                            PRICE
                                        </span>
                                        <div class="cart-list__piece-perprice">
                                            $249.00
                                        </div>
                                    </div>
    
                                    <div class="cart-list__piece">
                                        <span class="cart-list__piece-title">
                                            QUANTITY
                                        </span>
                                        <div class="cart-list__piece-qty">
                                            <div class="quantity buttons_added">
                                                <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="cart-list__piece">
                                        <span class="cart-list__piece-title">
                                            SUBTOTAL
                                        </span>
                                        <div class="cart-list__piece-subtotal">
                                            $498.00
                                        </div>
                                    </div>
    
                                </div>
                            </li>
                        </ul>
                    </div>

                    <aside>
                        <div class="cart-totals">
                            <h4>Cart totals</h4>

                            <div class="cart-totals__line">
                                <h4>Subtotal</h4>
                                <span>$498.00</span>
                            </div>

                            <div class="cart-totals__line">
                                <h4>Shipping</h4>
                                <a href="#">FREE shipping</a>
                            </div>

                            <div class="cart-totals__line">
                                <h4>GST + QST</h4>
                                <span>$111.86</span>
                            </div>

                            <div class="cart-totals__line">
                                <h4>Total</h4>
                                <span class="cart-totals__total">$498.00</span>
                            </div>

                            <div class="delivery-box cart-totals__line cart-totals__line_noborder">
                                <h4>Delivery</h4>
                                <div class="select-box">
                                    <div class="select-box__current" tabindex="1">
                                      <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="0" value="1" name="delivery" checked="checked" value="Default sorting">
                                        <p class="select-box__input-text">Vancouver</p>
                                      </div>
                                      <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="1" value="2" name="delivery"/>
                                        <p class="select-box__input-text">Cheese</p>
                                      </div>
                                      <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="2" value="3" name="delivery"/>
                                        <p class="select-box__input-text">Milk</p>
                                      </div>
                                      <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="3" value="4" name="delivery"/>
                                        <p class="select-box__input-text">Honey</p>
                                      </div>
                                      <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="4" value="5" name="delivery"/>
                                        <p class="select-box__input-text">Toast Honey Cheese</p>
                                      </div>
                                      
                                      
                                    </div>
                                    <ul class="select-box__list">
                                      <li>
                                        <label class="select-box__option" for="0" aria-hidden="aria-hidden">Vancouver</label>
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
                                        <label class="select-box__option" for="4" aria-hidden="aria-hidden">Toast Honey Cheese</label>
                                      </li>
                                    </ul>
                                </div> 
                                <span> at 29/04/2021</span>
                            </div>

                            <div class="cart-totals__line cart-totals__line_form cart-totals__line_noborder">
                                <form>
                                    <div class="coupon-input">
                                        <input type="text" placeholder="Coupon code">
                                        <button type="submit">Apply Coupon</button>
                                    </div>
                                </form>

                                <a href="#" class="btn btn_blue">Proceed to checkout</a>

                                <img src="img/payment-metods.jpg" alt="Payment Metods" width="284" height="20">
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <section class="recently-products">
            <div class="container">
                <h4>Recently viewed or similar products</h4>

                <div class="shop shop_category">
                    <div class="shop-slider">
                        <div>
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
                        </div>

                        <div>
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
                        </div>
    
                        <div>
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
                        </div>
    
                        <div>
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
                        </div>
    
                    </div>
                </div>
            </div>
        </section>

    </main>


    <?php include('footer.php'); ?>

    <?php include('scripts.php'); ?>

</body>
</html>