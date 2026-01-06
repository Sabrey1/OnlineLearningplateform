<template>
  <div class="fix-container">

    <!-- HEADER -->
    <div class="text-center mt-6">
      <p class="text-blue-400 text-2xl font-medium m-0">
        {{ t("Categories") }}
      </p>

      <h1 class="text-3xl md:text-4xl font-bold   m-0">
        Explore by <span class="text-blue-500">Category</span>
      </h1>

      <p class="text-500 mt-2 line-height-3">
        Discover courses across diverse topics and find the perfect path for your
        <br class="hidden md:block" />
        learning journey
      </p>
    </div>

    <!-- GRID -->
    <div class="grid mt-6">
      <div
        v-for="category in categories"
        :key="category.id"
        class="col-12 sm:col-6 lg:col-3"
      >
        <Card
          class="h-full border-round-xl cursor-pointer
                 transition-all transition-duration-300
                 hover:shadow-4"
          @click="goToCategory(category.slug)"
        >
          <!-- ICON -->
          <template #title>
            <div
              class="flex align-items-center justify-content-center
                     border-round-xl text-white text-2xl"
              style="width: 3.5rem; height: 3.5rem"
              :class="category.color"
            >
              <i class="pi" :class="category.icon"></i>
            </div>
          </template>

          <!-- CONTENT -->
          <template #content>
            <h3 class="text-lg font-semibold mt-2 mb-2">
              {{ category.name }}
            </h3>

            <p class="text-500 text-sm line-height-3 m-0">
              {{ category.description }}
            </p>
          </template>
        </Card>
      </div>
    </div>

  </div>
</template>

<script setup>
import Card from 'primevue/card'
import { useRouter } from 'vue-router'
import { useCategory } from '@/Hook/category.js'

const { categories } = useCategory()
const router = useRouter()
const t = window.t

const goToCategory = (slug) => {
  router.push(`/categories/${slug}`)
}
</script>
