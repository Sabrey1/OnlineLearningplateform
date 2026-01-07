<template>
<div>
    <div class=" pb-8 ">
        <Header/>
    </div>
    <div class="fix-container pt-5">
        <div class="text-center">
            <h1>Explore Our Courses</h1>
            <p>Discover world-class courses taught by industry experts.<br> Start your learning journey today.</p>
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

        <div class="mt-7 mb-7 flex justify-content-between">
            <div class="">
                filter 
            </div>
            <div class="">
                filter 
            </div>
        </div>

        <div class="grid">
          <div class="col-3" v-for="course in courses" :key="course.id">
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
                        <Button @click="gotoDetail(course.id)" label="Enroll Now"></Button>
                    </div>
                </template>
            </Card>  
          </div>         
        </div>  
    </div>
    <div class="mt-5">
        <Footer/>
    </div>
    
</div>
</template>

<script setup>
import { ref } from 'vue';
import IconField from 'primevue/iconfield';
import InputIcon from 'primevue/inputicon';
import InputText from 'primevue/inputtext';
import Card from 'primevue/card';
import {useCourse} from '@/Hook/useCourse.js'
import { useRouter } from 'vue-router'
const {courses} = useCourse()

const router = useRouter()


function gotoDetail(courseId){
    router.push({ name: 'ComCourseDetail', params: { id: courseId } })
}

</script>