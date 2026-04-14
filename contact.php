<?php
$page_title = "Contact Us";
$page_desc  = "Get in touch with Rubasa Freight Services Ltd. Call, email, WhatsApp or visit us in Kitende, Uganda.";

// Email processing
$email_sent = false;
$email_error = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $subject_option = isset($_POST['subject']) ? trim($_POST['subject']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    
    // Warehouse fields
    $warehouse_location = isset($_POST['warehouse_location']) ? trim($_POST['warehouse_location']) : '';
    $custom_location = isset($_POST['custom_location']) ? trim($_POST['custom_location']) : '';
    $warehouse_size = isset($_POST['warehouse_size']) ? trim($_POST['warehouse_size']) : '';
    $custom_size = isset($_POST['custom_size']) ? trim($_POST['custom_size']) : '';
    $warehouse_duration = isset($_POST['warehouse_duration']) ? trim($_POST['warehouse_duration']) : '';
    $storage_type = isset($_POST['storage_type']) ? trim($_POST['storage_type']) : '';
    
    // Freight fields
    $pickup_location = isset($_POST['pickup_location']) ? trim($_POST['pickup_location']) : '';
    $delivery_location = isset($_POST['delivery_location']) ? trim($_POST['delivery_location']) : '';
    $cargo_type = isset($_POST['cargo_type']) ? trim($_POST['cargo_type']) : '';
    $weight = isset($_POST['weight']) ? trim($_POST['weight']) : '';
    
    // Validate required fields
    if (empty($name) || empty($phone) || empty($subject_option) || empty($message)) {
        $email_error = "Please fill in all required fields.";
    } else {
        // Prepare email content
        $to = "Sales@rubasafreight.com";
        $subject = "Contact Form: " . ucfirst(str_replace('_', ' ', $subject_option));
        
        // Build email body
        $email_body = "New message from your website contact form\n\n";
        $email_body .= "========================================\n";
        $email_body .= "CONTACT INFORMATION\n";
        $email_body .= "========================================\n";
        $email_body .= "Name: $name\n";
        $email_body .= "Phone: $phone\n";
        $email_body .= "Email: " . ($email ? $email : 'Not provided') . "\n";
        $email_body .= "Subject: " . ucfirst(str_replace('_', ' ', $subject_option)) . "\n\n";
        
        // Add specific details based on subject
        if ($subject_option == 'warehouse') {
            $final_location = ($custom_location && $warehouse_location == 'other') ? $custom_location : $warehouse_location;
            $final_size = ($custom_size && $warehouse_size == 'custom') ? $custom_size : $warehouse_size;
            
            $email_body .= "========================================\n";
            $email_body .= "WAREHOUSE INQUIRY DETAILS\n";
            $email_body .= "========================================\n";
            $email_body .= "Preferred Location: " . ucfirst(str_replace('_', ' ', $final_location)) . "\n";
            $email_body .= "Size Needed: " . ucfirst(str_replace('_', ' ', $final_size)) . "\n";
            $email_body .= "Duration: " . ucfirst(str_replace('_', ' ', $warehouse_duration)) . "\n";
            $email_body .= "Storage Type: " . ucfirst(str_replace('_', ' ', $storage_type)) . "\n\n";
        } elseif ($subject_option == 'freight') {
            $email_body .= "========================================\n";
            $email_body .= "FREIGHT INQUIRY DETAILS\n";
            $email_body .= "========================================\n";
            $email_body .= "Pickup Location: $pickup_location\n";
            $email_body .= "Delivery Location: $delivery_location\n";
            $email_body .= "Cargo Type: " . ucfirst(str_replace('_', ' ', $cargo_type)) . "\n";
            $email_body .= "Estimated Weight: $weight\n\n";
        }
        
        // Add message
        $email_body .= "========================================\n";
        $email_body .= "MESSAGE\n";
        $email_body .= "========================================\n";
        $email_body .= "$message\n\n";
        $email_body .= "========================================\n";
        $email_body .= "Sent from: " . $_SERVER['HTTP_HOST'] . "\n";
        $email_body .= "IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";
        $email_body .= "Date: " . date('Y-m-d H:i:s') . "\n";
        
        // Email headers
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $headers .= "From: " . ($email ? $email : "noreply@{$_SERVER['HTTP_HOST']}") . "\r\n";
        $headers .= "Reply-To: " . ($email ? $email : $phone) . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        // Send email
        if (mail($to, $subject, $email_body, $headers)) {
            $email_sent = true;
        } else {
            $email_error = "Sorry, something went wrong. Please try again or call us directly.";
        }
    }
}

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

      <!-- RIGHT: Form -->
      <div class="fade-up" style="display: flex; flex-direction: column;">
        <div class="contact-form-card" style="flex: 1; display: flex; flex-direction: column;">
          <h3 style="margin-bottom:8px;">Send Us a Message</h3>
          <p style="margin-bottom:28px;font-size:0.9rem;">Fill in the form below and our team will get back to you within a few hours.</p>
          
          <!-- Show success or error messages -->
          <?php if ($email_sent): ?>
              <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 10px; margin-bottom: 20px; border-left: 4px solid #28a745;">
                  <strong>✓ Message Sent Successfully!</strong><br>
                  Thank you for contacting us. We'll get back to you within 24 hours.
              </div>
          <?php elseif ($email_error): ?>
              <div style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 10px; margin-bottom: 20px; border-left: 4px solid #dc3545;">
                  <strong>✗ Error Sending Message</strong><br>
                  <?php echo $email_error; ?> Please call us directly at 0741 046 323.
              </div>
          <?php endif; ?>
          
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="contactForm" style="flex: 1; display: flex; flex-direction: column;">
              <div class="form-group">
                  <label for="fullName">Full Name</label>
                  <input type="text" id="fullName" name="name" placeholder="Your full name" autocomplete="name" required>
              </div>
              
              <div class="form-row">
                  <div class="form-group">
                      <label for="phoneNumber">Phone Number</label>
                      <input type="tel" id="phoneNumber" name="phone" placeholder="0700 000 000" autocomplete="tel" required>
                  </div>
                  <div class="form-group">
                      <label for="emailAddress">Email Address</label>
                      <input type="email" id="emailAddress" name="email" placeholder="you@email.com" autocomplete="email">
                  </div>
              </div>
              
              <div class="form-group">
                  <label for="subjectSelect">Subject</label>
                  <select name="subject" id="subjectSelect" autocomplete="off">
                      <option value="">Select a subject…</option>
                      <option value="quote">Request a Quote</option>
                      <option value="freight">Freight Transport Inquiry</option>
                      <option value="warehouse">Warehousing Inquiry</option>
                      <option value="distribution">Distribution Inquiry</option>
                      <option value="partnership">Partnership / General</option>
                      <option value="other">Other</option>
                  </select>
              </div>
              
              <!-- Dynamic Fields for Warehousing -->
              <div id="warehouseFields" style="display: none;">
                  <div class="form-group">
                      <label for="warehouseLocation">Preferred Warehouse Location</label>
                      <select name="warehouse_location" id="warehouseLocation" autocomplete="off">
                          <option value="">Select location...</option>
                          <option value="kampala">Kampala Central</option>
                          <option value="nansana">Nansana</option>
                          <option value="kireka">Kireka</option>
                          <option value="mukono">Mukono</option>
                          <option value="entebbe">Entebbe</option>
                          <option value="jinja">Jinja</option>
                          <option value="other">Other (Please specify)</option>
                      </select>
                  </div>
                  
                  <div class="form-group" id="customLocationDiv" style="display: none;">
                      <label for="customLocation">Please specify location</label>
                      <input type="text" id="customLocation" name="custom_location" placeholder="Enter your preferred location" autocomplete="off">
                  </div>
                  
                  <div class="form-row">
                      <div class="form-group">
                          <label for="warehouseSize">Warehouse Size Needed</label>
                          <select name="warehouse_size" id="warehouseSize" autocomplete="off">
                              <option value="">Select size...</option>
                              <option value="small">Small (Up to 100 sqm)</option>
                              <option value="medium">Medium (100 - 500 sqm)</option>
                              <option value="large">Large (500 - 1000 sqm)</option>
                              <option value="xl">Extra Large (1000+ sqm)</option>
                              <option value="custom">Custom Size</option>
                          </select>
                      </div>
                      
                      <div class="form-group" id="customSizeDiv" style="display: none;">
                          <label for="customSize">Specify size (sqm)</label>
                          <input type="text" id="customSize" name="custom_size" placeholder="e.g., 750 sqm" autocomplete="off">
                      </div>
                  </div>
                  
                  <div class="form-row">
                      <div class="form-group">
                          <label for="warehouseDuration">Duration Needed</label>
                          <select name="warehouse_duration" id="warehouseDuration" autocomplete="off">
                              <option value="">Select duration...</option>
                              <option value="short">Short-term (1-3 months)</option>
                              <option value="medium">Medium-term (3-6 months)</option>
                              <option value="long">Long-term (6+ months)</option>
                              <option value="flexible">Flexible / Not sure</option>
                          </select>
                      </div>
                      
                      <div class="form-group">
                          <label for="storageType">Storage Type</label>
                          <select name="storage_type" id="storageType" autocomplete="off">
                              <option value="">Select type...</option>
                              <option value="dry">Dry Storage (General goods)</option>
                              <option value="cold">Cold Storage (Perishables)</option>
                              <option value="hazardous">Hazardous Materials</option>
                              <option value="valuable">High-Value / Secure Storage</option>
                              <option value="mixed">Mixed / Not sure</option>
                          </select>
                      </div>
                  </div>
              </div>
              
              <!-- Dynamic Fields for Freight Transport -->
              <div id="freightFields" style="display: none;">
                  <div class="form-row">
                      <div class="form-group">
                          <label for="pickupLocation">Pickup Location</label>
                          <input type="text" id="pickupLocation" name="pickup_location" placeholder="Where to pick up from?" autocomplete="off">
                      </div>
                      <div class="form-group">
                          <label for="deliveryLocation">Delivery Location</label>
                          <input type="text" id="deliveryLocation" name="delivery_location" placeholder="Where to deliver?" autocomplete="off">
                      </div>
                  </div>
                  
                  <div class="form-row">
                      <div class="form-group">
                          <label for="cargoType">Cargo Type</label>
                          <select name="cargo_type" id="cargoType" autocomplete="off">
                              <option value="">Select cargo type...</option>
                              <option value="general">General Cargo</option>
                              <option value="fragile">Fragile Items</option>
                              <option value="perishable">Perishable Goods</option>
                              <option value="hazardous">Hazardous Materials</option>
                              <option value="vehicles">Vehicles / Machinery</option>
                              <option value="other">Other</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="estimatedWeight">Estimated Weight</label>
                          <input type="text" id="estimatedWeight" name="weight" placeholder="e.g., 500 kg, 2 tonnes" autocomplete="off">
                      </div>
                  </div>
              </div>
              
              <!-- Message Field (shown for all) -->
              <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="message" id="message" rows="4" placeholder="Tell us what you need to move, where, and when…" autocomplete="off" required></textarea>
              </div>
              
              <button type="submit" class="btn btn-primary form-submit" style="margin-top: auto;">
                  Send Message
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
              </button>
          </form>
        </div>

        <!-- Map -->
        <div class="map-placeholder" style="height:250px;border-radius:16px;overflow:hidden;margin-top:24px;">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7945688187237!2d32.529723673577664!3d0.19770016419847466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177d990013c7ff81%3A0xfa615edb44fdfaab!2sSt.Mary's%20Stadium%20Kitende!5e0!3m2!1sen!2sug!4v1775911788682!5m2!1sen!2sug" 
            width="100%" 
            height="250" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
          </iframe>
        </div>
      </div>

    </div>
    
    <script>
    // Dynamic form fields script
    (function() {
        function initForm() {
            var subjectSelect = document.getElementById('subjectSelect');
            var warehouseFields = document.getElementById('warehouseFields');
            var freightFields = document.getElementById('freightFields');
            var warehouseLocation = document.getElementById('warehouseLocation');
            var customLocationDiv = document.getElementById('customLocationDiv');
            var warehouseSize = document.getElementById('warehouseSize');
            var customSizeDiv = document.getElementById('customSizeDiv');
            
            if (!subjectSelect) return;
            
            subjectSelect.addEventListener('change', function() {
                if (warehouseFields) warehouseFields.style.display = 'none';
                if (freightFields) freightFields.style.display = 'none';
                
                if (this.value === 'warehouse' && warehouseFields) {
                    warehouseFields.style.display = 'block';
                } else if (this.value === 'freight' && freightFields) {
                    freightFields.style.display = 'block';
                }
            });
            
            if (warehouseLocation) {
                warehouseLocation.addEventListener('change', function() {
                    if (customLocationDiv) {
                        customLocationDiv.style.display = this.value === 'other' ? 'block' : 'none';
                    }
                });
            }
            
            if (warehouseSize) {
                warehouseSize.addEventListener('change', function() {
                    if (customSizeDiv) {
                        customSizeDiv.style.display = this.value === 'custom' ? 'block' : 'none';
                    }
                });
            }
            
            if (subjectSelect.value === 'warehouse' && warehouseFields) {
                warehouseFields.style.display = 'block';
            } else if (subjectSelect.value === 'freight' && freightFields) {
                freightFields.style.display = 'block';
            }
        }
        
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initForm);
        } else {
            initForm();
        }
    })();
    </script>
  </div>
</section>

<!-- QUICK CONTACT STRIP -->
<div class="quick-contact-strip">
  <div class="container">
    <div>
      <div>
        <div>📞</div>
        <h4>Call Us Directly</h4>
        <a href="tel:+256741046323">0741 046 323</a>
      </div>
      <div>
        <div>💬</div>
        <h4>WhatsApp</h4>
        <a href="https://wa.me/256741046323" target="_blank">Send a Message →</a>
      </div>
      <div>
        <div>✉️</div>
        <h4>Email Sales</h4>
        <a href="mailto:sales@rubasafreight.com">sales@rubasafreight.com</a>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>