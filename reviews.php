<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head.php'); ?>
</head>
<body>

    <?php include('nav.php'); ?>

    <header class="header-regular">
        <div class="container">
            <h3>Reviews</h3>

            <div class="breadcrumbs">
                <ul class="breadcrumbs__list">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li> 
                        <a href="#" class="current">Reviews</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main>

        <section class="reviews-filter">
            <div class="container">
                <form>
                    <div class="reviews-filter__wrapper">
                        <div class="reviews-filter__item">
                            <label for="reviews-filter__adress">
                                STREET ADDRESS
                            </label>
                            <div class="select-area">
                                <select name="Rewiew-adress" id="reviews-filter__select1">
                                    <option value="">Please Select</option>
                                </select>
                            </div>
                        </div>
    
                        <div class="reviews-filter__item">
                            <label for="reviews-filter__adress">
                                Selection
                            </label>
                            <div class="select-area">
                                <select name="Rewiew-select" id="reviews-filter__select2">
                                    <option value="">Please Select</option>
                                </select>
                            </div>
                        </div>
    
                        <div class="reviews-filter__item">
                            <label for="reviews-filter__adress">
                                Pagination
                            </label>
                            <div class="select-area">
                                <select name="Rewiew-select" id="reviews-filter__select2">
                                    <option value="">20</option>
                                </select>
                            </div>
                        </div>
                        <div class="reviews-filter__item">
                            <button type="submit" class="btn">Go</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section class="reviews-list">
            <div class="container">
                <div class="reviews-list__wrapper">
                    <div class="review__item">
                        <div class="review__line">
                            <img src="img/av3.jpg" alt="avatar" class="review__image">
                            <div class="review__author">Wordpressmaster</div>

                            <div class="review__date">May 12, 2020</div>
                        </div>
                        <div class="review__content">
                            Super produit, merci!!!
                        </div>
                        <div class="review__rank">
                            <div class="review__rank-product">
                                <img src="img/shop-product3.jpg" alt="">
                            </div>
                            <div class="review__rank-wrapper">
                                <h5>Fitness Stack</h5>
                                <div class="star-rating">
                                    <span class="star_full"></span>
                                    <span class="star_full"></span>
                                    <span class="star_full"></span>
                                    <span class="star_half"></span>
                                    <span class="star_empty"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="review__item">
                        <div class="review__line">
                            <img src="img/av3.jpg" alt="avatar" class="review__image">
                            <div class="review__author">Wordpressmaster</div>

                            <div class="review__date">May 12, 2020</div>
                        </div>
                        <div class="review__content">
                            Super produit, merci!!!
                        </div>
                        <div class="review__rank">
                            <div class="review__rank-product">
                                <img src="img/shop-product3.jpg" alt="">
                            </div>
                            <div class="review__rank-wrapper">
                                <h5>Fitness Stack</h5>
                                <div class="star-rating">
                                    <span class="star_full"></span>
                                    <span class="star_full"></span>
                                    <span class="star_full"></span>
                                    <span class="star_half"></span>
                                    <span class="star_empty"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="review__item">
                        <div class="review__line">
                            <img src="img/av3.jpg" alt="avatar" class="review__image">
                            <div class="review__author">Wordpressmaster</div>

                            <div class="review__date">May 12, 2020</div>
                        </div>
                        <div class="review__content">
                            Super produit, merci!!!
                        </div>
                        <div class="review__rank">
                            <div class="review__rank-product">
                                <img src="img/shop-product3.jpg" alt="">
                            </div>
                            <div class="review__rank-wrapper">
                                <h5>Fitness Stack</h5>
                                <div class="star-rating">
                                    <span class="star_full"></span>
                                    <span class="star_full"></span>
                                    <span class="star_full"></span>
                                    <span class="star_half"></span>
                                    <span class="star_empty"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="review__item">
                        <div class="review__line">
                            <img src="img/av3.jpg" alt="avatar" class="review__image">
                            <div class="review__author">Wordpressmaster</div>

                            <div class="review__date">May 12, 2020</div>
                        </div>
                        <div class="review__content">
                            Super produit, merci!!!
                        </div>
                        <div class="review__rank">
                            <div class="review__rank-product">
                                <img src="img/shop-product3.jpg" alt="">
                            </div>
                            <div class="review__rank-wrapper">
                                <h5>Fitness Stack</h5>
                                <div class="star-rating">
                                    <span class="star_full"></span>
                                    <span class="star_full"></span>
                                    <span class="star_full"></span>
                                    <span class="star_half"></span>
                                    <span class="star_empty"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="review__item">
                        <div class="review__line">
                            <img src="img/av3.jpg" alt="avatar" class="review__image">
                            <div class="review__author">Wordpressmaster</div>

                            <div class="review__date">May 12, 2020</div>
                        </div>
                        <div class="review__content">
                            Super produit, merci!!!
                        </div>
                        <div class="review__rank">
                            <div class="review__rank-product">
                                <img src="img/shop-product3.jpg" alt="">
                            </div>
                            <div class="review__rank-wrapper">
                                <h5>Fitness Stack</h5>
                                <div class="star-rating">
                                    <span class="star_full"></span>
                                    <span class="star_full"></span>
                                    <span class="star_full"></span>
                                    <span class="star_half"></span>
                                    <span class="star_empty"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="review__item">
                        <div class="review__line">
                            <img src="img/av3.jpg" alt="avatar" class="review__image">
                            <div class="review__author">Wordpressmaster</div>

                            <div class="review__date">May 12, 2020</div>
                        </div>
                        <div class="review__content">
                            Super produit, merci!!!
                        </div>
                        <div class="review__rank">
                            <div class="review__rank-product">
                                <img src="img/shop-product3.jpg" alt="">
                            </div>
                            <div class="review__rank-wrapper">
                                <h5>Fitness Stack</h5>
                                <div class="star-rating">
                                    <span class="star_full"></span>
                                    <span class="star_full"></span>
                                    <span class="star_full"></span>
                                    <span class="star_half"></span>
                                    <span class="star_empty"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="review__item">
                        <div class="review__line">
                            <img src="img/av3.jpg" alt="avatar" class="review__image">
                            <div class="review__author">Wordpressmaster</div>

                            <div class="review__date">May 12, 2020</div>
                        </div>
                        <div class="review__content">
                            Super produit, merci!!!
                        </div>
                        <div class="review__rank">
                            <div class="review__rank-product">
                                <img src="img/shop-product3.jpg" alt="">
                            </div>
                            <div class="review__rank-wrapper">
                                <h5>Fitness Stack</h5>
                                <div class="star-rating">
                                    <span class="star_full"></span>
                                    <span class="star_full"></span>
                                    <span class="star_full"></span>
                                    <span class="star_half"></span>
                                    <span class="star_empty"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="review__item">
                        <div class="review__line">
                            <img src="img/av3.jpg" alt="avatar" class="review__image">
                            <div class="review__author">Wordpressmaster</div>

                            <div class="review__date">May 12, 2020</div>
                        </div>
                        <div class="review__content">
                            Rapid Fat Loss Greatly Increases Endurance Promotes Lean Mass Powerful Anabolic Effects...
                        </div>
                        <div class="review__rank">
                            <div class="review__rank-product">
                                <img src="img/shop-product3.jpg" alt="">
                            </div>
                            <div class="review__rank-wrapper">
                                <h5>Fitness Stack</h5>
                                <div class="star-rating">
                                    <span class="star_full"></span>
                                    <span class="star_full"></span>
                                    <span class="star_full"></span>
                                    <span class="star_half"></span>
                                    <span class="star_empty"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pagination">
            <div class="container">
                <div class="pagination__wrapper">
                    <a href="#" class="pagination-prev disable">Prev</a>

                    <a href="#" class="pagination-value active">1</a>
                    <a href="#" class="pagination-value">2</a>
                    <a href="#" class="pagination-value">3</a>

                    <span class="pagination-value">...</span>

                    <a href="#" class="pagination-next">Next</a>
                </div>
            </div>
        </section>


    </main>

    <?php include('footer.php'); ?>

    <?php include('scripts.php'); ?>

</body>
</html>