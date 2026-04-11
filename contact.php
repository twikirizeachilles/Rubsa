<?php
$page_title = "Contact Us";
$page_desc  = "Get in touch with Rubasa Freight Services Ltd. Call, email, WhatsApp or visit us in Kitende, Uganda.";
include 'includes/head.php';
include 'includes/navbar.php';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="page-hero-bg"></div>
  <div class="container" style="position:relative;z-index:2;">
    <div class="breadcrumb">
      <a href="index.php">Home</a><span>›</span><span>Contact Us</span>
    </div>
    <span class="tag" style="background:rgba(104,164,241,0.15);color:var(--cornflower);border-color:rgba(104,164,241,0.25);">Get In Touch</span>
    <h1>Contact <span style="color:var(--cornflower);">Us</span></h1>
    <p>Have questions or ready to ship? We're here to help you move goods efficiently across Uganda and beyond.</p>
  </div>
</section>

<!-- CONTACT SECTION -->
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

<!-- QUICK CONTACT STRIP -->
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

<?php include 'includes/footer.php'; ?>
