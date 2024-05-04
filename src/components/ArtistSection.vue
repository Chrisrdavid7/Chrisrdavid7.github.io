<template>
  <div class="artist-container">
    <div class="artist-tagline-container">
      <img class="welcome-to-gigz" src="../assets/welcome-to-gigz.png"/>
    </div>
    <div class="artists-headline">
      <span>EMPOWERING ARTISTS</span>
    </div>
    <div class="connecting-container">
      <div class="fans-block">
        <span>CONNECTING FANS</span>
      </div>
    </div>
    <div class="image-copy-right">
      <div class="copy-left-container">
        <div class="copy-left-button-container">
          <div class="copy-left-button">POWERED BY AI</div>
        </div>
        <div class="copy-left-upper">
          <h5>SHOW & TOUR CREATION</h5>
          <p>Book gigs faster through our <br/>streamlined AI event creation tool</p>
        </div>
        <div class="copy-left-lower">
          <h5>VENUE MARKETPLACE</h5>
          <p>AI sifts through millions of <br/>data points to discover <br/>your ideal performance venue</p>
        </div>
      </div>
      <div class="image-copy-image-container">
        <img class="tour-image" src="../assets/bani-screen.png"/>
      </div>
    </div>
    <div class="image-copy-left">
      <div class="copy-right-container">
        <div class="copy-left-button-container">
          <div class="copy-left-button">Take Back Control</div>
        </div>
        <div class="copy-left-upper">
          <h5>Analytics Dashboard</h5>
          <p>Navigate your live career with our <br />unparalleled, AI-enhanced, <br/>comprehensive control panel</p>
        </div>
        <div class="copy-left-lower">
          <h5>Innovative Placements</h5>
          <p>Secure bookings on the world's<br/> most notable stages</p>
        </div>
      </div>
      <div class="image-copy-image-container">
        <img class="tour-image" src="../assets/dashboard-screen.png"/>
      </div>
    </div>
  </div>
</template>



<script>
import { ref } from 'vue'
export default {
  name: 'ArtistSection',
  components: {
  }
}
</script>




<style lang="scss">


@font-face {
  font-family: 'Lab Grotesque';
  src: url('/media/fonts/LabGrotesque/LabGrotesqueBold.woff') format('woff');
  font-weight: bold; // Specifies that this font file is used when bold styling is requested
  font-style: normal;
}

@font-face {
  font-family: 'Lab Grotesque';
  src: url('/media/fonts/LabGrotesque/LabGrotesqueBlack.woff') format('woff');
  font-weight: 900; 
  font-style: normal;
}

@font-face {
  font-family: 'Lab Grotesque';
  src: url('/media/fonts/LabGrotesque/LabGrotesqueRegular.woff') format('woff');
  font-weight: 400; 
  font-style: normal;
}


/* Tagline Container */
.artist-tagline-container {
  display: flex;
  justify-content: center;
  max-width: 90%;
  margin: auto;
}

/* Welcome Image */
.welcome-to-gigz {
  max-width: 600px;
  margin-top: 2.5em;
}

/* Gigz Blue/Green Logo */
.artist-container {
  margin-top: -20px;
  justify-content: center;
  align-items: center;
  text-align: center;
  background: url('../assets/sectionBg.png');
  @media (max-width: 768px) {
    display: block;
  }
}

/* EMPOWERING ARTISTS */
.artists-headline {
  font-family: 'Lab Grotesque', sans-serif;
  font-size: 3.2rem;
  font-weight: 900;
  line-height: 42.87px;
  letter-spacing: 0.5em;
  text-align: center;
  color: #000000;
  margin-top: 50px;
  @media (max-width: 768px) {
    font-size: 1.5rem;
  }
}

/* Connecting Fans */
.fans-block {
  background: #000000;
  color: #ffffff;
  justify-content: center;
  display: flex;
  font-size: 3rem;
  font-family: "LabGrostesque", sans-serif;
  font-weight: 900;
  align-items: center;
  margin-top: 50px;
  padding-left: 1rem;
  padding-right: 1rem;
  @media (max-width: 768px) {
    width: 80%;
    font-size: 2rem;
  }
}
/* Connecting Container */
.connecting-container {
  display: flex;
  justify-content: center;
  margin-top: 50px;
}


/* TOP TWO SECTIONS */
.image-copy-right {
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
  justify-content: center;
  margin-top: 4.5em;
}

/* TOP LEFT CONTAINER */
.copy-left-container {
  display: block;
  padding-left: 3rem;
  padding-right: 3rem;
  margin-top: 11rem;
  justify-content: center;
}

/* TOP LEFT upper */
.copy-left-upper {
  font-family: "LabGrostesque", sans-serif;
  font-weight: normal;
  display: block;
  padding: 1rem; // Adds padding around the text for better spacing
  margin-top: 1rem; // Adds margin on top for separation from adjacent elements
  border-radius: 8px; // Softens the corners of the text block

  h5 {
    font-family: "LabGrostesque", sans-serif;
    font-weight: normal;
    margin-bottom: 10px;
    font-size: 1.5rem; // Larger font size for headings
    color: #333; // Darker color for better readability
    margin-top: 0.000rem; // Space between the heading and paragraph
  }

  p {
    font-family: "LabGrostesque", sans-serif;
    font-weight: 400;
    font-size: 1.1rem; // Slightly larger paragraph text
    color: #666; // Soft color for the paragraph text
    line-height: 1.6; // Improved line height for readability
  }
}

/* TOP LEFT lower */
.copy-left-lower {
  font-family: "LabGrostesque", sans-serif;
  font-weight: normal;
  display: block;
  padding: 1rem; // Consistent padding with the upper block
  margin-top: -2rem; // Margin top for spacing

  border-radius: 8px; // Consistent border radius

  h5 {
    font-family: "LabGrostesque", sans-serif;
    font-weight: normal;
    font-size: 1.5rem; // Consistent font size with the upper block
    color: #333; // Consistent color for readability
    margin-bottom: 0.5rem; // Space between the heading and paragraph
  }

  p {
    font-family: "LabGrostesque", sans-serif;
    font-weight: 400;
    font-size: 1.1rem; // Consistent paragraph text size
    color: #666; // Consistent text color
    line-height: 1.6; // Consistent line height
  }
}




/* BOTTOM TWO SECTIONS */
.image-copy-left {
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
  justify-content: center;
  margin-top: 80px;
  gap: 20px; // Adding gap for spacing between the flex items
}

.image-copy-image-container {
  order: 1;
  min-width: 250px;
  margin-right: 20px; // Adds space to the right of the image container
}

.copy-right-container {
  order: 2;
  display: block;
  padding-left: 3rem;
  padding-right: 3rem;
  margin-top: 10rem;
  margin-left: 20px; // Adds space to the left of the text container
}

/* Button Container Styles */
.copy-left-button-container {
  @media (max-width: 768px) {
    display: flex;
    justify-content: center;
  }
}

/* Button Styles */
.copy-left-button {
  width: 273px;
  height: 54px;
  background: #35BCBC;
  border-radius: 25px;
  text-align: center;
  justify-content: center;
  font-size: 1.3rem;
  color: #000000;
  padding-top: 12px;
  font-weight: 700;

}

/* Tour Image Styles */
.tour-image {
  width: 100%;
  max-width: 600px;
  @media (min-width: 1263px) {
    max-width: 800px;
  }
  @media (max-width: 983px) {
    max-width: 450px;
  }
  @media (max-width: 834px) {
    max-width: 700px;
  }
}




/* Accent Text Color */
.accent-text {
  color: #D4AF37;
}


</style>
