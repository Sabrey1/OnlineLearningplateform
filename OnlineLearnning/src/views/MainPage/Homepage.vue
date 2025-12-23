<template>
    <Headers/>
     <Panel/>
     <category/>
     <scrollToTop/>
     <course/>
     <WhyChooseUs/>
     <Testimonials/>
     <TransformYourFuture/>
    <Footers/>
</template>
<script setup>
import Headers from '@/views/Layout/Header.vue'
import Panel from '@/views/MainPage/Panel.vue'
import Footers from '@/views/Layout/Footer.vue'
import category from '@/views/Category/category.vue'
import course from "@/views/Course/course.vue"
import WhyChooseUs from '@/views/MainPage/WhyChoose/WhyChooseUs.vue'
import Testimonials from '@/views/MainPage/Testimonials/Testimonials.vue'
import TransformYourFuture from '@/views/MainPage/TransformYourFuture/TransformYourFuture.vue'
import scrollToTop from '@/views/Layout/scrollToTop.vue'
</script>