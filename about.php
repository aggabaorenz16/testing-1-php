<?php
$pageTitle = 'About';
$activePage = 'about';
require __DIR__ . '/includes/header.php';
?>
   <section class="about-page">
        <div class="about-page__intro">
            <p class="route-page__eyebrow">About me</p>
            <h1>I'm Renz Aggabao</h1>
            <p class="route-page__body">I'm a proactive IT student passionate about learning, building projects, and helping people use technology effectively.</p>
        </div>

        <section class="journey" aria-labelledby="journey-title">
            <p class="route-page__eyebrow">My journey</p>
            <h2 id="journey-title">Learning, building, improving.</h2>
            <ol class="timeline">
               <li class="timeline__item">
                    <span class="timeline__date">PRESENT</span>
                    <div><h3>Continuing my IT journey</h3><p>Continuing to learn, create useful solutions, and gain experience through real-world work.</p></div>
                </li>
                <li class="timeline__item">
                    <span class="timeline__date">2025</span>
                    <div><h3>Finding a Job</h3><p>Actively seeking opportunities to apply my skills and contribute to a dynamic team.</p></div>
                </li>
                <li class="timeline__item">
                    <span class="timeline__date">2024</span>
                    <div><h3>Created practical projects</h3><p>Applied my skills through hands-on projects while improving problem-solving and design skills.</p></div>
                </li>
                <li class="timeline__item">
                    <span class="timeline__date">2018</span>
                    <div><h3>Learning Web Development</h3><p>When I was in Grade 8, I started coding on my cellphone with 4GB of RAM.</p></div>
                </li>
            </ol>
        </section>

        <section class="skills" aria-labelledby="skills-title">
            <p class="route-page__eyebrow">Skills</p>
            <h2 id="skills-title">Tools I use and continue to develop.</h2>
            <div class="skill-list">
                <span>HTML</span><span>CSS</span><span>JavaScript</span><span>PHP</span><span>MySQL</span>
                <span>Responsive Design</span><span>Web Development</span><span>Problem Solving</span>
            </div>
        </section>
          <section class="skills" aria-labelledby="skills-title">
            <p class="route-page__eyebrow">Cybersecurity Practices</p>
            <h2 id="skills-title">Knowledge and Experience</h2>
            <div class="skill-list">
                <span>Penetration Testing</span><span>Capture The Flag</span><span>Incident Response</span><span>Network Security</span>
                <span>Vulnerability Assessment</span><span>Security Testing</span><span>Threat Analysis
</span>
            </div>
        </section>
   </section>
<?php require __DIR__ . '/includes/footer.php'; ?>
