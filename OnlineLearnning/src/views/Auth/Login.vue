<template>
    <div class="fix-container">
        <div class="grid">
        <div class="col flex align-items-center h-screen">
            <div>
                <div class="flex align-items-center ">
                    <i class="fa fa-graduation-cap text-2xl " aria-hidden="true"></i>
                    <h1 class="m-0 p-0  ">
                        Online <span class="text-blue-400">Learning</span>
                    </h1>
                </div>
                <div>
                    <h1 class="m-0">Unlock Your <br>Learning Potential</h1>
                    <p>Join thousands of learners worldwide and access <br> expert-led courses to advance your skills and <br> career.</p>
                </div>
                <div>
                    <div class="mb-3 flex align-items-center gap-2">
                        <div>
                            <p class="m-0 border-circle  w-3rem h-3rem bg-blue-400 text-white flex align-items-center justify-content-center">1K+</p>
                        </div>
                        <div>
                             <p class="m-0 font-bold">Expert Instructors</p>
                            <p class="m-0">Learn from industry leaders</p>
                        </div>
                    </div>
                    <div class="mb-3 flex align-items-center gap-2">
                        <div>
                            <p class="m-0 border-circle  w-3rem h-3rem bg-blue-400 text-white flex align-items-center justify-content-center">50K+</p>
                        </div>
                        <div>                         
                            <p class="m-0 font-bold">Active Learners</p>
                            <p class="m-0">Join our growing community</p>
                        </div>
                    </div>
                    <div class="mb-3 flex align-items-center gap-2">
                        <div >
                            <p class="m-0 border-circle  w-3rem h-3rem bg-blue-400 text-white flex align-items-center justify-content-center">500+</p>
                        </div>
                        <div>
                            <p class="m-0 font-bold">Quality Courses</p>
                            <p class="m-0">Curated learning paths</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col flex align-items-center h-screen">
            <Card>
                <template #header>
                    <h2 class="m-0">Login</h2>
                </template>
                <template #content>
                    <div class="flex flex-column gap-3">
                        <InputText placeholder="Email" />
                        <InputText placeholder="Password" />
                    </div>
                </template>
            </Card>
        </div>
    </div>
    </div>
    
</template>
<script setup>
import Card from 'primevue/card';
</script>
<style scoped>

</style>