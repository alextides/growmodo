    <!-- Start Contact form section -->
    <section class="form-section">
      <div class="section-header">
        <div class="decorative-icons">
          <img src="<?php bloginfo('template_url');?>/images/img_group.webp" alt="" class="decorative-icon-1" width="30" height="30">
          <img src="<?php bloginfo('template_url');?>/images/img_group_gray_900_02.webp" alt="" class="decorative-icon-2" width="18" height="18">
          <img src="<?php bloginfo('template_url');?>/images/img_group_gray_900_02_8x8.webp" alt="" class="decorative-icon-3" width="8" height="8">
        </div>
        <div>
          <h2 class="section-title">Let's Connect</h2>
          <p class="section-description">We're excited to connect with you and learn more about your real estate goals. Use the form below to get in touch with Estatein. Whether you're a prospective client, partner, or simply curious about our services, we're here to answer your questions and provide the assistance you need.</p>
        </div>
      </div>
      
      <form class="form-container">
        <div class="form-content">
          <div class="form-row">
            <div class="form-group">
              <label for="firstName" class="form-label">First Name</label>
              <input type="text" id="firstName" class="form-input" placeholder="Enter First Name" required>
            </div>
            <div class="form-group">
              <label for="lastName" class="form-label">Last Name</label>
              <input type="text" id="lastName" class="form-input" placeholder="Enter Last Name" required>
            </div>
            <div class="form-group">
              <label for="email" class="form-label">Email</label>
              <input type="email" id="email" class="form-input" placeholder="Enter your Email" required>
            </div>
          </div>
          
          <div class="form-row">
            <div class="form-group">
              <label for="phone" class="form-label">Phone</label>
              <input type="tel" id="phone" class="form-input" placeholder="Enter Phone Number" required>
            </div>
            <div class="form-group">
              <label for="inquiryType" class="form-label">Inquiry Type</label>
              <select id="inquiryType" class="form-select" required>
                <option value="">Select Inquiry Type</option>
                <option value="buying">Buying Property</option>
                <option value="selling">Selling Property</option>
                <option value="investment">Investment Opportunities</option>
                <option value="other">Other</option>
              </select>
            </div>
            <div class="form-group">
              <label for="hearAbout" class="form-label">How Did You Hear About Us?</label>
              <select id="hearAbout" class="form-select" required>
                <option value="">Select</option>
                <option value="search">Search Engine</option>
                <option value="social">Social Media</option>
                <option value="referral">Referral</option>
                <option value="advertisement">Advertisement</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div>
          
          <div class="form-group">
            <label for="message" class="form-label">Message</label>
            <textarea id="message" class="form-textarea" placeholder="Enter your Message here.." required></textarea>
          </div>
        </div>
        
        <div class="form-footer">
          <div class="checkbox-container">
            <input type="checkbox" id="terms" class="checkbox-input" required>
            <label for="terms" class="checkbox-label">
              I agree with <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
            </label>
          </div>
          <button type="submit" class="submit-btn">Send Your Message</button>
        </div>
      </form>
    </section>
<!-- End Contact form section -->