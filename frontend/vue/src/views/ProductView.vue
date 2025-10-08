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
    <li v-for="product in products" :key="product.id">{{ product.name }} {{ product.price }}</li>
  </ul>
</template>