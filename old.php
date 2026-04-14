<!-- this was for the contact form and map where by i wanted to have a section that dymanically change the form fields -->
<section class="section-pad" style="background:var(--off-white);" id="quote">
  <div class="container">
    <div class="contact-grid">

      <!-- LEFT: Info -->
      <div class="contact-info fade-up">
        <div>
          <span class="tag">Reach Us</span>
          <h2 style="margin-bottom:8px;">Let's <span class="gradient-text">Talk Logistics</span></h2>
          <p style="margin-bottom:32px;">Call us, send a WhatsApp message, or fill out the form. We respond fast.</p>
        </div>

        <div class="contact-card">
          <div class="contact-card-icon">📞</div>
          <div class="contact-card-text">
            <strong>Phone</strong>
            <span><a href="tel:+256741046323" style="color:var(--text-dark);font-weight:600;">0741 046 323</a></span>
          </div>
        </div>

        <div class="contact-card">
          <div class="contact-card-icon">💬</div>
          <div class="contact-card-text">
            <strong>WhatsApp</strong>
            <span><a href="https://wa.me/256741046323" target="_blank" style="color:#25d366;font-weight:600;">Chat with us on WhatsApp →</a></span>
          </div>
        </div>

        <div class="contact-card">
          <div class="contact-card-icon">✉️</div>
          <div class="contact-card-text">
            <strong>Email</strong>
            <span><a href="mailto:Sales@rubasafreight.com" style="color:var(--royal);font-weight:500;">sales@rubasafreight.com</a></span>
          </div>
        </div>

        <div class="contact-card">
          <div class="contact-card-icon">📍</div>
          <div class="contact-card-text">
            <strong>Location</strong>
            <span>Kitende, behind St. Mary's Stadium, Uganda</span>
          </div>
        </div>

        <!-- Working Hours -->
        <div>
          <h4 style="font-family:'Syne',sans-serif;font-size:0.82rem;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-light);margin-bottom:14px;">Working Hours</h4>
          <div class="hours-grid">
            <div class="hours-item">
              <div class="hours-day">Mon – Fri</div>
              <div class="hours-time">8:00 AM – 5:00 PM</div>
            </div>
            <div class="hours-item">
              <div class="hours-day">Saturday</div>
              <div class="hours-time">8:00 AM – 2:00 PM</div>
            </div>
            <div class="hours-item" style="grid-column:span 2;">
              <div class="hours-day">Sunday</div>
              <div class="hours-time" style="color:var(--text-light);font-size:0.85rem;">Closed — WhatsApp available</div>
            </div>
          </div>
        </div>

        <!-- Social Links -->
        <div>
          <h4 style="font-family:'Syne',sans-serif;font-size:0.82rem;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-light);margin-bottom:14px;">Follow Us</h4>
          <div style="display:flex;gap:12px;flex-wrap:wrap;">
            <a href="https://facebook.com" target="_blank" class="btn btn-primary" style="padding:10px 18px;font-size:0.82rem;">Facebook</a>
            <a href="https://linkedin.com" target="_blank" class="btn btn-primary" style="padding:10px 18px;font-size:0.82rem;">LinkedIn</a>
            <a href="https://tiktok.com" target="_blank" class="btn btn-primary" style="padding:10px 18px;font-size:0.82rem;">TikTok</a>
            <a href="https://twitter.com" target="_blank" class="btn btn-primary" style="padding:10px 18px;font-size:0.82rem;">Twitter</a>
          </div>
        </div>
      </div>

      <!-- RIGHT: Form + Map -->
        
      <div class="fade-up">
        <div class="contact-form-card">
          <h3 style="margin-bottom:8px;">Send Us a Message</h3>
          <p style="margin-bottom:28px;font-size:0.9rem;">Fill in the form below and our team will get back to you within a few hours.</p>
          <form action="#" method="POST">
            <div class="form-group">
              <label>Full Name</label>
              <input type="text" name="name" placeholder="Your full name" required>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label>Phone Number</label>
                <input type="tel" name="phone" placeholder="0700 000 000" required>
              </div>
              <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="you@email.com">
              </div>
            </div>
            <div class="form-group">
              <label>Subject</label>
              <select name="subject">
                <option value="">Select a subject…</option>
                <option>Request a Quote</option>
                <option>Freight Transport Inquiry</option>
                <option>Warehousing Inquiry</option>
                <option>Distribution Inquiry</option>
                <option>Partnership / General</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-group">
              <label>Message</label>
              <textarea name="message" rows="5" placeholder="Tell us what you need to move, where, and when…" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary form-submit">
              Send Message
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
            </button>
          </form>
        </div>


        <!-- Map -->
        <div class="map-placeholder" style="height:300px;border-radius:16px;overflow:hidden;margin-top:24px;position:relative;">
          
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7945688187237!2d32.529723673577664!3d0.19770016419847466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177d990013c7ff81%3A0xfa615edb44fdfaab!2sSt.Mary&#39;s%20Stadium%20Kitende!5e0!3m2!1sen!2sug!4v1775911788682!5m2!1sen!2sug" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          
        </div>
      </div>

    </div>
  </div>
</section>

<!-- the form ends here -->


<!-- the working form that am trying to adjust to solve the console error -->

<!-- this the beginning part of the home page  -->
 
<!-- ═══════════════════════════ HERO ═══════════════════════════ -->
<section class="hero">
  <div class="hero-bg-grid"></div>
  <div class="hero-orbs">
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>
  </div>
  <div class="container hero-content">
    <div class="hero-grid">
      <!-- Text -->
      <div class="hero-text">
        <span class="tag">🇺🇬 Uganda & East Africa</span>
        <h1>Excellence in<br><em>Distribution</em></h1>
        <p class="hero-tagline">Reliable, efficient and technology-driven freight solutions across Uganda and beyond — from pickup to final delivery.</p>
        <div class="hero-btns">
          <a href="contact.php#quote" class="btn btn-primary">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
            Request a Quote
          </a>
          <a href="contact.php" class="btn btn-outline">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            Contact Us
          </a>
        </div>
        <div class="hero-stats">
          <div class="stat">
            <div class="stat-num"><span data-target="5" data-suffix="+">0+</span></div>
            <div class="stat-label">Regions Covered</div>
          </div>
          <div class="stat">
            <div class="stat-num"><span data-target="100" data-suffix="%">0%</span></div>
            <div class="stat-label">Commitment</div>
          </div>
          <div class="stat">
            <div class="stat-num"><span data-target="24" data-suffix="/7">0/7</span></div>
            <div class="stat-label">Support</div>
          </div>
        </div>
      </div>

      <!-- Carousel -->
      <div class="hero-carousel">
        <div class="carousel-slides" id="carouselTrack">
          <div class="carousel-slide">
            <div class="carousel-slide-icon">🚛</div>
            <div class="carousel-slide-label">Freight Transport</div>
            <div class="carousel-slide-desc">Local & cross-border cargo across East Africa</div>
          </div>
          <div class="carousel-slide">
            <div class="carousel-slide-icon">✈️</div>
            <div class="carousel-slide-label">Air Freight</div>
            <div class="carousel-slide-desc">Fast airfreight coordination & handling</div>
          </div>
          <div class="carousel-slide">
            <div class="carousel-slide-icon">🚢</div>
            <div class="carousel-slide-label">Sea Freight</div>
            <div class="carousel-slide-desc">Reliable sea cargo & port clearance</div>
          </div>
          <div class="carousel-slide">
            <div class="carousel-slide-icon">📦</div>
            <div class="carousel-slide-label">Last-Mile Delivery</div>
            <div class="carousel-slide-desc">Your goods, delivered to the final doorstep</div>
          </div>
        </div>
        <div class="carousel-overlay"></div>
        <div class="carousel-dots">
          <button class="carousel-dot active"></button>
          <button class="carousel-dot"></button>
          <button class="carousel-dot"></button>
          <button class="carousel-dot"></button>
        </div>
      </div>
    </div>
  </div>
</section>
 <!-- this is the hero section end  -->


 <!-- this is the gallery page that was their before -->
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
<!-- this is the end of the gallery page  -->


<!-- QUICK CONTACT STRIP  that was on the contact page -->
<div style="background:var(--navy);padding:50px 0;">
  <div class="container">
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;text-align:center;">
      <div>
        <div style="font-size:2rem;margin-bottom:10px;">📞</div>
        <h4 style="color:white;margin-bottom:6px;">Call Us Directly</h4>
        <a href="tel:+256741046323" style="color:var(--cornflower);font-size:1.1rem;font-weight:600;">0741 046 323</a>
      </div>
      <div>
        <div style="font-size:2rem;margin-bottom:10px;">💬</div>
        <h4 style="color:white;margin-bottom:6px;">WhatsApp</h4>
        <a href="https://wa.me/256741046323" target="_blank" style="color:#25d366;font-size:1.1rem;font-weight:600;">Send a Message →</a>
      </div>
      <div>
        <div style="font-size:2rem;margin-bottom:10px;">✉️</div>
        <h4 style="color:white;margin-bottom:6px;">Email Sales</h4>
        <a href="mailto:sales@rubasafreight.com" style="color:var(--cornflower);font-size:0.95rem;font-weight:500;">sales@rubasafreight.com</a>
      </div>
    </div>
  </div>
</div>
<!-- this is the quick contact strip   -->