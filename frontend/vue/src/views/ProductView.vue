<script setup>
import { ref, onMounted } from 'vue';
import http from '../api/http';
const products = ref([]);

onMounted(async () => {
  try {
    const { data } = await http.get('/products');
    // Obsłuż: [paginate], paginate, albo plain array
    const payload = Array.isArray(data) ? data[0] : data;
    products.value = Array.isArray(payload) ? payload : (payload?.data ?? payload ?? []);
  } catch (e) {
    console.error('Products fetch failed', e);
    products.value = [];
  }
});
</script>
<template>
  <ul>
    <li v-for="product in products" :key="product.id" class="d-flex flex-column align-items-center">
      <img :src="product.image_url" alt="" />
      <div class="product_desc d-flex flex-column align-items-center">
        <span>Nazwa: {{ product.name }}</span>
        <span>Opis: {{ product.description }}</span>
        <span>Cena: {{ product.price }}</span>
      </div>
    </li>
  </ul>
</template>

<style scoped>
  ul{
    list-style: none;
    padding: 0;
  }
  .product_desc{
    gap: 15px;
  }
</style>