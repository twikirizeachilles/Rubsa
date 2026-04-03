<?php
$page_title = "Gallery";
$page_desc  = "Explore Rubasa Freight Services Ltd's fleet, facilities, team, and operations through our gallery.";
include 'includes/head.php';
include 'includes/navbar.php';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="page-hero-bg"></div>
  <div class="container" style="position:relative;z-index:2;">
    <div class="breadcrumb">
      <a href="index.php">Home</a><span>›</span><span>Gallery</span>
    </div>
    <span class="tag" style="background:rgba(104,164,241,0.15);color:var(--cornflower);border-color:rgba(104,164,241,0.25);">Our Work</span>
    <h1>Our <span style="color:var(--cornflower);">Gallery</span></h1>
    <p>A look at our fleet, operations, facilities, and the team behind every successful delivery.</p>
  </div>
</section>

<!-- GALLERY -->
<section class="section-pad" style="background:var(--off-white);">
  <div class="container">

    <!-- Fleet Section -->
    <div class="section-header fade-up" style="margin-bottom:40px;">
      <span class="tag">Fleet</span>
      <h2>Our <span class="gradient-text">Fleet</span></h2>
    </div>
    <div class="gallery-grid fade-up" style="margin-bottom:70px;">
      <div class="gallery-item" style="background:linear-gradient(135deg,#0a1e42,#1a3a7a);">
        <div class="gallery-item-inner">
          <div class="gallery-item-icon">🚛</div>
          <div class="gallery-item-label">Heavy Freight Trucks</div>
        </div>
        <div class="gallery-overlay"></div>
        <div style="position:absolute;bottom:20px;left:20px;color:white;z-index:2;">
          <div style="font-family:'Syne',sans-serif;font-weight:700;font-size:1rem;">Long Haul Carriers</div>
          <div style="font-size:0.8rem;opacity:0.6;">Cross-border & regional routes</div>
        </div>
      </div>
      <div class="gallery-item" style="background:linear-gradient(135deg,#0f2548,#1f4591);">
        <div class="gallery-item-inner">
          <div class="gallery-item-icon">🚐</div>
          <div class="gallery-item-label">Light Delivery Vans</div>
        </div>
        <div class="gallery-overlay"></div>
        <div style="position:absolute;bottom:20px;left:20px;color:white;z-index:2;">
          <div style="font-family:'Syne',sans-serif;font-weight:700;font-size:1rem;">Urban Delivery Fleet</div>
          <div style="font-size:0.8rem;opacity:0.6;">Last-mile within Kampala</div>
        </div>
      </div>
      <div class="gallery-item" style="background:linear-gradient(135deg,#122856,#2b6ad0);">
        <div class="gallery-item-inner">
          <div class="gallery-item-icon">🏗️</div>
          <div class="gallery-item-label">Flatbed Trucks</div>
        </div>
        <div class="gallery-overlay"></div>
        <div style="position:absolute;bottom:20px;left:20px;color:white;z-index:2;">
          <div style="font-family:'Syne',sans-serif;font-weight:700;font-size:1rem;">Heavy Cargo Flatbeds</div>
          <div style="font-size:0.8rem;opacity:0.6;">Construction & oversized loads</div>
        </div>
      </div>
    </div>

    <!-- Warehouse Section -->
    <div class="section-header fade-up" style="margin-bottom:40px;">
      <span class="tag">Facilities</span>
      <h2>Our <span class="gradient-text">Facilities</span></h2>
    </div>
    <div class="gallery-grid fade-up" style="margin-bottom:70px;">
      <div class="gallery-item" style="background:linear-gradient(135deg,#0a1e42,#1f4591);aspect-ratio:16/9;grid-column:span 2;">
        <div class="gallery-item-inner">
          <div class="gallery-item-icon">🏭</div>
          <div class="gallery-item-label">Main Warehouse — Kitende, Uganda</div>
        </div>
        <div class="gallery-overlay"></div>
        <div style="position:absolute;bottom:20px;left:24px;color:white;z-index:2;">
          <div style="font-family:'Syne',sans-serif;font-weight:700;font-size:1.1rem;">Warehouse & Storage Facility</div>
          <div style="font-size:0.82rem;opacity:0.6;">Behind St. Mary's Stadium, Kitende</div>
        </div>
      </div>
      <div class="gallery-item" style="background:linear-gradient(135deg,#061e47,#1a3a7a);">
        <div class="gallery-item-inner">
          <div class="gallery-item-icon">📦</div>
          <div class="gallery-item-label">Storage & Inventory</div>
        </div>
        <div class="gallery-overlay"></div>
      </div>
    </div>

    <!-- Team Section -->
    <div class="section-header fade-up" style="margin-bottom:40px;">
      <span class="tag">Our People</span>
      <h2>The <span class="gradient-text">Team</span></h2>
    </div>
    <div class="gallery-grid fade-up">
      <div class="gallery-item" style="background:linear-gradient(135deg,#122856,#2463c5);">
        <div class="gallery-item-inner">
          <div class="gallery-item-icon">👨‍💼</div>
          <div class="gallery-item-label">Management Team</div>
        </div>
        <div class="gallery-overlay"></div>
      </div>
      <div class="gallery-item" style="background:linear-gradient(135deg,#0a1e42,#1f4591);">
        <div class="gallery-item-inner">
          <div class="gallery-item-icon">🚚</div>
          <div class="gallery-item-label">Drivers & Field Staff</div>
        </div>
        <div class="gallery-overlay"></div>
      </div>
      <div class="gallery-item" style="background:linear-gradient(135deg,#0f2548,#2b6ad0);">
        <div class="gallery-item-inner">
          <div class="gallery-item-icon">💻</div>
          <div class="gallery-item-label">Operations & Logistics</div>
        </div>
        <div class="gallery-overlay"></div>
      </div>
    </div>

  </div>
</section>

<!-- Upload Notice -->
<div style="background:var(--white);padding:40px 0;border-top:1px solid var(--light-gray);">
  <div class="container" style="text-align:center;">
    <p style="color:var(--text-light);font-size:0.9rem;">📸 <em>Real photos of our fleet, warehouse, and team can be added here by replacing the placeholder cards with your actual images.</em></p>
  </div>
</div>

<!-- CTA -->
<section class="cta-banner">
  <div class="container" style="position:relative;z-index:1;">
    <h2>Impressed? Let's Work Together.</h2>
    <p>Contact us today and let Rubasa Freight Services handle your logistics needs.</p>
    <div class="cta-btns">
      <a href="contact.php" class="btn btn-white">Get In Touch</a>
      <a href="services.php" class="btn btn-outline">View Services</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
