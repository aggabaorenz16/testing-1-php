<?php
$pageTitle = 'Projects';
$activePage = 'project';
require __DIR__ . '/includes/header.php';
?>
   <section class="projects-page">
        <div class="projects-page__intro">
            <p class="route-page__eyebrow">My work</p>
            <h1>Projects that show how I learn and build.</h1>
            <p class="route-page__body">A growing collection of practical web projects and digital solutions.</p>
        </div>

        <div class="project-grid">
            <article class="project-card project-card--featured">
                <div class="project-card__visual" aria-hidden="true">
                    <img class="project-card__image" src="<?= $baseUrl ?>images/portfolio.png" alt="">
                    <span class="project-card__orbit project-card__orbit--one"></span>
                    <span class="project-card__orbit project-card__orbit--two"></span>
                    <span class="project-card__star project-card__star--one"></span>
                    <span class="project-card__star project-card__star--two"></span>
                    <span class="project-card__star project-card__star--three"></span>
                </div>
                <div class="project-card__content">
                    <p class="project-card__number">01 — Featured</p>
                    <h2>RenzDev Portfolio</h2>
                    <p>A personal portfolio designed to present my journey, skills, and web-development work.</p>
                    <div class="project-card__tags"><span>PHP</span><span>CSS</span><span>JavaScript</span></div>
                </div>
            </article>

            <article class="project-card">
                <div class="project-card__placeholder"><span>02</span><p>Next project</p></div>
                <div class="project-card__content">
                    <p class="project-card__number">In progress</p>
                    <h2>Your next project</h2>
                    <p>Add a project title, short description, and the skills you used here.</p>
                    <div class="project-card__tags"><span>Coming soon</span></div>
                </div>
            </article>

            <article class="project-card">
                <div class="project-card__placeholder"><span>03</span><p>Next project</p></div>
                <div class="project-card__content">
                    <p class="project-card__number">In progress</p>
                    <h2>More work on the way</h2>
                    <p>Use this space to add another project as you continue building your portfolio.</p>
                    <div class="project-card__tags"><span>Coming soon</span></div>
                </div>
            </article>
        </div>
   </section>
<?php require __DIR__ . '/includes/footer.php'; ?>
