<script setup>
import { onMounted } from 'vue';
import { headerOnScroll } from '../assets/js/main.js';
onMounted(() => {
    window.addEventListener('scroll', headerOnScroll);
})
</script>
<template>
  <header id="header" class="align-items-center justify-content-between container">
        <RouterLink to="/"><img src="../assets/img/logo.png" alt="Logo"></RouterLink>
        <nav>
            <ul class="nav">
                <li class="nav-item"><RouterLink to="/about" class="nav-link">About</RouterLink></li>
                <li class="nav-item"><RouterLink to="/products" class="nav-link">Products</RouterLink></li>
            </ul>
        </nav>
        <ul class="nav">
            <li><RouterLink to="/contact" class="nav-link">Contact</RouterLink></li>
        </ul>
  </header>
  <header id="header-fixed" class="align-items-center justify-content-between position-fixed col-md-10">
    <RouterLink to="/"><img src="../assets/img/logo.png" alt="Logo"></RouterLink>
        <nav>
            <ul class="nav">
                <li class="nav-item"><RouterLink to="/about" class="nav-link">About</RouterLink></li>
                <li class="nav-item"><RouterLink to="/products" class="nav-link">Products</RouterLink></li>
            </ul>
        </nav>
        <ul class="nav">
            <li><RouterLink to="/contact" class="nav-link">Contact</RouterLink></li>
        </ul>
  </header>
</template>

<style scoped>
header {
    padding: 15px 0;
    display: flex;
}
#header-fixed{
    z-index: 1000;
    background: #fff;
    position-area: y-start;
    padding: 20px;
    border-radius: 20px;
    top: 20px;
    box-shadow: 0 5px 5px rgba(0,0,0,0.1);
    border: 1px solid #d5d5d5;
    display: none;
}
</style>