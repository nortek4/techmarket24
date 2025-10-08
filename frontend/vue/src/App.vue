<script setup>
import { RouterLink, RouterView } from 'vue-router';
import HeaderView from './views/HeaderView.vue';
// Import Bootstrap CSS
import 'bootstrap/dist/css/bootstrap.min.css'
// Import Bootstrap JS (opcjonalnie, jeśli potrzebujesz komponentów JS)
import 'bootstrap/dist/js/bootstrap.bundle.min.js'
import './assets/css/main.css'
</script>

<template>
  <HeaderView />
  <RouterView />
</template>

<style scoped></style>
