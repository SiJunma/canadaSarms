<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head.php'); ?>
</head>
<body>

    <?php include('nav.php'); ?>

    <header class="header-regular">
        <div class="container">
            <h3>FAQ</h3>

            <div class="breadcrumbs">
                <ul class="breadcrumbs__list">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li> 
                        <a href="#" class="current">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        <section class="faq-btn-area">
            <div class="container">
                <a href="guide.php" class="btn btn_line-black">Usage Guide</a>
            </div>
        </section>

        <section class="faq-section">
            <div class="container">
                <div class="custom-accordion">
                    <div class="faq-section__column">
                        <div class="faq-section__item">
                            <button class="custom-accordion__btn">What are SARMs?</button>
                            <div class="custom-accordion__panel">
                                <p>
                                    SARMs stands for Selective Androgen Receptor Modulators. They are a group of compounds that selectively target androgen receptors in muscle, bone, connective tissue, body fat, brain tissue and nerve, without the negative side effects that anabolic steroids produce. This is due to SARMs being selective in nature, whereas anabolic steroids
                                </p>
                                <p>
                                    Each Sarm targets different Androgen Receptors in the body and therefore each one yields different effects on the body. 
                                </p>
                                <p>
                                    Sarms are NOT steroids nor are they hormones. 
                                </p>
                            </div>
                        </div>
                        
                        <div class="faq-section__item">
                            <button class="custom-accordion__btn">Should I Take SARMs?</button>
                            <div class="custom-accordion__panel">
                            <p>If you decide to use sarms, the first thing we HIGHLY recommend is to CONSULT WITH YOUR DOCTOR. Furthermore, you need to find a trustworthy seller. Many websites claim they sell sarms, but 37% of them (according to a research found on CNN) sell illegal hormones. Many other stores sell chinese produced sarms. We, at Canada Sarms, sell the purest sarms on the planet, produced here in Canada. If you decide to take them, do so at your own discretion and make sure you do your own research. Here are a few links for official reputable scientific sources:</p>
    
                            <p><a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3177038/">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3177038/</a></p>
                            <p><a href="https://www.ncbi.nlm.nih.gov/pubmed/28974548">https://www.ncbi.nlm.nih.gov/pubmed/28974548</a></p>
                            <p><a href="https://academic.oup.com/jcem/article/83/2/320/2865101#53803926">https://academic.oup.com/jcem/article/83/2/320/2865101#53803926</a></p>
                            </div>
                        </div>
                        
                        <div class="faq-section__item">
                            <button class="custom-accordion__btn">Which Payment Method Do You Accept?</button>
                            <div class="custom-accordion__panel">
                                
                                <ul>
                                    <li>Interac e-transfers (CANADA ONLY; see instructions after checkout).</li>
                                    <li>Bitcoin.</li>
                                </ul>
                            
                                <p>Payment by email/e-transfer Instructions:</p>
    
                                <p><a href="mailto:Email: contact@canadasarms.ca">Email: contact@canadasarms.ca</a></p>
    
                                <p>Security Question: My Order</p>
    
                                <p>Security Answer: sarms2020</p>
                            
                            </div> 
                        </div>
    
                        <div class="faq-section__item">
                            <button class="custom-accordion__btn">How long does it take for delivery?</button>
                            <div class="custom-accordion__panel">
                            <p>We ship out orders within 24-48 hours after the payment is processed. We use Xpresspost Canada Post shipping which they claim is 1-3 business days. High amount orders may require your signature.</p>
                            <p>For faster shipment times, you may choose Canada Post Priority (1 business day) at checkout.</p>
                            </div> 
                        </div>
                    </div>

                    <div class="faq-section__column">
                        <div class="faq-section__item">
                            <button class="custom-accordion__btn">How much does shipping cost? How do I get free shipping?</button>
                            <div class="custom-accordion__panel">
                            <p>Shipping is free on all orders over $299.</p>
                            </div>
                        </div> 
    
                        <div class="faq-section__item">
                            <button class="custom-accordion__btn">What is the shelf life of your SARMs?</button>
                            <div class="custom-accordion__panel">
                            <p>An approximate shelf life of 2 years before the product begins to degrade and lose its potency. Our SARMs are produced weekly.</p>
                            </div> 
                        </div>
    
                        <div class="faq-section__item">
                            <button class="custom-accordion__btn">Why choose Canada Sarms?</button>
                            <div class="custom-accordion__panel">
                            <p>We are one of the few reputable companies that sell legitimate SARMs. Our products are 100% pharmaceutical grade and our quality control is excellent. You can inquire about lab testing certificate for our SARMs. They are Kosher, Halal, 99.98% pure and free of fillers. Our prices are the most competitive on the market.</p>
                            </div> 
                        </div>
    
                        <div class="faq-section__item">
                            <button class="custom-accordion__btn">Are Sarms Legal?</button>
                            <div class="custom-accordion__panel">
                            <p>SARMS are legal in Canada, they are not on any list of illicit or illegal products in Canada . Sarms are legal for the purpose of conducting research. All persons are legally able to conduct their own research with these compounds. These products are not intended to treat, heal or cure any disease or medical condition.</p>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>

        <section class="faq-form">
            <div class="container">
                <div class="faq-form__wrapper">
                    <h5>Ask a Question</h5>
                    <form>
                        <textarea name="question" id="questionTextArea" cols="30" rows="3" placeholder="Description..."></textarea>
        
                        <button type="submit" class="btn btn_line-black">Submit your question</button>
                    </form>
                </div>
            </div>
        </section>

    </main>

    <?php include('footer.php'); ?>

    <?php include('scripts.php'); ?>

</body>
</html>