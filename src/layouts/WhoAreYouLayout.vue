<template>
    <q-layout>
      <q-page-container>
  
  <who-are-you-landing />
  </q-page-container>
  </q-layout>
  </template>



<script setup>
import { ref } from 'vue'
import WhoAreYouLanding from 'components/WhoAreYouLanding.vue'


const leftDrawerOpen = ref(false)

function toggleLeftDrawer() {
  leftDrawerOpen.value = !leftDrawerOpen.value
}
</script>

  <style lang="scss">
  
  </style>
  