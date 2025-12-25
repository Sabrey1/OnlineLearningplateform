<template>
    <div class="bg-gray-500 p-4 custom-toolbar">
        <div class="fix-container">
            <div class="flex align-items-center justify-content-between">
                <!-- LEFT -->
                <div class="flex align-items-center gap-2">
                    <i class="fa fa-graduation-cap text-2xl text-white" aria-hidden="true"></i>
                    <h1 class="m-0 p-0 text-white">
                        Online <span class="text-blue-400">Learning</span>
                    </h1>
                </div>
                <!-- CENTER -->
                <div class="flex-1 flex justify-content-center">
                    <ul class="flex gap-5 text-xl list-none m-0 p-0 text-white">
                        <li>
                            <a href="#" class="no-underline text-white">Courses</a>
                        </li>
                        <li>
                            <a href="#" class="no-underline text-white">Categories</a>
                        </li>
                        <li>
                            <a href="#" class="no-underline text-white">Instructors</a>
                        </li>
                        <li>
                            <a href="#" class="no-underline text-white">Pricing</a>
                        </li>
                    </ul>
                </div>
                <!-- RIGHT -->
                <div class="flex justify-content-end gap-1">
                    <RouterLink to="/login">
                        <Button label="Sign In" text />
                    </RouterLink>
                    
                    <Button label="Start Learning" icon="pi pi-sparkles" />
                    <ComTranslate />
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import ComTranslate from '@/views/Layout/ComTranslate.vue'
</script>

<style scoped>
    .custom-toolbar {
  position: fixed !important;
  
  left: 0 !important;
  right: 0 !important;
  width: 100% !important;
  z-index: 50 !important;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.custom-toolbar :deep(.p-toolbar) {
  position: fixed !important;
  
  left: 0;
  right: 0;
  width: 100%;
  
}
</style>