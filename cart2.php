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

                    <div class="cart-page__cart-form-total">
                        <form class="cart-form-total">
                            <fieldset>
                                <label for="fullName">Full name</label>
                                <input type="text" name="Name" id="fullName">
                            </fieldset>

                            <fieldset>
                                
                                <details>
                                    <summary>COMPANY NAME (OPTIONAL)</summary>
                                    <div><input type="text" name="Company Name" id="companyName"></div>
                                </details>
                            </fieldset>

                            <fieldset>
                                <label for="countryInput">COUNTRY / REGION</label>
                                <div class="select_arrow">
                                    <select name="Country" id="countryInput">
                                        <option value="">Quebec</option>
                                        <option value="">Canada</option>
                                        <option value="">Aruba</option>
                                        <option value="">Bahamas</option>
                                        <option value="">Canada</option>
                                        <option value="">Barbados</option>
                                        <option value="">Quebec</option>
                                        <option value="">Canada</option>
                                        <option value="">Aruba</option>
                                        <option value="">Bahamas</option>
                                        <option value="">Canada</option>
                                        <option value="">Barbados</option>
                                        <option value="">Quebec</option>
                                        <option value="">Canada</option>
                                        <option value="">Aruba</option>
                                        <option value="">Bahamas</option>
                                        <option value="">Canada</option>
                                        <option value="">Barbados</option>
                                        <option value="">Quebec</option>
                                        <option value="">Canada</option>
                                        <option value="">Aruba</option>
                                        <option value="">Bahamas</option>
                                        <option value="">Canada</option>
                                        <option value="">Barbados</option>
                                    </select>
                                </div>
                            </fieldset>

                            <fieldset>
                                <label for="addressInput">STREET ADDRESS <span>(House, number and street name)</span></label>
                                <input type="text" name="Street Address" id="addressInput">
                            </fieldset>

                            <div class="cart-form-total__flex">
                                <fieldset>
                                    <label for="cityInput">TOWN / CITY</label>
                                    <input type="text" name="City" id="cityInput">
                                </fieldset>

                                <fieldset>
                                    <label for="provinceInput">PROVINCE</label>
                                    <div class="select_arrow">
                                        <select name="Province" id="provinceInput">
                                            <option value="">Quebec</option>
                                            <option value="">Canada</option>
                                            <option value="">Aruba</option>
                                            <option value="">Bahamas</option>
                                            <option value="">Canada</option>
                                            <option value="">Barbados</option>
                                            <option value="">Quebec</option>
                                            <option value="">Canada</option>
                                            <option value="">Aruba</option>
                                            <option value="">Bahamas</option>
                                            <option value="">Canada</option>
                                            <option value="">Barbados</option>
                                            <option value="">Quebec</option>
                                            <option value="">Canada</option>
                                            <option value="">Aruba</option>
                                            <option value="">Bahamas</option>
                                            <option value="">Canada</option>
                                            <option value="">Barbados</option>
                                            <option value="">Quebec</option>
                                            <option value="">Canada</option>
                                            <option value="">Aruba</option>
                                            <option value="">Bahamas</option>
                                            <option value="">Canada</option>
                                            <option value="">Barbados</option>
                                        </select>
                                    </div>
                                </fieldset>
                            </div>

                            <fieldset>
                                <label for="pCodeInput">POSTAL CODE</label>
                                <input type="text" name="Postal Code" id="pCodeInput">
                            </fieldset>

                            <fieldset>
                                <label for="pCodeInput">PHONE (OPTIONAL)</label>
                                <div class="select_tel">
                                    <div class="select_arrow">
                                        <select name="" id="">
                                            <option value="">UK +380</option>
                                            <option value="">UK +380</option>
                                            <option value="">UK +380</option>
                                            <option value="">UK +380</option>
                                            <option value="">UK +380</option>
                                        </select>
                                    </div>
                                    <input type="tel">
                                </div>
                            </fieldset>

                            <fieldset>
                                <label for="emailInput">EMAIL ADDRESS</label>
                                <input type="email" name="Email" id="emailInput">
                            </fieldset>

                            <fieldset>
                                <input class="custom-checkbox" name="Create Account" value="Create an Account" type="checkbox" id="createRadio">
                                <label for="createRadio">CREATE AN ACCOUNT?</label>

                                <input class="custom-checkbox" name="Different Addresess" value="Different Addresess" type="checkbox" id="difAddressRadio">
                                <label for="difAddressRadio">SHIP TO A DIFFERENT ADDRESS?</label>
                            </fieldset>

                            <fieldset>
                                <label for="orderNotes">ORDER NOTES (OPTIONAL)</label>
                                <textarea name="Order Notes" id="orderNotes" cols="30" rows="4" placeholder="Notes about your order. e.g. special notes for delivery"></textarea>
                            </fieldset>
                        </form>
                    </div>

                    <aside>
                        <div class="cart-totals cart-totals_payment">
                            <h4>Cart totals</h4>

                            <div class="cart-totals__line">
                                <h4>Subtotal</h4>
                                <span>$498.00</span>
                            </div>

                            <div class="cart-totals__line">
                                <h4>Shipping</h4>
                                <a href="#">Calculate shipping</a>
                            </div>

                            <div class="cart-totals__line">
                                <h4>GST + QST</h4>
                                <span>$111.86</span>
                            </div>

                            <div class="cart-totals__line">
                                <h4>Total</h4>
                                <span class="cart-totals__total">$498.00</span>
                            </div>

                            <div class="cart-totals__line cart-totals__line_noborder cart-totals__line_credit">
                                <fieldset>
                                    <input class="custom-checkbox" name="Credit Card" value="Credit Card" type="checkbox" id="creditCartCheck">
                                    <label for="creditCartCheck">Credit Card</label>
                                </fieldset>

                                <img src="img/payment-metods.png" alt="Payment Metods" width="284" height="20">

                                <span>Pay securely using your credit card.</span>
                            </div>

                            <div class="cart-totals__line cart-totals__line cart-totals__line_noborder cart-totals__line_card">
                                <h4>CARD NUMBER</h4>
                                <fieldset>
                                    <input type="text" name="card number 1" placeholder="****">
                                    <input type="text" name="card number 2" placeholder="****">
                                    <input type="text" name="card number 3" placeholder="****">
                                    <input type="text" name="card number 4" placeholder="****">
                                </fieldset>
                            </div>

                            <div class="cart-totals__line cart-totals__line_noborder cart-totals__line_security">
                                <fieldset>
                                    <h5>EXPIRATION (MM/YY)</h5>
                                    <input type="text" name="expiration" placeholder="MM / YY">
                                </fieldset>

                                <fieldset>
                                    <h5>CARD SECURITY CODE</h5>
                                    <input type="text" name="security code" placeholder="CSC">
                                </fieldset>
                            </div>

                            <div class="cart-totals__line cart-totals__line_noborder cart-totals__line_checks">
                                <fieldset>
                                    <input class="custom-checkbox" name="E-Transfer" value="E-Transfer" type="checkbox" id="eTransfer">
                                    <label for="eTransfer">E-Transfer</label>
                                </fieldset>

                                <fieldset>
                                    <input class="custom-checkbox" name="Agree" value="Agree" type="checkbox" id="agreeCheck">
                                    <label for="agreeCheck">
                                        I HAVE READ AND AGREE TO THE WEBSITE TERMS AND CONDITIONS *
                                    </label>
                                </fieldset>
                            </div>

                            <button class="btn btn_blue">Place order</button>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

    </main>


    <?php include('footer.php'); ?>

    <?php include('scripts.php'); ?>

</body>
</html>