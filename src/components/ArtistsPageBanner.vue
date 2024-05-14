<template>
  <div class="container">
    <div class="img-wrapper">
      <img class="img" src="../assets/SpotlightPicture.png" alt="Spotlight Banner" />
      <span class="spotlight-text-top">DEAR ARTIST,</span>
      <span class="spotlight-text-bottom">Our platform is designed with the visionary artist in mind, offering not just a stage, but a launching pad for your music to reach unprecedented heights.</span>
    </div>
    <div class="headline1">
      <span>PERFORM AT OVER </span><span class="accent-text">40 FESTIVALS</span>
    </div>
    <FestivalCards />
    <div class="headline2">
      <span class="accent-text">1000 </span><span>CLUB AND THEATER SHOWS</span>
    </div>
   
  </div>
</template>

<script>
import { ref } from 'vue'
import FestivalCards from './FestivalCards'
export default {
  name: 'ArtistsHeroBanner',
  components: {
    FestivalCards
  }
}
</script>

<style lang="scss">
@font-face {
  font-family: 'Lab Grotesque';
  src: url('/media/fonts/LabGrotesque/LabGrotesqueBold.woff') format('woff');
  font-weight: bold; 
  font-style: normal;
}

@font-face {
  font-family: 'Lab Grotesque';
  src: url('/media/fonts/LabGrotesque/LabGrotesqueBlack.woff') format('woff');
  font-weight: 900; 
  font-style: normal;
}

.container {
  margin-top: -80px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  background: #000000;
  width: 100%; 
  position: relative; 
  
}

.img-wrapper {
  position: relative; 
  width: 100%; // Ensures responsiveness
  max-width: 2000px; 
  margin: auto; // Centers the wrapper if it's smaller than the container
  display: flex; // Use flexbox to center the content
  align-items: center; // Vertically center
  justify-content: center; // Horizontally center
}

.img {
  width: 100%; // Ensures the image is responsive
  max-width: 2000px; // Controls maximum width
  height: auto; // Maintains aspect ratio
}


.spotlight-text-top {
  font-family: 'Lab Grotesque', sans-serif;
  top: 50%; // Position at the center
  transform: translateY(-100%); // Shift upwards by its own height to avoid overlapping with the bottom text
  position: absolute; // Absolute positioning relative to the nearest positioned ancestor (img-wrapper)
  color: #D4AF37; // Adjusted for visibility
  font-size: 1.5rem; // Font size
  font-weight: 350; // Font weight
  padding: 5px 10px; // Padding around the text
  text-align: center; // Center the text inside
  width: 100%; // Take the full width to center text
}

.spotlight-text-bottom {
  font-family: 'Lab Grotesque', sans-serif;
  top: 50%; // Position right at the center
  position: absolute; // Absolute positioning relative to the nearest positioned ancestor (img-wrapper)
  color: #ffffff; // Adjusted for visibility
  font-size: 1.5rem; // Font size
  line-height: 300%;
  font-weight: 800; // Font weight
  box-sizing: border-box; // Ensures padding and border are included in the width
  padding: 5px 10px; // Padding around the text
  text-align: center; // Center the text inside
  width: 44%; 
}

.accent-text{
  color: #D4AF37;
}
.headline1 {
  font-family: 'Lab Grotesque', sans-serif;
  font-size: 16px;
  font-weight: 700;
  line-height: 10px;
  letter-spacing: 0.5em;
  text-align: center;
  color: #ffffff;
  margin-top: 50px;
  margin-bottom: -15px;
  padding: 0 0px;
}

.headline2 {
  font-family: 'Lab Grotesque', sans-serif;
  font-size: 16px;
  font-weight: 500;

  line-height: 10px;
  letter-spacing: 1em;
  text-align: center;
  color: #ffffff;
  margin-top: -15px;
  margin-bottom: -15px;
  padding: 0 0px;
}
</style>
