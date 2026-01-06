import {ref, onMounted} from 'vue'
import axios from 'axios'

const courses = ref([])

export function useCourse(){


async function getDate(){
    const res = await axios.get('http://127.0.0.1:8000/api/courses')
    if(res.data){
        courses.value = res.data
    }
}

onMounted(() => {
    getDate()
})


    return {
        courses
    }
}