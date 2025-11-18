<?php
// Simple PHP page with includes so the site is modular and ready for Git.
$title = "SIWS College";
include __DIR__ . '/includes/header.php';
?>

  <section id="home" class="hero">
    <h1>Welcome to <?php echo $title; ?></h1>
    <p>Building a brighter future through quality education.</p>
  </section>

  <section id="about">
    <h2>About Us</h2>
    <p>SIWS College is dedicated to providing excellent academic opportunities and holistic development to students. We foster innovation, creativity, and discipline to prepare our students for global challenges.</p>
  </section>

  <section id="courses">
    <h2>Courses Offered</h2>
    <ul>
      <li>Bachelor of Science (B.Sc.)</li>
      <li>Bachelor of Commerce (B.Com.)</li>
      <li>Bachelor of Arts (B.A.)</li>
      <li>Post Graduate Programs</li>
      <li>Professional &amp; Certificate Courses</li>
    </ul>
  </section>

  <section id="admission">
    <h2>Admission</h2>
    <p>Admissions are open for the academic year 2025-26. Interested students can apply online or visit the college campus for more details.</p>
  </section>

  <section id="contact">
    <h2>Contact Us</h2>
    <p>Email: info@siwscollege.edu</p>
    <p>Phone: +91 98765 43210</p>
    <p>Address: Wadala, Mumbai, India</p>
  </section>

<?php include __DIR__ . '/includes/footer.php'; ?>
