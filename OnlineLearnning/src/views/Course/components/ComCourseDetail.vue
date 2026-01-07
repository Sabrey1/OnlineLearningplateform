<template>
    <div class="pb-8">
    <Header />
    </div>
  <div class="fix-container pt-5 pb-5">
    <div v-if="course">
        <div class="grid">
            <div class="col">
                <div class="flex gap-2 align-items-center cursor-pointer" @click="goBack">
            <icon class="pi pi-arrow-left cursor-pointer" ></icon>
            <p>Back to Courses</p>
        </div>
        <Chip>{{ course.category_id }}</Chip>
        <h1 class="m-0">Course Title: {{ course.title }}</h1>
        <p class=" ">Description: {{ course.description }}</p>
        <div class="flex gap-5" >
            <div>
                <div class="flex align-item-center gap-2">
                    <i class="pi pi-star-fill text-yellow-400 mt-1"></i>
                    <p class="m-0">4.9(2,840 reviews)</p>
                </div>
            </div>
            <div>
                <div class="flex align-item-center gap-2">
                    <i class="pi pi-users text-yellow-400 mt-1"></i>
                    <p class="m-0">15,420 students</p>
                </div>
            </div>                  
        </div>
        <div class="flex align-items-center gap-2">
            <div>
                <Avatar label="P" class="mr-2" size="xlarge" shape="circle" />
            </div>
            <div>
                <p class="m-0">Created By</p>
                <p class="m-0">{{ course.teacher_id }} Name</p>
            </div>
        </div>
            <div class="flex gap-5" >
            <div>
                <div class="flex align-item-center gap-2">
                    <i class="pi pi-clock mt-1"></i>
                    <p class="m-0">42 hours</p>
                </div>
            </div>
            <div>
                <div class="flex align-item-center gap-2">
                    <i class="pi pi-play-circle mt-1"></i>
                    <p class="m-0">156 lessons</p>
                </div>
            </div>                  
            <div>
                <div class="flex align-item-center gap-2">
                    <i class="pi pi-globe mt-1"></i>
                    <p class="m-0">English</p>
                </div>
            </div>                  
            <div>
                <div class="flex align-item-center gap-2">
                    <i class="pi pi-trophy mt-1"></i>
                    <p class="m-0">Beginner</p>
                </div>
            </div>                  
        </div> 
        
        <div class="mt-8">
            <h2>What you'll learn</h2>
            <Card>
                <template #content>
                    <div class="grid">
                        <div class="col">
                            <div class="flex gap-3 align-items-center">
                                <icon class="pi pi-check-circle"></icon>
                                <p class="m-0">Build 16+ real-world web development projects</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="flex gap-3 align-items-center">
                                <icon class="pi pi-check-circle"></icon>
                                <p class="m-0">Master HTML5, CSS3, and modern JavaScript (ES6+)</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="col">
                            <div class="flex gap-3 align-items-center">
                                <icon class="pi pi-check-circle"></icon>
                                <p class="m-0">Create responsive websites with Flexbox and Grid</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="flex gap-3 align-items-center">
                                <icon class="pi pi-check-circle"></icon>
                                <p class="m-0">Build full-stack applications with React and Node.js</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="col">
                            <div class="flex gap-3 align-items-center">
                                <icon class="pi pi-check-circle"></icon>
                                <p class="m-0">Work with databases like MongoDB and PostgreSQL</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="flex gap-3 align-items-center">
                                <icon class="pi pi-check-circle"></icon>
                                <p class="m-0">Deploy your applications to the cloud</p>
                            </div>
                        </div>
                    </div>
                </template>
            </Card>
        </div>
        <div>
            <h2>Course Curriculum</h2>
            <div class="flex flex-column gap-3">
                <Card v-for="lesson in lessons" :key="lesson.id">
                    <template #content>
                        <div class="flex justify-content-between align-items-center">
                            <div>
                               
                                <h3 class="m-0 mb-2">{{ lesson.title }}</h3>
                                <div class="flex gap-4">
                                    <div class="flex align-items-center gap-2">
                                        <i class="pi pi-play-circle"></i>
                                        <span>{{ lesson.numLessons }} lessons</span>
                                    </div>
                                    <div class="flex align-items-center gap-2">
                                        <i class="pi pi-clock"></i>
                                        <span>{{ lesson.duration }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </Card>
            </div>
        </div>
        <div>
            <h2>Your Instructor</h2>
            <Card>
               <template #content>
                 <div class="flex gap-3 align-items-center">
                    <div>
                        <Avatar label="P" class="mr-2" size="xlarge" shape="circle" />
                    </div>
                    <div>
                        <p class="m-0">Sarah Johnson</p>
                        <p class="m-0">Senior Software Engineer with 10+ years of experience at top tech companies.</p>
                    </div>
                </div>
                </template>
            </Card>
        </div>

            </div>
        <div class="col flex justify-content-center mt-8">
            <Card style="width: 400px; height:630px;">
                <template #content>
                     <img 
                    src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800&h=400&fit=crop" 
                    alt="course thumbnail" 
                    style="width:100%; height:200px; object-fit:cover; border-radius:4px 4px 0 0;"
                    />
                    <h3 class="text-lg font-bold mb-2">$89.99 <s>$199.99</s></h3>
                    
                    <Button class="w-full" label="Enroll Now"></Button>
                    <Button class="w-full mt-2" label="Add to Cart"></Button>

                    <div>
                        <p class="text-center">30-Day Money-Back Guarantee</p>
                        <hr>
                        <h4 class="m-2">This course includes:</h4>
                        <div class="flex gap-2 align-items-center">
                            <icon class="pi pi-play-circle"></icon>
                            <p class="m-1">42 hours on-demand video</p>
                        </div>
                        <div class="flex gap-2 align-items-center">
                            <icon class="pi pi-file"></icon>
                            <p class="m-1">156 lessons</p>
                        </div>
                        <div class="flex gap-2 align-items-center">
                            <icon class="pi pi-download"></icon>
                            <p class="m-1">Downloadable resources</p>
                        </div>
                        <div class="flex gap-2 align-items-center">
                            <icon class="pi pi-trophy"></icon>
                            <p class="m-1">Certificate of completion</p>
                        </div>
                    </div>
                </template>
            </Card>
        </div>
        </div>
    </div>

    <div v-else>
      <p>Loading course details...</p>
    </div>
    
  </div>
  <Footer />
</template>

<script setup>
import { ref, watch } from 'vue'
import { useCourse } from '@/Hook/useCourse.js'
import Avatar from 'primevue/avatar';
import Chip from 'primevue/chip';
import Card from 'primevue/card';

const { id } = defineProps({ id: String })
const { courses } = useCourse()
const course = ref(null)

const lessons = ref([
  { id: 1, title: 'Introduction to Web Development', numLessons: 8, duration: '2h 30m' },
  { id: 2, title: 'HTML5 Fundamentals', numLessons: 12, duration: '4h 15m' },
  { id: 3, title: 'CSS3 & Modern Styling', numLessons: 18, duration: '6h 45m' },
  { id: 4, title: 'JavaScript Essentials', numLessons: 24, duration: '8h 20m' },
  { id: 5, title: 'React.js Complete Guide', numLessons: 32, duration: '10h 30m' },
  { id: 6, title: 'Node.js & Express', numLessons: 28, duration: '8h 15m' },
  { id: 7, title: 'Database Integration', numLessons: 18, duration: '5h 45m' },
  { id: 8, title: 'Deployment & DevOps', numLessons: 16, duration: '4h 30m' }
]);

function goBack() {
  window.history.back();
}

watch(
  courses,
  (newCourses) => {
    if (newCourses && newCourses.length) {
      course.value = newCourses.find(c => c.id.toString() === id)
    }
  },
  { immediate: true }
)
</script>
