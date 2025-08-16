
<?php include 'header.php';?>
<main class="container">
  <section class="intro">
    <h2>Welcome to the PMRP Journal of Engineering Research</h2>
    <p>
      Focuses on computational models, simulations, algorithm development, data analytics, artificial intelligence applications, numerical methods, and other computing-driven solutions in engineering research. <br>
Online ISSN: request pending <br>
Publishing model:  Hybrid <br>
DOI Prefix: XXXXX/JFEA <br>

    </p>
    <h2>Aim & Scope</h2>
  <p><em>PMRP Journal of Engineering Research &ndash; Part A: Computational Engineering</em> publishes high-quality, peer-reviewed research that leverages computational concepts, methods, and tools to solve real-world problems in science and engineering. The journal serves as a platform for disseminating innovations in computational modeling, simulation, optimization, and analysis across diverse disciplines.</p>
<p>The scope covers, but is not limited to:</p>
<ul>
<li><strong>Computational Mechanics &amp; Structural Analysis</strong> &ndash; finite element methods, multiscale modeling, contact mechanics, fracture analysis.</li>
<li><strong>Thermal &amp; Fluid Sciences</strong> &ndash; computational fluid dynamics (CFD), heat transfer modeling, thermodynamic simulations.</li>
<li><strong>Electrical, Electronics &amp; Communication Engineering</strong> &ndash; circuit simulation, electromagnetic field computation, signal and image processing, VLSI design automation.</li>
<li><strong>Materials Science &amp; Nanotechnology</strong> &ndash; molecular dynamics, density functional theory, materials informatics, microstructure simulation.</li>
<li><strong>Chemical, Process &amp; Environmental Engineering</strong> &ndash; process modeling, reaction kinetics simulation, pollutant dispersion modeling, computational environmental impact studies.</li>
<li><strong>Artificial Intelligence &amp; Data-Driven Methods</strong> &ndash; machine learning, deep learning, neural networks, data mining, predictive modeling.</li>
<li><strong>Optimization &amp; Control Systems</strong> &ndash; evolutionary algorithms, multi-objective optimization, control theory simulations.</li>
<li><strong>Interdisciplinary Applications</strong> &ndash; computational biology, biomechanics, biomedical engineering, computational geoscience, and energy systems modeling.</li>
</ul>
<p>The journal welcomes original research articles, review papers, and technical notes that demonstrate how computational approaches can provide efficient, accurate, and innovative solutions to engineering challenges in academic, industrial, and societal contexts.</p>


  </section>

  <section class="articles">
    <h2>Latest Publications</h2>
    <?php if (!empty($submissions)) : ?>
        <?php foreach (array_reverse($submissions) as $sub) : ?>
            <article class="paper-card">
              <h3><?php echo htmlspecialchars($sub[1]); ?></h3>
              <p class="authors"><strong>Author(s):</strong> <?php echo htmlspecialchars($sub[0]); ?></p>
              <p class="abstract"><strong>Abstract:</strong> <?php echo nl2br(htmlspecialchars($sub[4])); ?></p>
              <a class="download-btn" href="uploads/<?php echo htmlspecialchars($sub[3]); ?>" target="_blank">📄 Download Full Paper (PDF)</a>
            </article>
        <?php endforeach; ?>
    <?php else : ?>
        <p>No articles published yet.</p>
    <?php endif; ?>
  </section>
</main>
<?php include 'footer.php';?>

