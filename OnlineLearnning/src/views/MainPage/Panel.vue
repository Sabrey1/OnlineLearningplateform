<template>
    <div class="surface-700" style="height: 100vh; padding-top: 100px;">
        <div class="fix-container  ">
            <div class="grid">
                <div class="col">
                    <div class="text-5xl line-height-1 border-round-sm text-white">
                        <h1>Unlock Your <br> Potential <br>
                        Learn Without<br> Limits</h1>
                    </div>
                    <p class="text-white text-xl mt-0">Join thousands of learners mastering new skills with expert-<br>led courses, interactive projects, and personalized learning paths.</p>
                    <div class="flex gap-3">
                        <Button label="Explore Courses" icon="pi pi-arrow-right" iconPos="right"></Button>
                        <Button label="Watch Demo" icon="pi pi-caret-right"></Button>
                    </div>
                    <hr>
                    <div class="grid">
                        <div class="col">
                            <div class="text-white">
                                <div class="flex align-item-center gap-2 ">
                                    <i class="pi pi-users text-xl mt-2"></i>
                                    <h2 class="m-0">50K+</h2>
                                </div>
                                <p class="m-0">Active Learners</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-white">
                                <div class="flex align-item-center gap-2 ">
                                    <i class="pi pi-book text-xl mt-2"></i>
                                    <h2 class="m-0">1,200++</h2>
                                </div>
                                <p class="m-0">Courses</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-white">
                                <div class="flex align-item-center gap-2 ">
                                    <i class="pi pi-graduation-cap text-xl mt-2"></i>
                                    <h2 class="m-0">98%+</h2>
                                </div>
                                <p class="m-0">Success Rate</p>
                            </div>
                        </div>
                    </div>            
                </div>
                <div class="col">
                    <div class="p-3 border-round-sm font-bold ">
                       <Card style="width: 40rem; overflow: hidden">
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
import Image from 'primevue/image';
import Card from 'primevue/card';
</script>