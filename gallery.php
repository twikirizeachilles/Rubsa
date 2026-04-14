<?php
$page_title = "Gallery";
$page_desc  = "Explore Rubasa Freight Services Ltd's fleet, facilities, and operations through our gallery.";
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
    <p>A look at our fleet, operations, and facilities behind every successful delivery.</p>
  </div>
</section>

<!-- GALLERY -->
<section class="section-pad" style="background:var(--off-white);">
  <div class="container">

    <!-- Fleet Section -->
    <div class="section-header fade-up" style="margin-bottom:40px;">
      <span class="tag">Fleet</span>
      <h2>Our <span class="gradient-text">Fleet</span></h2>
      <p>Explore our modern, well-maintained fleet designed to handle all your logistics needs.</p>
    </div>
    <div class="gallery-grid fade-up" style="margin-bottom:70px;">
      
      <!-- Fleet Item 1 - Heavy Freight Trucks -->
      <div class="gallery-item" style="background:linear-gradient(135deg,#0a1e42,#1a3a7a);">
        <div class="gallery-item-image">
          <img src="assets/images/freight2.png" alt="Heavy Freight Trucks" loading="lazy">
        </div>
        <div class="gallery-item-inner">
          <div class="gallery-item-icon">🚛</div>
          <div class="gallery-item-label">Heavy Freight Trucks</div>
        </div>
        <div class="gallery-overlay"></div>
        <div class="gallery-item-caption">
          <div class="caption-title">Long Haul Carriers</div>
          <div class="caption-desc">Cross-border & regional routes</div>
        </div>
      </div>
      
      <!-- Fleet Item 2 - Light Delivery Vans -->
      <div class="gallery-item" style="background:linear-gradient(135deg,#0f2548,#1f4591);">
        <div class="gallery-item-image">
          <img src="assets/images/last-mile.png" alt="Light Delivery Vans" loading="lazy">
        </div>
        <div class="gallery-item-inner">
          <div class="gallery-item-icon">🚐</div>
          <div class="gallery-item-label">Light Delivery Vans</div>
        </div>
        <div class="gallery-overlay"></div>
        <div class="gallery-item-caption">
          <div class="caption-title">Urban Delivery Fleet</div>
          <div class="caption-desc">Last-mile within Kampala</div>
        </div>
      </div>
      
      <!-- Fleet Item 3 - Flatbed Trucks -->
      <div class="gallery-item" style="background:linear-gradient(135deg,#122856,#2b6ad0);">
        <div class="gallery-item-image">
          <img src="assets/images/Heavycargoflatbeds.png" alt="Flatbed Trucks" loading="lazy">
        </div>
        <div class="gallery-item-inner">
          <div class="gallery-item-icon">🏗️</div>
          <div class="gallery-item-label">Flatbed Trucks</div>
        </div>
        <div class="gallery-overlay"></div>
        <div class="gallery-item-caption">
          <div class="caption-title">Heavy Cargo Flatbeds</div>
          <div class="caption-desc">Construction & oversized loads</div>
        </div>
      </div>
    </div>

    <!-- Facilities Section -->
    <div class="section-header fade-up" style="margin-bottom:40px;">
      <span class="tag">Facilities</span>
      <h2>Our <span class="gradient-text">Facilities</span></h2>
      <p>State-of-the-art warehousing and storage facilities for all your logistics needs.</p>
    </div>
    <div class="gallery-grid fade-up">
      
      <!-- Facility Item 1 - Main Warehouse -->
      <div class="gallery-item featured" style="background:linear-gradient(135deg,#0a1e42,#1f4591);">
        <div class="gallery-item-image">
          <img src="assets/images/warehouse.png" alt="Main Warehouse" loading="lazy">
        </div>
        <div class="gallery-item-inner">
          <div class="gallery-item-icon">🏭</div>
          <div class="gallery-item-label">Main Warehouse in Uganda</div>
        </div>
        <div class="gallery-overlay"></div>
        <div class="gallery-item-caption">
          <div class="caption-title">Warehouse & Storage Facility</div>
          <div class="caption-desc">We have a state-of-the-art warehouses in all parts of Uganda</div>
        </div>
      </div>
      
      <!-- Facility Item 2 - Storage & Inventory -->
      <div class="gallery-item" style="background:linear-gradient(135deg,#061e47,#1a3a7a);">
        <div class="gallery-item-image">
          <img src="assets/images/storage.png" alt="Storage & Inventory" loading="lazy">
        </div>
        <div class="gallery-item-inner">
          <div class="gallery-item-icon">📦</div>
          <div class="gallery-item-label">Storage & Inventory</div>
        </div>
        <div class="gallery-overlay"></div>
        <div class="gallery-item-caption">
          <div class="caption-title">Organized Storage</div>
          <div class="caption-desc">Efficient inventory management</div>
        </div>
      </div>
      
      
    </div>

  </div>
</section>

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