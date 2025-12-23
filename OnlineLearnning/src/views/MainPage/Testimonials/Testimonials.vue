<template>
    <div class="fix-container">
        <div class="text-center">
            <p>Testimonials</p>
            <h1 class="m-0">Loved by Learners</h1>
            <p>Join thousands of satisfied learners who have transformed their careers with us</p>
        </div>
        <div class="flex gap-4">
            <Card>
                <template #content>
                     <div class="card flex justify-center">
                        <Rating v-model="value" />
                    </div>
                    <p>"LearnFlow completely transformed my career. The courses are incredibly well-structured, and the instructors are top-notch. I went from a beginner to landing my dream job in just 6 months!"</p>
                    <hr>
                    <div class="flex align-items-center">
                        <Avatar image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9SRRmhH4X5N2e4QalcoxVbzYsD44C-sQv-w&s" class="mr-2" size="xlarge" shape="circle" />
                        <div>
                            <p class="font-bold m-0">John Doe</p>
                            <p class="m-0">Software Engineer</p>
                        </div>
                    </div>
                    
                </template>
            </Card>
            <Card>
                <template #content>
                     <div class="card flex justify-center">
                        <Rating v-model="value" />
                    </div>
                    <p>"LearnFlow completely transformed my career. The courses are incredibly well-structured, and the instructors are top-notch. I went from a beginner to landing my dream job in just 6 months!"</p>
                    <hr>
                    <div class="flex align-items-center">
                        <Avatar image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9SRRmhH4X5N2e4QalcoxVbzYsD44C-sQv-w&s" class="mr-2" size="xlarge" shape="circle" />
                        <div>
                            <p class="font-bold m-0">John Doe</p>
                            <p class="m-0">Software Engineer</p>
                        </div>
                    </div>
                    
                </template>
            </Card>
            <Card>
                <template #content>
                     <div class="card flex justify-center">
                        <Rating v-model="value" />
                    </div>
                    <p>"LearnFlow completely transformed my career. The courses are incredibly well-structured, and the instructors are top-notch. I went from a beginner to landing my dream job in just 6 months!"</p>
                    <hr>
                    <div class="flex align-items-center">
                        <Avatar image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9SRRmhH4X5N2e4QalcoxVbzYsD44C-sQv-w&s" class="mr-2" size="xlarge" shape="circle" />
                        <div>
                            <p class="font-bold m-0">John Doe</p>
                            <p class="m-0">Software Engineer</p>
                        </div>
                    </div>
                    
                </template>
            </Card>
        </div>
    </div>
</template>
<script setup>
import Card from 'primevue/card';
import Avatar from 'primevue/avatar';
import Rating from 'primevue/rating';
import { ref } from 'vue';

const value = ref(null);
</script>