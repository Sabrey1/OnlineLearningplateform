<template>
    <div class="surface-700 mt-5">
        <div class="fix-container">
            <div class="pt-8 pb-8">   
            <div class="text-white p-3 text-center">
                <p class="text-green-500 m-0">Why Choose Us</p>
                <h1 class="m-0 line-height-2">Everything You Need to<br> <span class="text-blue-400">Succeed</span> </h1>
                <p class="mt-2">We provide all the tools and resources you need to transform your learning experience</p>
            </div>
             <div class="grid">
                <div class="col-4">
                    <Card>
                        <template #content>
                            <i class="pi pi-bolt bg-blue-500 p-3 border-round text-white"></i>
                            <p class="font-bold text-xl">Learn at Your Pace</p>
                            <p>Access courses anytime, anywhere. . Our flexible learning paths adapt to your schedule   .</p>
                        </template>
                    </Card>
                </div>
                <div class="col-4">
                    <Card>
                        <template #content>
                            <i class="pi pi-shield bg-blue-500 p-3 border-round text-white" ></i>
                            <p class="font-bold text-xl">Lifetime Access</p>
                            <p>Once enrolled, access your courses forever. Learn, review, and master at your own pace.</p>
                        </template>
                    </Card>
                </div>
                <div class="col-4">
                    <Card>
                        <template #content>
                            <i class="pi pi-globe bg-blue-500 p-3 border-round text-white"></i>
                            <p class="font-bold text-xl">Global Community</p>
                            <p>Join a worldwide community of learners. Connect, collaborate, and grow together.</p>
                        </template>
                    </Card>
                </div>
                <div class="col-4">
                    <Card>
                        <template #content>
                            <i class="pi pi-headphones bg-blue-500 p-3 border-round text-white"></i>
                            <p class="font-bold text-xl">24/7 Support</p>
                            <p>Our dedicated support team is always here to help you succeed in your learning journey.</p>
                        </template>
                    </Card>
                </div>
                <div class="col-4">
                    <Card>
                        <template #content>
                            <i class="pi pi-trophy bg-blue-500 p-3 border-round text-white"></i>
                            <p class="font-bold text-xl">Verified Certificates</p>
                            <p>Earn industry-recognized certificates that boost your resume and career prospects</p>
                        </template>
                    </Card>
                </div>
                <div class="col-4">
                    <Card>
                        <template #content>
                            <i class="pi pi-refresh bg-blue-500 p-3 border-round text-white"></i>
                            <p class="font-bold text-xl">Regular Updates</p>
                            <p>Our courses are constantly updated to keep you current with the latest trends and skills.</p>
                        </template>
                    </Card>
                </div>
                 
             </div>
             
        </div>
        </div>
    </div>
</template>
<script setup>
    import Card from 'primevue/card';
</script>