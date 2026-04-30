<?php
require_once __DIR__ . '/includes/gallery.php';
$config = ['title' => 'Synthetic Data Research — HAO LE', 'desc' => 'Synthetic Data Research by Hao Le at IEBL UCSD', 'active' => 'engineering', 'dark_header' => true];
require __DIR__ . '/includes/head.php';
?>

  <header class="page-header">
    <div class="container">
      <span class="page-owner"><a href="/engineering.php">Engineering</a></span>
      <span class="page-num">02</span>
      <h1 class="page-title">Synthetic<br>Data<br>Research</h1>
    </div>
  </header>

  <section class="project-detail">
    <div class="container">

      <!-- Overview -->
      <div class="pd-overview reveal">
        <div class="pd-text">
          <p>
            One of the heaviest impacting factors on resources when developing Advanced Driver
            Assistance Systems is the process of real data collection. A fully-equipped data rig
            must be deployed on streets for extended periods — expensive in hardware maintenance,
            data post-processing, and manual annotation subject to human error. Moreover, diversity
            is constrained to geography: there is only so much that can be captured within 24 hours.
          </p>
          <p>
            We propose an automated pipeline to leverage the scripting and physics capabilities of
            the Unity game engine to generate synthetic datasets cost-effectively. A wide range of
            data formats can be produced including RGB-D to Velodyne-like point clouds. Total
            environmental control via generation parameters means lighting, weather, and scene
            context can be freely manipulated. Preliminary results show our synthetic data holds
            the potential to boost 2D object detection performance and model robustness.
          </p>
          <p>
            Aside from being a means of data generation, our Unity platform can serve as a safe
            testbed for collaborative algorithms. A complex road network utilizing V2X techniques
            can be adequately simulated while accounting for bandwidth constraints.
          </p>
          <div class="pd-actions">
            <a href="/hics-paper.pdf" target="_blank" rel="noopener" class="pd-btn">Read ISOCC 2021 Paper →</a>
          </div>
        </div>
        <div class="pd-cover">
          <img src="<?= htmlspecialchars(thumb_url('images/engineering/synthetic-collage.png', 900, 88)) ?>"
               alt="Synthetic data collage">
        </div>
      </div>

      <!-- Seminar video -->
      <div class="pd-media reveal">
        <div class="pd-media-label">Research Seminar</div>
        <div class="pd-video-wrap">
          <iframe src="https://www.youtube.com/embed/ptkTKS5itWw"
                  title="Synthetic Data Research Seminar"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
        </div>
      </div>

      <!-- Section: Unity Foundation -->
      <div class="pd-section reveal">
        <div class="pd-section-text">
          <h2 class="pd-section-title">Powerful Unity3D Foundation</h2>
          <p>
            Built on top of Unity3D, our platform operates within a virtual world rich with
            high-fidelity models and textures. Unity's C# scripting API enables full automation
            of the data collection process. We generate vast amounts of data with ensured
            variability — a single RTX 2080 Ti achieves an image generation rate of 5 Hz.
          </p>
        </div>
        <div class="pd-media-pair">
          <video controls preload="none">
            <source src="/research_unity/auto_data_collect.mp4" type="video/mp4">
          </video>
          <img src="/research_unity/windridge.png" alt="Windridge scene">
        </div>
      </div>

      <!-- Section: Accurate Ground Truth -->
      <div class="pd-section pd-section--flip reveal">
        <div class="pd-section-text">
          <h2 class="pd-section-title">Accurate Ground Truth</h2>
          <p>
            By using a simulation, we inherently have access to every variable that defines the
            virtual world — every generated dataset comes with complementary ground truth accurate
            down to the pixel and virtually for free. Realtime ground truth can also be simulated,
            such as pseudo car odometry and camera ego-motion.
          </p>
        </div>
        <div class="pd-media-pair pd-media-pair--single">
          <video controls preload="none">
            <source src="/research_unity/multiview.mp4" type="video/mp4">
          </video>
        </div>
      </div>

      <!-- Section: Deterministic Control -->
      <div class="pd-section reveal">
        <div class="pd-section-text">
          <h2 class="pd-section-title">Deterministic Control of Conditions</h2>
          <p>
            A wide range of weather conditions can be simulated through techniques used in the
            game industry. From sunlight direction to harsh snow, the inclusion of adverse
            conditions serves as a deterministic method to benchmark neural network performance.
          </p>
        </div>
        <div class="pd-media-pair">
          <video controls preload="none">
            <source src="/research_unity/cycle.mp4" type="video/mp4">
          </video>
          <video controls preload="none">
            <source src="/research_unity/foggy-driving.mp4" type="video/mp4">
          </video>
        </div>
      </div>

      <!-- Section: Diverse Datasets -->
      <div class="pd-section pd-section--flip reveal">
        <div class="pd-section-text">
          <h2 class="pd-section-title">Diverse Datasets</h2>
          <p>
            Manipulation of conditions allows us to generate datasets of high variability to
            avoid data bias. Ground truth such as 2D bounding boxes can also exhibit randomness
            through changing poses and occlusion amount. Preliminary experiments demonstrate
            that our synthetic data provides object detection boost when trained alongside real
            data, and holds the same generalizing capabilities as other real datasets.
          </p>
        </div>
        <div class="pd-media-pair">
          <img src="/research_unity/diverse_datasets_1.png" alt="Diverse dataset samples">
          <img src="/research_unity/bbox_1.png" alt="Bounding box ground truth">
        </div>
      </div>

      <!-- Section: Collaborative Testbed -->
      <div class="pd-section reveal">
        <div class="pd-section-text">
          <h2 class="pd-section-title">Collaborative Testbed</h2>
          <p>
            The creation of a real collaborative dataset proves to be difficult because of
            technicalities. Our platform eliminates issues of inaccurate pose data, unstable
            hardware synchronization, and laborious point cloud annotation. We can generate
            collaborative datasets of 2D and 3D formats tailored for V2X edge computing.
          </p>
        </div>
        <div class="pd-media-pair">
          <video controls preload="none">
            <source src="/research_unity/gizmo_intersection.mp4" type="video/mp4">
          </video>
          <video controls preload="none">
            <source src="/research_unity/collaboration.mp4" type="video/mp4">
          </video>
        </div>
      </div>

      <!-- Tags -->
      <div class="pd-specs reveal">
        <div class="project-tags">
          <span class="tag">Unity3D</span>
          <span class="tag">C#</span>
          <span class="tag">Computer Vision</span>
          <span class="tag">ADAS</span>
          <span class="tag">Point Clouds</span>
          <span class="tag">V2X</span>
          <span class="tag">IEBL · UCSD</span>
        </div>
      </div>

    </div>
  </section>

  <div class="pd-back container">
    <a href="/engineering.php" class="project-link">← Back to Engineering</a>
  </div>

<?php require __DIR__ . '/includes/footer.php'; ?>
