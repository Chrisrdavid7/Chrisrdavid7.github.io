<template>
  <q-layout>
    <q-page-container>
    <gigz-header />
    <hero-banner />
    <artist-section />
    <plan-section />
    <connect-section />
    <gigz-footer />

  
</q-page-container>
</q-layout>
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

</style>
