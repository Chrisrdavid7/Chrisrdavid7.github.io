<template>
  <div class="cards-container">
    <div class="festival-card">
      <img class="card-img" src="../assets/texasEclipse.png" alt="Festival Card" />
    </div>
    <div class="festival-card">
      <img class="card-img" src="../assets/emberShores.png" alt="Festival Card" />
    </div>
    <div class="festival-card">
      <img class="card-img" src="../assets/rollingLoud.png" alt="Festival Card" />
    </div>
    <div class="festival-card">
      <img class="card-img" src="../assets/paradiseBlue.png" alt="Festival Card" />
    </div>
    <div class="festival-card">
      <img class="card-img" src="../assets/ubbiDubbi.png" alt="Festival Card" />
    </div>
    <div class="festival-card">
      <img class="card-img" src="../assets/freaky.png" alt="Festival Card" />
    </div>
    <div class="festival-card">
      <img class="card-img" src="../assets/sowhatmusic.png" alt="Festival Card" />
    </div>
    <div class="festival-card">
      <img class="card-img" src="../assets/lightsnights.png" alt="Festival Card" />
    </div>
  </div>
</template>
<script>
import { ref } from 'vue'
export default {
  name: 'FestivalCards',

}
</script>
<style lang="scss">



.cards-container {
  background: #000000;
  margin: 50px auto;
  text-align: center;
  display: flex;
  flex-wrap: nowrap;  // Prevents wrapping of items
  justify-content: flex-start; // Aligns items to the start of the container
  overflow-x: auto;  // Enables horizontal scrolling
  max-width: 100%;  // Ensures the container does not exceed the width of its parent
  padding: 10px 0;  // Adds vertical padding for visual spacing
  -webkit-overflow-scrolling: touch; // Improves scrolling on touch devices
  scrollbar-width: thin; // Makes scrollbar less obtrusive (Firefox)
  scrollbar-color: #888 #000; // Customizes scrollbar colors (Firefox)

  @media (max-width: 768px) {
    justify-content: center; // Centers items if they fit within the viewport
  }
}

.festival-card {
  flex: 0 0 auto; // Ensures that cards do not grow or shrink
  width: 90px; // Fixed width for each card
  margin: 0 35px; // Horizontal margin between cards
}

.card-img {
  height: 90px; // Fixed height for uniformity
  width: 100%;  // Full width of the parent container
  object-fit: contain; // Ensures the entire image is visible without cropping
}

/* Style for the scrollbar on WebKit browsers */
.cards-container::-webkit-scrollbar {
  height: 6px; // Height of the horizontal scrollbar
}

.cards-container::-webkit-scrollbar-thumb {
  background-color: #888; // Color of the scrollbar thumb
  border-radius: 3px; // Rounded corners for the scrollbar thumb
}

</style>