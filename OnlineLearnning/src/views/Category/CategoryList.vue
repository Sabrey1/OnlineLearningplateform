<template>
<div>
    <div class=" pb-8 bg-red-500">
        <Header/>
    </div>
    <div class="fix-container pt-5">
        <div class="text-center">
            <h1>Categories</h1>
            <p>Discover courses across diverse topics and find the perfect path for your <br> learning journey</p>
        </div>
        <div class="flex justify-content-center">
            <IconField class="w-full max-w-md" style="border: 1px solid #ccc; border-radius: 8px; padding: 0.25rem;">
                <InputIcon class="pi pi-search" />
                <InputText 
                    v-model="value1" 
                    placeholder="Search for a course" 
                    class="w-full" 
                    style="border: none; outline: none;"
                />
            </IconField>
        </div>
        <div>
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
    </div>
</div>
</template>

<script setup>
import Card from 'primevue/card'
import IconField from 'primevue/iconfield';
import InputIcon from 'primevue/inputicon';
import InputText from 'primevue/inputtext';
import { useCategory } from '@/Hook/category.js'

const { categories } = useCategory()
</script>