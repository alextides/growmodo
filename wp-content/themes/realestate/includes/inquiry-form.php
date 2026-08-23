      <!-- Inquiry Form -->
      <section class="inquiry-section">
        <div class="inquiry-intro">
          <div class="section-icon-group">
            <img src="<?php bloginfo('template_url');?>/images/img_group.webp" alt="Icon" width="30" height="30">
            <img src="<?php bloginfo('template_url');?>/images/img_group_gray_900_02.webp" alt="Icon" width="18" height="18">
            <img src="<?php bloginfo('template_url');?>/images/img_group_gray_900_02_8x8.webp" alt="Icon" width="8" height="8">
          </div>
          <div>
            <h2 class="section-title">Inquire About Seaside Serenity Villa</h2>
            <p class="section-description">Interested in this property? Fill out the form below, and our real estate experts will get back to you with more details, including scheduling a viewing and answering any questions you may have.</p>
          </div>
        </div>

        <div class="inquiry-form-wrapper">
          <form class="form-grid">
            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="firstName">First Name</label>
                <input type="text" id="firstName" class="form-input" placeholder="Enter First Name" required>
              </div>
              <div class="form-group">
                <label class="form-label" for="lastName">Last Name</label>
                <input type="text" id="lastName" class="form-input" placeholder="Enter Last Name" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <input type="email" id="email" class="form-input" placeholder="Enter your Email" required>
              </div>
              <div class="form-group">
                <label class="form-label" for="phone">Phone</label>
                <input type="tel" id="phone" class="form-input" placeholder="Enter Phone Number" required>
              </div>
            </div>

            <div class="form-group">
              <label class="form-label" for="property">Selected Property</label>
              <div class="dropdown-input">Seaside Serenity Villa, Malibu, California</div>
            </div>

            <div class="form-group">
              <label class="form-label" for="message">Message</label>
              <div class="textarea-wrapper">
                <textarea id="message" placeholder="Enter your Message here.."></textarea>
              </div>
            </div>

            <div class="form-footer">
              <div class="checkbox-row">
                <div class="checkbox"></div>
                <label class="checkbox-label">I agree with <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></label>
              </div>
              <button type="submit" class="submit-btn">Send Your Message</button>
            </div>
          </form>
        </div>
      </section>