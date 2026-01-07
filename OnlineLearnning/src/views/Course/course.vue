<template>
    <div class="fix-container">
        <div class="mt-8 ">
            <p class="mb-0 text-blue-400 text-2xl">Featured Courses</p>
            <h1 class="mt-0">Learn from the <span class="text-blue-500">Best</span></h1>
        </div>
        <div class="grid">
            <!-- <div class="col-4">
                <Card style="  overflow: hidden">
                <template #header>
                <img alt="user header"  src="https://primefaces.org/cdn/primevue/images/usercard.png" />
                </template>
                <template #title>Complete Web Development Bootcamp</template>
                <template #subtitle>by Sarah Johnson</template>
                <template #content>
                    <div class="grid">
                        <div class="col-2">
                            <div class="flex align-item-center gap-2">
                                <i class="pi pi-star-fill text-yellow-400 mt-1"></i>
                                <p class="m-0">4.9</p>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="flex align-item-center gap-2">
                                <i class="pi pi-users text-yellow-400 mt-1"></i>
                                <p class="m-0">12.4k</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="flex align-item-center gap-2 ml-4">
                                <i class="pi pi-clock text-yellow-400 mt-1"></i>
                                <p class="m-0">42 hours</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="flex align-item-center justify-content-between">
                        <p class="text-2xl m-0 font-bold">$89.99 <span class="text-lg"><s>$199.99</s></span></p>
                        <Button label="Enroll Now"></Button>
                    </div>
                </template>
                </Card>  
            </div> -->
          <div class="col-4" v-for="course in courses" :key="course.id">
            <Card>
                <template #header>
                    <div class="overflow-hidden" >
                        <img
                        :src="course.thumbnail || 'https://primefaces.org/cdn/primevue/images/usercard.png'"
                        alt="course thumbnail"
                        class="w-full h-full object-cover"
                        />
                    </div>
                </template>
                <template #content>
                    <h3 class="text-lg font-semibold mt-2 mb-2">
                        {{ course.title }}
                    </h3>
                    <p>By: {{ course.teacher_id }}</p>
                    
                    <div class="grid">
                        <div class="col-2">
                            <div class="flex align-item-center gap-2">
                                <i class="pi pi-star-fill text-yellow-400 mt-1"></i>
                                <p class="m-0">4.9</p>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="flex align-item-center gap-2">
                                <i class="pi pi-users text-yellow-400 mt-1"></i>
                                <p class="m-0">12.4k</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="flex align-item-center gap-2 ml-4">
                                <i class="pi pi-clock text-yellow-400 mt-1"></i>
                                <p class="m-0">42 hours</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="flex align-item-center justify-content-between">
                        <p class="text-2xl m-0 font-bold">${{ course.price }} <span class="text-lg"><s>$199.99</s></span></p>

                        <Button @click="gotoDetail(course.id)" label="Enroll Now" />

                    </div>
                </template>
            </Card>  
          </div>         
        </div>   
    </div>
</template>
<script setup>
import Card from 'primevue/card';
import Button from 'primevue/button';
import { useRouter } from 'vue-router'
import {useCourse} from '@/Hook/useCourse.js'
const router = useRouter()
const {
    courses
} = useCourse()

function gotoDetail(courseId){
    router.push({ name: 'ComCourseDetail', params: { id: courseId } })
}

</script>