<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modele</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="/public/app.css">
</head>
<body>
<?php
/* menu mobile */
include('off-canvas-wrapper.php');
?>


<div class="off-canvas-content" data-off-canvas-content>
    <main class="grid-container" data-sticky-container>

        <header data-sticky data-options="marginTop:0;">
            <div class="grid-x grid-container">
                <div class="cell small-1 medium-1 large-1">
                    <button type="button" class="menu-icon dark button_burger_open" title="menu" data-toggle="offCanvas"></button>
                </div>
                <div class="cell  small-2 medium-7 large-auto text-right">
                    <img src="//picsum.photos/200/100" alt="logo">
                </div>
            </div>

        </header>

        <section class="vertical-padding">
            <div class="grid-x grid-container">
                <div class="cell small-4">
                    <h1>Modèle</h1>
                    <h2>Accordion</h2>

                    <ul class="accordion" data-accordion data-update-history="true" id="deeplinked-accordion">
                        <li class="accordion-item is-active" data-accordion-item>
                            <a href="#deeplink1" class="accordion-title">Accordion 1</a>
                            <div class="accordion-content" data-tab-content id="deeplink1">
                                Panel 1. Lorem ipsum dolor
                            </div>
                        </li>
                        <li class="accordion-item" data-accordion-item>
                            <a href="#deeplink2" class="accordion-title">Accordion 2</a>
                            <div class="accordion-content" data-tab-content id="deeplink2">
                                Panel 2. Lorem ipsum dolor
                            </div>
                        </li>
                        <li class="accordion-item" data-accordion-item>
                            <a href="#deeplink3" class="accordion-title">Accordion 3</a>
                            <div class="accordion-content" data-tab-content id="deeplink3">
                                Panel 3. Lorem ipsum dolor
                            </div>
                        </li>
                    </ul>

                    <?php for ($i = 0; $i < 10; $i++): ?>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid blanditiis dicta dolorum enim nisi nulla, officiis quae quia quos rem repellendus ullam ut vel voluptas voluptatum. Aut eligendi hic necessitatibus!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid blanditiis dicta dolorum enim nisi nulla, officiis quae quia quos rem repellendus ullam ut vel voluptas voluptatum. Aut eligendi hic necessitatibus!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid blanditiis dicta dolorum enim nisi nulla, officiis quae quia quos rem repellendus ullam ut vel voluptas voluptatum. Aut eligendi hic necessitatibus!
                        </p>
                    <?php endfor; ?>
                </div>
            </div>
        </section>

    </main>
</div>

<script src="bundle.js"></script>
</body>
</html>