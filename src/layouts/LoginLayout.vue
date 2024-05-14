<template>
    <q-layout>
      <q-page-container>
  
   <LoginLanding/>
  </q-page-container>
  </q-layout>
  </template>



<script setup>
import { ref } from 'vue'
import LoginLanding from 'components/LoginLanding.vue'


const leftDrawerOpen = ref(false)

function toggleLeftDrawer() {
  leftDrawerOpen.value = !leftDrawerOpen.value
}
</script>

  <style lang="scss">
  
  </style>
  