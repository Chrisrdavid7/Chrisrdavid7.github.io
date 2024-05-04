<template>
  <div class="hero-container">
    <div class="hero-img-wrapper">
      <img class="hero-img" src="../assets/bannerImg.png" alt="Hero Banner" />
      <span class="hero-text-top-right">Nektunez</span>
      <span class="hero-text-bottom-right">From Ghana to Coachella</span>
    </div>
    <div class="hero-headline">
      <span>PERFORM AT OVER </span><span class="accent-text">40 FESTIVALS</span>
    </div>
    <FestivalCards />
    <div class="hero-headline2">
      <span class="accent-text">1000 </span><span>CLUB AND THEATER SHOWS</span>
    </div>
    <div class="hero-transition">
      <img src="../assets/transition1.png"/>
    </div>
  </div>
</template>

<script>
import { ref } from 'vue'
import FestivalCards from './FestivalCards'
export default {
  name: 'HeroBanner',
  components: {
    FestivalCards
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
  src: url('/media/fonts/LabGrotesque/LabGrotesqueMedium.woff') format('woff');
  font-weight: 500; // Medium weight is often 500
  font-style: normal;
}


.hero-container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  background: #000000;
  width: 100%; // Ensures the container takes full width of the viewport
  position: relative; // Allows absolute positioning of children
}

.hero-img-wrapper {
  position: relative; // Necessary for positioning the text absolutely
  width: 100%; // Ensures responsiveness
  max-width: 1200px; // Limits the maximum width to maintain aesthetics
  margin: auto; // Centers the wrapper if it's smaller than the container
}

.hero-img {
  width: 100%; // Ensures the image is responsive
  max-width: 1200px; // Controls maximum width
  height: auto; // Maintains aspect ratio
}


.hero-text-top-right {
  position: absolute;
  right: 460px; // Space from the right edge
  bottom: 300px; // Space from the bottom edge
  color: #c0961a; // White color for the text
  padding: 5px 10px; // Padding around the text
  border-radius: 5px; // Optional: rounded corners
  font-size: 1.5rem; // Font size
  font-weight: 500; // Font weight
}

.hero-text-bottom-right {
  position: absolute;
  right: 281px; 
  bottom: 250px; 
  color: #ffffff; 
  padding: 5px 10px; 
  border-radius: 5px; 
  font-size: 1.5rem; 
  font-weight: 500; 
}


.hero-transition {
  margin-top: 50px;
  background: #ffffff;
  width: 100%;
}

.hero-headline {
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

.hero-headline2 {
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
