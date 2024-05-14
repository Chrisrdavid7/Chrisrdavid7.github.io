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
  font-weight: bold; 
  font-style: normal;
}

@font-face {
  font-family: 'Lab Grotesque';
  src: url('/media/fonts/LabGrotesque/LabGrotesqueMedium.woff') format('woff');
  font-weight: 500; 
  font-style: normal;
}
body, html {
  overflow-x: hidden;  // Prevents horizontal scrolling
  width: 100%;         // Ensures the width doesn't exceed the viewport
}

.hero-container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  background: #000000;
  width: 100%; 
  position: relative; 
}

.hero-img-wrapper {
  position: relative; 
  width: 100%; 
  max-width: 1200px; 
  margin: auto; 
}

.hero-img {
  width: 100%; 
  max-width: 1200px; 
  height: auto; 
}


.hero-text-top-right {
  position: absolute;
  right: 450px; 
  bottom: 300px; 
  color: #c0961a; 
  padding: 5px 10px; 
  border-radius: 5px; 
  font-size: 1.5rem; 
  font-weight: 500; 
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
