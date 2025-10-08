<script setup>
import { RouterLink, RouterView } from 'vue-router';
import { onMounted } from 'vue';
import { initCardClickEvents } from '../assets/js/main.js';
onMounted(() => {
    initCardClickEvents();
})
</script>

<template>
    <section id="main-banner" class="col-md-12">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="col d-flex flex-row align-items-center justify-content-between" style="max-height: 600px;">
                        <picture>
                            <img src="../assets/img/banner.jpg" alt="glorp">
                        </picture>
                        <div class="description position-absolute">
                            <h1>1</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col d-flex flex-row align-items-center justify-content-between" style="max-height: 600px;">
                        <picture>
                            <img src="../assets/img/banner.jpg" alt="glorp">
                        </picture>
                        <div class="description position-absolute">
                            <h1>2</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col d-flex flex-row align-items-center justify-content-between" style="max-height: 600px;">
                        <picture>
                            <img src="../assets/img/banner.jpg" alt="glorp">
                        </picture>
                        <div class="description position-absolute">
                            <h1>3</h1>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>
    <section id="cards" class="container d-flex align-items-center justify-content-center">
        <div class="card col d-flex flex-row align-items-center justify-content-between">
            <picture>
                <img src="../assets/img/glorp.png" alt="glorp">
            </picture>
            <div class="description">
                <h5>GLORP</h5>
            </div>
        </div>
        <div class="card col d-flex flex-row align-items-center justify-content-between">
            <picture>
                <img src="../assets/img/glorp.png" alt="glorp">
            </picture>
            <div class="description">
                <h5>GLORP</h5>
            </div>
        </div>
        <div class="card col d-flex flex-row align-items-center justify-content-between">
            <picture>
                <img src="../assets/img/glorp.png" alt="glorp">
            </picture>
            <div class="description">
                <h5>GLORP</h5>
            </div>
        </div>
    </section>
    <section id="banner1" class="col-md-12 d-flex">
        <div class="d-flex align-items-center justify-content-center">
            <picture>
                <img src="../assets/img/banner.jpg" alt="banner">
            </picture>
            <h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim, error!</h2>
        </div>
    </section>
    <section id="cards" class="container d-flex align-items-center justify-content-center">
        <div class="card col d-flex flex-row align-items-center justify-content-between">
            <picture>
                <img src="../assets/img/glorp.png" alt="glorp">
            </picture>
            <div class="description">
                <h5>GLORP</h5>
            </div>
        </div>
        <div class="card col d-flex flex-row align-items-center justify-content-between">
            <picture>
                <img src="../assets/img/glorp.png" alt="glorp">
            </picture>
            <div class="description">
                <h5>GLORP</h5>
            </div>
        </div>
        <div class="card col d-flex flex-row align-items-center justify-content-between">
            <picture>
                <img src="../assets/img/glorp.png" alt="glorp">
            </picture>
            <div class="description">
                <h5>GLORP</h5>
            </div>
        </div>
    </section>
</template>

<style scoped>
section{
    margin-top: 100px;
}
section:first-of-type{
    margin-top: 0;
}
.carousel-item .description{
    bottom: 40%;
    left: 49%;
}
.carousel-item img{
    min-width: 100%;
    object-fit: cover;
    border-radius: 10px;
}
#main-banner{
    height: 600px;
    max-height: 600px;
    color: white;
}
#cards img {
    max-width: 150px;
}
#cards picture{
    width: fit-content;
    height: fit-content;
    margin-top: -50px;
}
#cards .card{
    padding: 10px;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid #d5d5d5;
}
#cards .card:hover{
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
#cards{
    gap: 20px;
}
#banner1 picture img, #banner1 picture{
    object-fit: cover;
    object-position: center center;
    width: 100%;
    height: 600px;
}
#banner1>div{
    width: 100%;
}
#banner1{
    position: relative;
    height: 600px;
    max-height: 600px;
    overflow: hidden;
}
#banner1 h2{
    position: absolute;
    color: white;
    font-size: 2rem;
    width: 50%;
    text-align: center;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
}
</style>