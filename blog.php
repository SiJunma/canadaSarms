<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head.php'); ?>
</head>
<body>

    <?php include('nav.php'); ?>

    <header class="header-regular header-left header-blog">
        <div class="container">
            <h3>blog</h3>

            <div class="breadcrumbs" hidden>
                <ul class="breadcrumbs__list">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li> 
                        <a href="#" class="current">Buy sarms</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    
    <main>

        <section class="blog-main-prospekt">
            <div class="container">
                <div class="blog-main-prospekt__wrapper">
                    <div class="blog-main-prospekt__big">
                        <?php 
                            $title = 'MK 677: THE NON-SUPPRESSIVE ANABOLIC AGENT';
                            $img = 'blog-cart1.jpg';
                            $date = 'february 24, 2021';
                            $text = "MK 677 or Ibutamoren, while it is often considered in the category of SARMs , it technically isn’t one. It is a potent, orally-active, long-acting, selective growth hormone secretagogue and a non-peptide agonist of the ghrelin receptor. In simple words, it mimics growth hormone (GH) and increases the secretion of insulin-like growth factor 1 (IGF-1)...";

                            include('blog-cart.php');
                        ?>
                    </div>

                    <div class="blog-main-prospekt__aside">
                        <div class="blog-cart_mailing">
                            <h4>Join Our Mailing List</h4>
    
                            <form>
                               <input type="email" placeholder="email address..."> 
                               <button class="btn" type="submit">subscribe</button>
                            </form>
                        </div>
    
                        <?php 
                            $title = 'RAD-140: THE KING OF SARMS';
                            $img = 'blog-cart2.jpg';
                            $date = 'february 24, 2021';
                            $text = "If you are keen on gathering more info on the fitness and health industry, you might have stumbled upon the name RAD-140 which is also known as Testolone...";
    
                            include('blog-cart.php');
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog-latest">
            <div class="container">
                <h3>the latest articles</h3>
                <div class="blog-latest__wrapper">
                    <?php 
                        $title = '“Sarms Where to Buy” – 3 Things to Know';
                        $img = 'blog-cart3.jpg';
                        $date = 'february 24, 2021';
                        $text = "If you are keen on gathering more info on the fitness and health industry, you might have stumbled upon the name...";

                        include('blog-cart.php');
                    ?>

                    <?php 
                        $title = 'How To Lose Fat: Soluble Fiber Benefits!';
                        $img = 'blog-cart4.jpg';
                        $date = 'february 24, 2021';
                        $text = "If you are keen on gathering more info on the fitness and health industry, you might have stumbled upon the name...";

                        include('blog-cart.php');
                    ?>

                    <?php 
                        $title = 'What are SARMs?';
                        $img = 'blog-cart5.jpg';
                        $date = 'february 24, 2021';
                        $text = "If you are keen on gathering more info on the fitness and health industry, you might have stumbled upon the name RAD-140 which is also known as Testolone...";

                        include('blog-cart.php');
                    ?>

                    <?php 
                        $title = '“Sarms Where to Buy” – 3 Things to Know';
                        $img = 'blog-cart6.jpg';
                        $date = 'february 24, 2021';
                        $text = "If you are keen on gathering more info on the fitness and health industry, you might have stumbled upon the name...";

                        include('blog-cart.php');
                    ?>

                    <?php 
                        $title = 'How To Lose Fat: Soluble Fiber Benefits!';
                        $img = 'blog-cart7.jpg';
                        $date = 'february 24, 2021';
                        $text = "If you are keen on gathering more info on the fitness and health industry, you might have stumbled upon the name...";

                        include('blog-cart.php');
                    ?>

                    <?php 
                        $title = 'What are SARMs?';
                        $img = 'blog-cart8.jpg';
                        $date = 'february 24, 2021';
                        $text = "If you are keen on gathering more info on the fitness and health industry, you might have stumbled upon the name RAD-140 which is also known as Testolone...";

                        include('blog-cart.php');
                    ?>
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