<template>
  <div class="app-container">
    <gigz-header/>
    <hero-banner/>
    <artist-section/>
    <plan-section/>
    <connect-section/>
    <gigz-footer/>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import EssentialLink from 'components/EssentialLink.vue'
import GigzHeader from 'components/GigzHeader.vue'
import HeroBanner from 'components/HeroBanner.vue'
import ArtistSection from 'components/ArtistSection'
import PlanSection from 'components/PlanSection'
import ConnectSection from 'components/ConnectSection'
import GigzFooter from 'components/GigzFooter'
defineOptions({
  name: 'MainLayout'
})


const leftDrawerOpen = ref(false)

function toggleLeftDrawer () {
  leftDrawerOpen.value = !leftDrawerOpen.value
}
</script>
<style lang="scss">
.app-container {
  font-family: 'Rubik', sans-serif;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
  width: 100%;
  background: #f5f5f5;
  overflow-x: hidden;
  overflow-y: auto;
  position: relative;
  z-index: 0;
}
</style>
