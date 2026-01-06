<template>
<div>
    <div class=" pb-8 bg-red-500">
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

        <div class="mt-7">
            <div>
                filter 
            </div>
        </div>

        {{ courses }}
    </div>
</div>
</template>

<script setup>
import { ref } from 'vue';
import IconField from 'primevue/iconfield';
import InputIcon from 'primevue/inputicon';
import InputText from 'primevue/inputtext';

import {useCourse} from '@/Hook/useCourse.js'
const {courses} = useCourse()

</script>