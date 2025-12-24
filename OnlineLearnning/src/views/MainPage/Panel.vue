<template>
    <div class="surface-700" style="height: 100vh; padding-top: 100px;">
        <div class="fix-container  ">
            <div class="grid">
                <div class="col   justify-content-center align-items-center">
                    <div class="text-5xl line-height-1 border-round-sm text-white ">
                        <h2 class="mb-0">Unlock Your <br> <span class="gradient-text">Potential</span> <br>
                        Learn Without<br> Limits</h2>
                    </div>
                    <p class="text-gray-400 text-xl ">Join thousands of learners mastering new skills with expert-<br>led courses, interactive projects, and personalized learning paths.</p>
                    <div class="flex gap-3">
                        <Button label="Explore Courses" icon="pi pi-arrow-right" iconPos="right"></Button>
                        <Button label="Watch Demo" icon="pi pi-caret-right"></Button>
                    </div>
                    <hr>
                    <div class="grid">
                        <div class="col">
                            <div class="text-white">
                                <div class="flex align-item-center gap-2 ">
                                    <i class="pi pi-users text-xl mt-2 text-teal-500"></i>
                                    <h2 class="m-0">50K+</h2>
                                </div>
                                <p class="m-0">Active Learners</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-white">
                                <div class="flex align-item-center gap-2 ">
                                    <i class="pi pi-book text-xl mt-2 text-teal-500"></i>
                                    <h2 class="m-0">1,200++</h2>
                                </div>
                                <p class="m-0">Courses</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-white">
                                <div class="flex align-item-center gap-2 ">
                                    <i class="pi pi-graduation-cap text-xl mt-2 text-teal-500"></i>
                                    <h2 class="m-0">98%+</h2>
                                </div>
                                <p class="m-0">Success Rate</p>
                            </div>
                        </div>
                    </div>            
                </div>
                <div class="col flex justify-content-center align-items-center">
                    <div class="p-3 border-round-sm font-bold">
                       <Card style="width: 30rem; overflow: hidden">
                            <template #header>
                                <img alt="user header"  src="https://primefaces.org/cdn/primevue/images/usercard.png" />
                            </template>
                            <template #title>Introduction to Design</template>
                            <template #subtitle>Master the fundamentals of modern design</template>
                        </Card>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import Button from 'primevue/button';
import Card from 'primevue/card';
</script>

<style scoped>
.gradient-text {
  background: linear-gradient(
    90deg,
    rgb(44, 164, 211) 0%,
    rgb(14, 96, 163) 90%
  );
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

</style>