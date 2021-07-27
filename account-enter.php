<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head.php'); ?>
</head>
<body>

    <?php include('nav.php'); ?>

    <header class="header-regular">
        <div class="container">
            <h3>My Account</h3>

            <div class="breadcrumbs">
                <ul class="breadcrumbs__list">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li> 
                        <a href="#" class="current">My Account</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        <section class="login-section visible">
            <div class="container">
                <div class="login-section__wrapper">
                    <form class="login-section__form">
                        <h3>Login</h3>

                        <div class="login-section__item">
                            <label for="signin_login">USERNAME OR EMAIL ADDRESS</label>
                            <input id="signin_login" type="text">
                        </div>

                        <div class="login-section__item">
                            <label for="signin_password">PASSWORD </label>
                            <input id="signin_password" type="password">
                        </div>

                        <div class="login-section__controls">
                            <button class="btn" type="submit">Log in</button>

                            <fieldset>
                                <input class="custom-checkbox" name="rememberMe" value="rememberMe" type="checkbox" id="signin_rememberMe">
                                <label for="signin_rememberMe">Remember me</label>
                            </fieldset>

                            <a class="link-blue" href="#">Lost your password?</a>
                        </div>
                    </form>

                    <div class="login-section__create">
                        <h3>Create an account</h3>

                        <ul class="login-section__list">
                            <li>A single global login to interact</li>
                            <li>A single global login to interact</li>
                            <li>A single global login to interact</li>
                            <li>A single global login to interact</li>
                        </ul>

                        <a href="#" class="btn btn_line-black js-register">Register</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="register-section">
            <div class="container">
                <div class="login-section__wrapper">
                    <form class="login-section__form">
                        <h3>Register</h3>

                        <div class="login-section__item">
                            <label for="signin_login">EMAIL ADDRESS</label>
                            <input id="signin_login" type="mail">
                        </div>
                        <p>A password will be sent to your email address.</p>
                        <p>Already have an account? <a class="link-blue js-login" href="#">Log In.</a></p>
                        <a href="#" class="btn">Register</a> 
                    </form>
                </div>
            </div>
        </section>

    </main>

    <?php include('footer.php'); ?>

    <?php include('scripts.php'); ?>

</body>
</html>