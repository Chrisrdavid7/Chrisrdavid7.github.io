<template>
  <q-layout>
    <q-page-container>
      
       <artists-page-header-export/>
        <artists-page-banner/>
        <artists-plan-section/>
        <your-stage-section/>
        <gigz-footer/>
    </q-page-container>
  </q-layout>
</template>

  
  
<script setup>
import { ref } from 'vue'
import ArtistsPageHeaderExport from 'components/ArtistsPageHeader.vue'
import ArtistsPageBanner from 'components/ArtistsPageBanner.vue'
import ArtistsPlanSection from 'components/ArtistsPlan.vue'
import YourStageSection from 'components/YourStageSection.vue'
import GigzFooter from 'components/GigzFooter'

const leftDrawerOpen = ref(false)

function toggleLeftDrawer() {
  leftDrawerOpen.value = !leftDrawerOpen.value
}
</script>

  <style lang="scss">
  
  </style>
  