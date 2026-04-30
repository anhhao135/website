<?php
require_once __DIR__ . '/includes/gallery.php';
$config = ['title' => 'Wireless Neuromonitoring - HAO LE', 'desc' => 'Wireless Neuromonitoring System at IEBL UCSD by Hao Le', 'active' => 'engineering', 'dark_header' => true];
require __DIR__ . '/includes/head.php';
?>

  <header class="page-header">
    <div class="container">
      <span class="page-owner"><a href="/engineering.php">Engineering</a></span>
      <span class="page-num">03</span>
      <h1 class="page-title">Wireless<br>Neuro&shy;monitoring<br>System</h1>
    </div>
  </header>

  <section class="project-detail">
    <div class="container">

      <!-- Overview -->
      <div class="pd-overview reveal">
        <div class="pd-text">
          <p>
            As an MS student and hardware &amp; firmware engineer at Prof. Shadi Dayeh's
            Integrated Electronics and Biointerfaces Laboratory (IEBL) at UC San Diego,
            I contributed to an NIH BRAIN Initiative–funded project to build a portable,
            wireless neural data acquisition system for patients with drug-resistant epilepsy.
          </p>
          <p>
            Approximately a third of people with epilepsy cannot control their seizures
            with medication alone - resection or neuromodulation surgery is often required.
            Intracranial monitoring with high-resolution electrodes gives clinicians a far
            more precise picture of the epileptic network before operating. The goal of this
            system is to let patients wear that monitoring hardware at home and live normally,
            rather than being tethered to a hospital bed.
          </p>
          <p>
            IEBL's ultra-high-density thin-film electrodes - featuring a patented platinum
            nanorod interface for low impedance - provide the neural interface. The system
            supports one surface grid (4,096 recording, 256 stimulation channels) and up to
            eight depth probes (128 recording, 16 stimulation each), totalling 6,144 channels
            at 16-bit depth and 2,500 samples per second.
          </p>
          <div class="pd-actions">
            <a href="/research_iebl/Hao Le Project Presentation 2025 Nov 4.pdf" target="_blank" rel="noopener" class="pd-btn">Project Presentation →</a>
            <a href="/research_iebl/Kiefer Forseth AES 2025 electrodes.pdf" target="_blank" rel="noopener" class="pd-btn">AES 2025 Poster →</a>
            <a href="/research_iebl/TaraPorter_RecruitmentPoster2025_final.pdf" target="_blank" rel="noopener" class="pd-btn">IEBL Introduction →</a>
          </div>
        </div>
        <div class="pd-media-pair pd-media-pair--single">
          <img loading="lazy"
               src="<?= htmlspecialchars(thumb_url('research_iebl/me-in-or.jpg', 900, 85)) ?>"
               alt="Hao Le in the operating room">
          <img loading="lazy"
               src="<?= htmlspecialchars(thumb_url('research_iebl/team.PNG', 900, 85)) ?>"
               alt="IEBL team">
        </div>
      </div>

      <!-- Section: System Architecture -->
      <div class="pd-section reveal">
        <div class="pd-section-text">
          <h2 class="pd-section-title">System Architecture</h2>
          <p>
            The system is built around a Xilinx K26 System-on-Module, combining an FPGA
            programmable logic domain with a full Linux processing system. The FPGA handles
            deterministic low-level I/O - clocking recording chips, managing data streams,
            and driving stimulation - while the ARM processors run PetaLinux, serving an
            HTTP API that a Windows client uses to send commands and receive neural data
            into OpenEphys for real-time visualization and storage.
          </p>
          <p>
            The on-person hardware stack consists of a Carrier Card, surface and depth
            Adapter Cards, and headstages that plug directly into the recording and
            stimulation chips. Wi-Fi 6E provides the wireless uplink to the off-person
            workstation. A 20,000 mAh battery sustains eight hours of continuous acquisition.
          </p>
        </div>
        <div class="pd-media-pair pd-media-pair--single">
          <img loading="lazy"
               src="<?= htmlspecialchars(thumb_url('research_iebl/system-architecture.png', 900, 85)) ?>"
               alt="System architecture diagram">
        </div>
      </div>

      <!-- Section: Carrier Card -->
      <div class="pd-section pd-section--flip reveal">
        <div class="pd-section-text">
          <h2 class="pd-section-title">Carrier Card Design</h2>
          <p>
            I designed the Carrier Card - an 8-layer, controlled-impedance PCB that serves
            as the backbone of the on-person unit. It interfaces with the K26 SoM's high-density
            connectors and provides power regulation and sequencing, USB-C Power Delivery 2.0
            negotiation for beyond 15 W, USB 3.0, Wi-Fi 6E via an M.2 slot (Intel AX210),
            SD card storage, EEPROM, and auxiliary peripherals including UART, JTAG, current
            monitoring, and an accelerometer. FPGA I/O is routed down to the adapter cards
            over board-to-board connectors, allowing surface and depth signals to coexist.
          </p>
        </div>
        <div class="pd-media-pair pd-media-pair--single">
          <img loading="lazy"
               src="<?= htmlspecialchars(thumb_url('research_iebl/carrier-card.png', 900, 85)) ?>"
               alt="Carrier card PCB">
        </div>
      </div>

      <!-- Section: SerDes -->
      <div class="pd-section reveal">
        <div class="pd-section-text">
          <h2 class="pd-section-title">SerDes Link Design</h2>
          <p>
            Connecting eight depth-probe headstages to the on-belt processing unit required
            a high-speed serial link. I designed the SerDes system using Texas Instruments
            chip pairs running at a 75 MHz I/O clock and 2.1 Gbps link rate - sufficient to
            carry all headstages at 2,500 samples per second with margin. USB-C connectors
            were chosen over edge connectors for their smaller form factor, durability over
            many mate cycles, and easy replaceability. A single USB-C Gen 2 cable (5 Gbps,
            four standard twisted pairs) carries both the high-speed data and power to each
            headstage.
          </p>
        </div>
        <div class="pd-media-pair pd-media-pair--single">
          <img loading="lazy"
               src="<?= htmlspecialchars(thumb_url('research_iebl/serdes.png', 900, 85)) ?>"
               alt="SerDes link design">
        </div>
      </div>

      <!-- Section: Surface System -->
      <div class="pd-section pd-section--flip reveal">
        <div class="pd-section-text">
          <h2 class="pd-section-title">Surface System</h2>
          <p>
            The surface grid path is more complex: data must cross the skull wirelessly because
            the acquisition ASIC is subcutaneously implanted. I collaborated with the surface
            system engineers on the adapter card, which contains an LC tank circuit for inductive
            transcutaneous power delivery, a Bluetooth Low Energy module for low-speed control,
            and a twin-axial link to an on-head flex module that routes data to and from the
            implanted PolarFire FPGA unit. The SoM's gigabit transceiver decodes the uplinked
            surface data alongside the wired depth streams.
          </p>
        </div>
        <div class="pd-media-pair pd-media-pair--single">
          <img loading="lazy"
               src="<?= htmlspecialchars(thumb_url('research_iebl/surface-system.png', 900, 85)) ?>"
               alt="Surface system diagram">
        </div>
      </div>

      <!-- Section: Results -->
      <div class="pd-section reveal">
        <div class="pd-section-text">
          <h2 class="pd-section-title">Outcomes</h2>
          <p>
            The system was validated in multiple benchtop and animal trials, demonstrating
            real-time recording and stimulation at full channel count over Wi-Fi. The first
            implantation of the full recording and stimulation system in a large animal
            survival model was demonstrated with six depth probes (864 total contacts) in a
            pig over 27 days of wireless ambulatory recording. Postmortem analysis showed no
            gross injury and minimal reactive gliosis.
          </p>
          <p>
            IEBL is one of only two teams in the world - alongside Neuralink - to receive
            FDA approval for multi-thousand-channel brain interfaces. Human trials are
            targeted for Fall 2026.
          </p>
        </div>
        <div class="pd-media-pair pd-media-pair--single">
          <img loading="lazy"
               src="<?= htmlspecialchars(thumb_url('research_iebl/outcome.png', 900, 85)) ?>"
               alt="System outcomes and validation">
        </div>
      </div>

      <!-- Specs -->
      <div class="pd-specs reveal">
        <h2 class="pd-section-title">System Specifications</h2>
        <div class="pd-spec-grid">
          <div class="pd-spec"><span class="pd-spec-val">6,144</span><span class="pd-spec-key">Total channels</span></div>
          <div class="pd-spec"><span class="pd-spec-val">2,500 S/s</span><span class="pd-spec-key">Sample rate</span></div>
          <div class="pd-spec"><span class="pd-spec-val">210+ Mbps</span><span class="pd-spec-key">Throughput</span></div>
          <div class="pd-spec"><span class="pd-spec-val">8 hrs</span><span class="pd-spec-key">Battery life</span></div>
          <div class="pd-spec"><span class="pd-spec-val">Wi-Fi 6E</span><span class="pd-spec-key">Wireless link</span></div>
          <div class="pd-spec"><span class="pd-spec-val">NIH BRAIN</span><span class="pd-spec-key">Funding</span></div>
        </div>
      </div>

    </div>
  </section>

  <div class="pd-back container">
    <a href="/engineering.php" class="project-link">← Back to Engineering</a>
  </div>

<?php require __DIR__ . '/includes/footer.php'; ?>
