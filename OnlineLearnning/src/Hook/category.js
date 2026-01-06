import {onMounted, ref} from 'vue'
import axios from 'axios'
const categories = ref(null)
export function useCategory() {
    async function getCategories() {
    const res = await axios.get('http://127.0.0.1:8000/api/categories')
    if(res.data){
        categories.value = res.data
    }
    }
    onMounted(() => {
        getCategories();
    });
    return {
        categories,
    }
}