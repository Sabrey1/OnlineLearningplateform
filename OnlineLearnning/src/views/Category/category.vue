<template>
    <div class="fix-container">
        <div class="text-center mt-8">
            <p class="m-0 text-blue-400 text-xl">Categories</p>
            <h1 class="m-0">Explore by <span class="text-blue-500">Category</span> </h1>
            <p class="m-0">Discover courses across diverse topics and find the perfect path for your<br> learning journey</p>
        </div>
        <div class="grid mt-6 gap-4">
            <div class="col">
                    <Card>
                        <template #title>
                            <i class="pi pi-code mr-2 bg-blue-500 p-3 text-white border-round"></i>
                        </template>
                        <template #content>
                            <p class="m-0">
                            Development
                            </p>
                            <p class="m-0">320 Courses</p>
                        </template>
                    </Card>
            </div>
            <div class="col">
                <Card>
                <template #title>
                    <i class="pi pi-palette mr-2 bg-yellow-500 p-3 text-white border-round"></i>
                </template>
                <template #content>
                    <p class="m-0">
                        Design
                    </p>
                    <p class="m-0">180 Courses</p>
                </template>
            </Card>
            </div>
            
            <div class="col">
                <Card>
                <template #title>
                    <i class="pi pi-chart-line mr-2 bg-green-500 p-3 text-white border-round"></i>
                </template>
                <template #content>
                    <p class="m-0">
                        Bussiness
                    </p>
                    <p class="m-0">90 Courses</p>
                </template>
            </Card>
            </div>
            
            <div class="col">
                <Card>
                    <template #title>
                        <i class="pi pi-camera mr-2 bg-pink-500 p-3 text-white border-round "></i>    
                    </template>
                    <template #content>
                        <p class="m-0">
                            Photography
                        </p>
                        <p class="m-0">70 Courses</p>
                    </template>
                </Card>
            </div>
            
        </div>
         
        
    </div>
</template>

<script setup>
import Card from 'primevue/card';
</script>