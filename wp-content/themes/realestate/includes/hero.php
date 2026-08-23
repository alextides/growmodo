      <!-- Start Hero Section -->
      <section class="hero-section">
        <div class="hero-content-wrapper">
          <div class="hero-main">
            <div class="hero-text-section">
              <div class="hero-title-row">
                <h1 class="hero-title">Discover Your Dream Property with Estatein</h1>
                <p class="hero-description">Your journey to finding the perfect property begins here. Explore our listings to find the home that matches your dreams.</p>
              
                <div class="hero-badge">
                    <!-- Center Image -->
                    <img src="<?php bloginfo('template_url');?>/images/home/img_icon.svg" alt="Logo Center" class="logo-image">
                    
                <svg viewBox="0 0 200 200" class="logo-svg" xmlns="http://w3.org">
                  <defs>
                    <!-- Master curve paths -->
                    <path id="top-curve" d="M 15,100 A 85,85 0 1,1 185,100" fill="transparent"></path>
                    <path id="bottom-curve" d="M 185,100 A 85,85 0 0,1 15,100" fill="transparent"></path>
                  </defs>
                  
                  <style>
                    /* 1. Background Block Styles */
                    .text-bg-block {
                      fill: none;
                      stroke: #141414;          /* Background color */
                      stroke-width: 70px;     /* Background block height/thickness */
                      stroke-linecap: round;  /* Rounded ends for the background block */
                    }

                    /* 2. Background Border Styles (Drawn behind the main background) */
                    .text-bg-border {
                      fill: none;
                      stroke: gold;           /* Background border color */
                      stroke-width: 28px;     /* Background thickness + 4px extra for a 2px border */
                      stroke-linecap: round;
                    }
                  </style>

                  <!-- ==================== TOP TEXT GROUP ==================== -->
                  <!-- Outer Border of Background -->
                  <use href="#top-curve" class="text-bg-border" />
                  
                  <!-- Solid Black Background -->
                  <use href="#top-curve" class="text-bg-block" />
                  
                  <!-- Crisp Text Layer -->
                  <text class="logo-text">
                    <textPath href="#top-curve" startOffset="50%" text-anchor="middle" textLength="210" lengthAdjust="spacingAndGlyphs">
                      Your Dream
                    </textPath>
                  </text>


                  <!-- ==================== BOTTOM TEXT GROUP ==================== -->
                  <!-- Outer Border of Background -->
                  <use href="#bottom-curve" class="text-bg-border" />
                  
                  <!-- Solid Black Background -->
                  <use href="#bottom-curve" class="text-bg-block" />
                  
                  <!-- Crisp Text Layer -->
                  <text class="logo-text">
                    <textPath href="#bottom-curve" startOffset="50%" text-anchor="middle" textLength="210" lengthAdjust="spacingAndGlyphs">
                      Property ✨Discover 
                    </textPath>
                  </text>
                </svg>

                </div>

              </div>
            </div>
            
            <div class="hero-buttons">
              <button class="btn-secondary">Learn More</button>
              <button class="btn-primary">Browse Properties</button>
            </div>
            
            <div class="stats-row">
              <div class="stat-card">
                <div class="stat-number">200+</div>
                <div class="stat-label">Happy Customers</div>
              </div>
              <div class="stat-card">
                <div class="stat-number">10k+</div>
                <div class="stat-label">Properties For Clients</div>
              </div>
              <div class="stat-card">
                <div class="stat-number">16+</div>
                <div class="stat-label">Years of Experience</div>
              </div>
            </div>
          </div>
          
          <div class="hero-image-section">
            <img src="<?php bloginfo('template_url');?>/images/home/img_image.webp" alt="Modern luxury building" class="hero-image" loading="lazy">
          </div>
        </div>
      </section>
       <!-- End Hero Section -->

<style>
.hero-badge {
  position: relative;
  width: 200px;
  height: 200px;
  display: flex;
  align-items: center;
  justify-content: center;
  align-self: end;
  margin-right: -115px;
  margin-top: -158px;
}

.logo-image {
  position: absolute;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  object-fit: cover;
  z-index: 1;
  padding: 25px;
}

.logo-svg {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 2;
  overflow: visible;
}

.logo-text {
  font-family: sans-serif;
  font-size: 14px;
  font-weight: bold;
  fill: white;
}

textPath {
  letter-spacing: 7px;
}


@media (max-width: 1024px) {
  .property-footer{
flex-direction: row;
  }

}

@media (max-width: 768px) {
    .property-footer{
flex-direction: column;
  }
  /* 1. Force the main container to stack text first, then image */
  .hero-content-wrapper {
    display: flex;
    flex-direction: column;
    position: relative;
  }

  /* 2. Turn the image container into a flex column, moving the badge inside it visually */
  .hero-image-section {
    display: flex;
    flex-direction: column;
    position: relative;
  }

  /* 3. Force the badge out of the text section flow and pin it onto the image section */
  .hero-badge {
    position: absolute !important;
    z-index: 99;
    left: 20%;
    transform: translateX(-50%);
    bottom: -97px;
  }

.hero-badge {
  position: absolute;
  z-index: 10;       /* Makes sure it sits on top of the image */
  
  /* Positioning coordinates: adjustments depend on your exact design layout */
  bottom: 10%;       /* Pulls it up from the bottom of the container */
  right: 40%;        /* Adjust this percentage to shift it horizontally over the image */
  
  /* Keeps the SVG and image centered inside the badge itself */
  display: flex;
  justify-content: center;
  align-items: center;
}

.hero-badge {
    width: 130px;
    height: 130px;
    bottom: 433px;
    left: 12%;
  }

  /* 1. Turn the parent wrapper into a vertical flexbox layout */
  .hero-content-wrapper {
    display: flex !important;
    flex-direction: column; /* Stacks elements vertically */
  }

  /* 2. Force the image section to take visual priority at the top */
  .hero-image-section {
    order: 1; /* First element from the top */
    width: 100%;
  }

  /* 3. Force the main text and badge section to render below the image */
  .hero-main {
    order: 2; /* Second element, moving it under the image section */
    width: 100%;
  }
}

@media (max-width: 464px) {
    .hero-badge {
width: 100px;
    height: 100px;
    bottom: 667px;
    left: 15%;
  }
}

@media (max-width: 632px) {
    .hero-badge {
width: 100px;
    height: 100px;
    bottom: 632px;
    left: 11%;
  }
}

@media (max-width: 554px) {
    .hero-badge {
width: 100px;
    height: 100px;
    bottom: 664px;
    left: 11%;
  }
}

@media (max-width: 357px) {
    .hero-badge {
width: 100px;
    height: 100px;
    bottom: 802px;
    left: 18%;
  }
}

</style>