<template>
  <Button
    v-show="isVisible"
    @click="scrollToTop"
    class="scroll-top-btn"
    icon="pi pi-chevron-up"
  >
  </Button>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

const isVisible = ref(false)

const toggleVisibility = () => {
  isVisible.value = window.scrollY > 200
}
const scrollToTop = () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  })
}
onMounted(() => {
  window.addEventListener('scroll', toggleVisibility)
})
onUnmounted(() => {
  window.removeEventListener('scroll', toggleVisibility)
})
</script>

<style scoped>
.scroll-top-btn {
  position: fixed;
  bottom: 20px;
  right: 20px;
  width: 45px;
  height: 45px;
  border-radius: 50%;
  background: #2563eb; /* blue */
  color: white;
  font-size: 20px;
  border: none;
  cursor: pointer;
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}
.scroll-top-btn:hover {
  background: #1e40af;
}
</style>
