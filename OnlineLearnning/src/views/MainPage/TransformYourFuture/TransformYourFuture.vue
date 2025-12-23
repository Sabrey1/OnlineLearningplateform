<template>
    <div class="bg-green-300 mt-4">
        <div class="fix-container">
            <div class="text-center pt-8 pb-8">
                <Chip label="Start your learning journey today" icon="pi pi-sparkles" class="bg-white text-green-400 font-bold border-round-3xl"></Chip>
                <h1 class="text-7xl m-0 line-height-1">Ready to Transform Your<br> Future?</h1>
                <p class="font-bold">Join over 50,000 learners worldwide and unlock unlimited <br>access to 1,200+ courses</p>
                    <div class="flex gap-4 justify-content-center">
                        <Button label="Get Started free" icon="pi pi-arrow-right" iconPos="right" ></Button>
                        <Button label="View Pricing"></Button>
                    </div>
                <p>No credit card required • 7-day free trial • Cancel anytime</p>
            </div>
        </div>
    </div>
</template>
<script setup>
    import Chip from 'primevue/chip'; 
</script>