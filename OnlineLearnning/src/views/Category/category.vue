<template>
    <div class="fix-container">
        {{ categories }}
        <div class="text-center mt-8">
            <p class="m-0 text-blue-400 text-xl">{{t("Categories")}}</p>
            <h1 class="m-0">Explore by <span class="text-blue-500">Category</span> </h1>
            <p class="m-0">Discover courses across diverse topics and find the perfect path for your<br> learning journey</p>
        </div>
        <div class="grid mt-6 gap-4">
  <div
    class="col"
    v-for="category in categories"
    :key="category.id"
  >
    <Card>
      <template #title>
        <i
          class="pi mr-2 p-3 text-white border-round"
          :class="[category.icon, category.color]"
        ></i>
      </template>

      <template #content>
        <p class="m-0 font-medium">
          {{ category.name }}
        </p>
        <p class="m-0">
          {{ category.courses }} Courses
        </p>
      </template>
    </Card>
  </div>
</div>

         
        
    </div>
</template>

<script setup>
import Card from 'primevue/card';
import{ useCategory } from '@/Hook/category.js'
const { categories } = useCategory()

const t = window.t
</script>

<style scoped>


</style>