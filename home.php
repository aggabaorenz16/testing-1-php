<?php
$pageTitle = 'Home';
$activePage = 'home';
require __DIR__ . '/includes/header.php';
?>
   <section class="hero">
        <div class="hero__content">
            <p class="hero__eyebrow"><span></span> IT student · Web developer</p>
            <h1>Hi, I’m <strong>Renz</strong><br>Aggabao.</h1>
            <p class="hero__lead">I create thoughtful web experiences while continuously growing my skills through practical projects and real-world learning.</p>
            <div class="hero__actions">
                <a class="button button--primary" href="<?= $baseUrl ?>project">View my work <span aria-hidden="true">↗</span></a>
                <a class="button button--secondary" href="<?= $baseUrl ?>contact">Get in touch</a>
            </div>
            <dl class="hero__highlights">
                <div><dt>Focus</dt><dd>Web development</dd></div>
                <div><dt>Learning</dt><dd>Building every day</dd></div>
            </dl>
        </div>
        <div class="hero__portrait">
            <div class="hero__portrait-ring"></div>
            <img src="<?= $baseUrl ?>images/picture.png" alt="Portrait of Renz Aggabao">
            <p class="hero__availability"><span></span> Available to learn & collaborate</p>
        </div>
   </section>
<?php require __DIR__ . '/includes/footer.php'; ?>
