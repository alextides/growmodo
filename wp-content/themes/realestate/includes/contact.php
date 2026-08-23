    <!-- Start Contact Section -->
    <section class="contact-section">
      <div class="container">
        <div class="section-header">
          <div class="section-icons">
            <img src="<?php bloginfo('template_url');?>/images/img_group.webp" alt="Icon" width="30" height="30">
            <img src="<?php bloginfo('template_url');?>/images/img_group_gray_900_02.webp" alt="Icon" width="18" height="18">
            <img src="<?php bloginfo('template_url');?>/images/img_group_gray_900_02_8x8.webp" alt="Icon" width="8" height="8">
          </div>
          <h2 class="section-title">Let's Make it Happen</h2>
          <p class="section-description">Ready to take the first step toward your dream property? Fill out the form below, and our real estate wizards will work their magic to find your perfect match. Don't wait; let's embark on this exciting journey together.</p>
        </div>
        
        <form class="form-container">
          <div class="form-grid">
            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="firstName">First Name</label>
                <input type="text" id="firstName" class="form-input" placeholder="Enter First Name">
              </div>
              <div class="form-group">
                <label class="form-label" for="lastName">Last Name</label>
                <input type="text" id="lastName" class="form-input" placeholder="Enter Last Name">
              </div>
              <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <input type="email" id="email" class="form-input" placeholder="Enter your Email">
              </div>
              <div class="form-group">
                <label class="form-label" for="phone">Phone</label>
                <input type="tel" id="phone" class="form-input" placeholder="Enter Phone Number">
              </div>
            </div>
            
            <div class="form-row">
              <div class="form-group">
                <label class="form-label">Preferred Location</label>
                <div class="form-select">
                  <span class="form-select-text">Select Location</span>
                  <img src="<?php bloginfo('template_url');?>/images/properties/img_icon_white_a700.svg" alt="Dropdown" width="24" height="24">
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">Property Type</label>
                <div class="form-select">
                  <span class="form-select-text">Select Property Type</span>
                  <img src="<?php bloginfo('template_url');?>/images/properties/img_icon_white_a700.svg" alt="Dropdown" width="24" height="24">
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">No. of Bathrooms</label>
                <div class="form-select">
                  <span class="form-select-text">Select no. of Bedrooms</span>
                  <img src="<?php bloginfo('template_url');?>/images/properties/img_icon_white_a700.svg" alt="Dropdown" width="24" height="24">
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">No. of Bedrooms</label>
                <div class="form-select">
                  <span class="form-select-text">Select no. of Bedrooms</span>
                  <img src="<?php bloginfo('template_url');?>/images/properties/img_icon_white_a700.svg" alt="Dropdown" width="24" height="24">
                </div>
              </div>
            </div>
            
            <div class="form-row">
              <div class="form-group">
                <label class="form-label">Budget</label>
                <div class="form-select">
                  <span class="form-select-text">Select Budget</span>
                  <img src="<?php bloginfo('template_url');?>/images/properties/img_icon_white_a700.svg" alt="Dropdown" width="24" height="24">
                </div>
              </div>
              <div class="contact-method-group">
                <label class="form-label">Preferred Contact Method</label>
                <div class="contact-methods">
                  <div class="contact-method-option">
                    <div class="contact-method-content">
                      <img src="<?php bloginfo('template_url');?>/images/properties/img_icon_white_a700_24x24.svg" alt="Phone icon" width="24" height="24">
                      <span class="contact-method-text">Enter Your Number</span>
                    </div>
                    <div class="radio-button selected"></div>
                  </div>
                  <div class="contact-method-option">
                    <div class="contact-method-content">
                      <img src="<?php bloginfo('template_url');?>/images/properties/img_icon_2.svg" alt="Email icon" width="24" height="24">
                      <span class="contact-method-text">Enter Your Email</span>
                    </div>
                    <div class="radio-button"></div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="message-group">
              <label class="form-label" for="message">Message</label>
              <textarea id="message" class="message-input" placeholder="Enter your Message here.."></textarea>
            </div>
          </div>
          
          <div class="form-footer">
            <div class="terms-checkbox">
              <div class="checkbox"></div>
              <p class="terms-text">I agree with <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></p>
            </div>
            <button type="submit" class="submit-btn contact-sbmt">Send Your Message</button>
          </div>
        </form>
      </div>
    </section>
<!-- End Contact Section -->
