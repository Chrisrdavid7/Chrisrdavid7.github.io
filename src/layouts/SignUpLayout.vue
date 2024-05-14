<template>
    <q-layout>
      <q-page-container>
  
   <SignUpLadning/>
  </q-page-container>
  </q-layout>
  </template>



<script setup>
import { ref } from 'vue'
import SignUpLadning from 'components/SignUpLanding.vue'


const leftDrawerOpen = ref(false)

function toggleLeftDrawer() {
  leftDrawerOpen.value = !leftDrawerOpen.value
}
</script>

  <style lang="scss">
  
  </style>
  