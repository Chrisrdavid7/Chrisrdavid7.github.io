<template>
  <div class="show-container">
    <div class="show-headline">
      <span>We connect artists to the biggest stages</span>
    </div>
    
    <div class="show-card-cont">
      <div class="artist-card-container">
          <div class="artist-card">
                <img class="artist-card-img" src="../assets/artistImg1.png" alt="Artist Card" />
                <img class="gigz-ac-1" src="../assets/gigzAc1.png"/>
                <img class="gigz-ac-logo1" src="../assets/emberColorLogo.png"/>
           </div>
         <div class="artist-description">Bass Physics got a placement at Ember Shores</div>
      </div>
 


      <div class="artist-card-container">
          <div class="artist-card">
                <img class="artist-card-img" src="../assets/artistImg2.png" alt="Artist Card" />
                <img class="gigz-ac-2" src="../assets/gigzAc2.png"/>
                <img class="gigz-ac-logo2" src="../assets/paradisebluecolor.png"/>
           </div>
         <div class="artist-description">Decadon performed at Paradise Blue</div>
      </div>

         

      <div class="artist-card-container">
          <div class="artist-card">
                <img class="artist-card-img" src="../assets/artistImg3.png" alt="Artist Card" />
                <img class="gigz-ac-3" src="../assets/gigzAc3.png"/>
                <img class="gigz-ac-logo3" src="../assets/summercamp.png"/>
           </div>
         <div class="artist-description">Rendr performed at SummerCamp Music Festival</div>
      </div>

    </div>
  </div>
</template>
<script>
import { ref } from 'vue'
export default {
  name: 'ConnectSection',
  components: {
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


.show-container {
  display: flex;
  flex-direction: column; 
  align-items: center; 
  justify-content: flex-start; 
  width: 100%;
  background: #000000; 
  margin-top: -10px; 
  padding-top: 20px; 
}


.show-headline {
  font-family: "LabGrostesque", sans-serif;
  font-weight: normal;
  color: #ffffff; 
  text-align: center;
  font-size: 4rem; 
  font-weight: 700; 
  width: 100%; 
  margin-top: 0px; 
  margin-bottom: 50px; 
}


.show-card-cont {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  background: #000000;
  max-width: 1276px;
  margin: 20px auto; 
  gap: 20px; 
}

.artist-card-container {
  width: 400px; 
  display: flex;
  flex-direction: column;
  align-items: center;
}

.artist-card {
  position: relative;
  width: 400px;
  height: 520px; 
  text-align: center;
  font-size: 1.2rem;
  font-weight: 700;
  overflow: hidden;
}

.artist-card-img {
  width: 100%;
  height: auto;
  object-fit: cover;
}

.artist-description {
  font-family: "LabGrostesque", sans-serif;
  font-weight: 650;
  color: #ffffff;
  font-size: 24px;
  text-align: left;
  background-color: rgba(0, 0, 0, 0.5);
  width: 100%; 
  padding: 10px;
  box-sizing: border-box;
}


.gigz-ac-1 {
  position: absolute;
  top: 65px; 
  right: 255px; 
  width: 123.43px; 
  height: 76.47px; 
  display: block; 
  z-index: 10; 
}
.gigz-ac-logo1 {
  position: absolute;
  top: 88%; 
  right: 30px; 
  width: 298.76px; 
  height: 65.06px; 
  display: block; 
  z-index: 10; 
  transform: translateY(-50%); 
}
.gigz-ac-2 {
  position: absolute;
  top: 65px; // Adjusted for alignment over the image
  right: 255px; // Adjusted for alignment over the image
  width: 123.43px; // Specified width
  height: 76.47px; // Specified height
  display: block; // Ensures the image is displayed
  z-index: 10; // Ensures it is above other content in the stacking context
}
.gigz-ac-logo2 {
  position: absolute;
  top: 88%; // Centers vertically in relation to the parent
  right: 12%; // Positions 15% from the right edge of the container
  width: 261.62px; // Specified width
  height: 112.7px; // Specified height
  display: block; // Ensures the image is displayed
  z-index: 10; // Ensures it is above other content in the stacking context
  transform: translate(-15%, -50%); // Adjusts for precise centering
}
.gigz-ac-3 {
  position: absolute;
  top: 45px; // Adjusted for alignment over the image
  right: 30px; // Adjusted for alignment over the image
  width: 123.43px; // Specified width
  height: 76.47px; // Specified height
  display: block; // Ensures the image is displayed
  z-index: 10; // Ensures it is above other content in the stacking context
}
.gigz-ac-logo3 {
  position: absolute;
  top: 80%; // Centers vertically in relation to the parent
  right: 12%; // Ensures some spacing from the right edge
  width: 279.06px; // Specified width
  height: 177.1px; // Specified height
  display: block; // Ensures the image is displayed
  z-index: 10; // Ensures it is above other content in the stacking context
  transform: translateY(-50%); // Shifts the logo up by half its own height
}

</style>
