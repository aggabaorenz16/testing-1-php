<?php
$pageTitle = 'Home';
$activePage = 'home';
require __DIR__ . '/includes/header.php';
?>
   <div class="about-me">
        <div class="images">
            <img src="<?= $baseUrl ?>images/picture.png" alt="Profile Image">
        </div>
        <div class="content-about">
            <div class="name"><h2>Renz Aggabao</h2></div>
            <div class="acads"><p>IT Student | Web Developer | Social Media Recovery</p></div>
        </div>
   </div>
  <!--  <div class="objective">
        <div class="text-objective">
            <p>I'm a proactive student with a passion for IT, working on projects to build my skills and help companies use technology to improve their services.</p>
        </div>
   </div> -->
<?php require __DIR__ . '/includes/footer.php'; ?>
