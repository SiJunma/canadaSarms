<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head.php'); ?>
</head>
<body>

    <?php include('nav.php'); ?>

    <header class="header-regular">
        <div class="container">
            <h3>Contact Us</h3>

            <div class="breadcrumbs">
                <ul class="breadcrumbs__list">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li> 
                        <a href="#" class="current">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main>

        <section class="contacts-section">
            <div class="container">
                <div class="contacts-section__wrapper">
                    <div class="contacts-section__item">
                        <div class="contacts-section__piece">
                            <h3>email</h3>
                            <a href="mailto:contact@canadasarms.ca">contact@canadasarms.ca</a>
                        </div>

                        <div class="contacts-section__piece">
                            <h3>Phone</h3>
                            <a href="tel:+2459355658946">+2459355658946</a>
                        </div>
                    </div>

                    <div class="contacts-section__item">
                        <div class="contacts-section__piece">
                            <h3>Social</h3>
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

                        <div class="contacts-section__piece">
                            <h3>Number cart</h3>
                            <a href="cart:4545 5698 2201 1203">4545 5698 2201 1203</a>
                        </div>
                    </div>

                    <div class="contacts-section__item">
                        <div class="contacts-section__piece">
                            <h3>track my order</h3>
                            <a href="#" class="btn btn_line-black">track my order</a>
                        </div>

                        <div class="contacts-section__piece">
                            <h3>Join Our Mailing List</h3>
                            <form class="contacts-section__form">
                                <div class="contacts-section__form-item">
                                    <label for="contact_email">canadasarm@gmail.com</label>
                                    <input id="contact_email" type="mail" name="Email" placeholder="email address...">
                                </div>

                                <div class="contacts-section__form-item">
                                    <label for="contact_phone">+380934526202 (OPTIONAL)</label>
                                    <input id="contact_phone" type="phone" name="Phone" placeholder="phone">
                                </div>

                                <button type="submit" class="btn btn_line-black">Send</button>
                            </form>
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