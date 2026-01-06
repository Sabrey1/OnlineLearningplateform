<template>
  <div class="min-h-screen flex align-items-center justify-content-center" style="background-color: #0f1824;">
    <!-- Sign In / Sign Up Card -->
    <div class="w-full p-6 bg-gray-100 border-round-2xl shadow-8" style="max-width: 28rem;">
      <!-- Tab Navigation -->
      <div class="flex gap-2 mb-5">
        <Button
          label="Sign In"
          :class="['flex-1 font-semibold', activeTab === 'signin' ? 'p-button-teal' : 'p-button-text']"
          @click="activeTab = 'signin'"
          :style="activeTab === 'signin' ? 'background-color: #2dd4bf; border-color: #2dd4bf;' : 'color: #6b7280;'"
        />
        <Button
          label="Sign Up"
          :class="['flex-1 font-semibold', activeTab === 'signup' ? 'p-button-teal' : 'p-button-text']"
          @click="activeTab = 'signup'"
          :style="activeTab === 'signup' ? 'background-color: #2dd4bf; border-color: #2dd4bf;' : 'color: #6b7280;'"
        />
      </div>

      <!-- Welcome Text -->
      <h2 class="text-2xl font-bold text-gray-800 text-center mb-2">
        {{ activeTab === 'signin' ? 'Welcome Back!' : 'Create an Account' }}
      </h2>
      <p class="text-gray-500 text-center mb-4">
        {{ activeTab === 'signin' ? 'Sign in to continue your learning journey' : 'Sign up to start learning today' }}
      </p>

      <!-- Form -->
      <div class="flex flex-column gap-4">
        <!-- Email Field -->
        <div>
          <label class="block text-gray-700 font-medium mb-2">Email Address</label>
          <span class="p-input-icon-left w-full">
        <IconField>
            <InputIcon class="pi pi-envelope" />
            <InputText v-model="value1" placeholder="Email" class="w-full"/>
        </IconField>
          </span>
        </div>

     <div class="card w-full">
        <p class="m-0 mb-2 font-medium">Password</p>
  <Password 
    v-model="value" 
    toggleMask 
    class="w-full"     
    inputClass="w-full"  
  />
</div>


        <!-- Remember Me & Forgot Password -->
        <div class="flex align-items-center justify-content-between">
          <div class="flex align-items-center gap-2">
            <Checkbox v-model="rememberMe" :binary="true" inputId="remember" />
            <label for="remember" class="text-sm text-gray-600 cursor-pointer">Remember me</label>
          </div>
          <a href="#" class="text-sm font-medium no-underline hover:underline" style="color: #2dd4bf;">
            Forgot password?
          </a>
        </div>

    <Button
  icon="pi pi-arrow-right"
  iconPos="right"
  class="w-full font-semibold"
  style="background-color: #2dd4bf; border-color: #2dd4bf;"
  @click="gotoLogin"
>
  <template #content>
    <span v-if="!loading">{{ activeTab === 'signin' ? 'Sign In' : 'Sign Up' }}</span>
    <ProgressSpinner v-else style="width: 1.5rem; height: 1.5rem; --spinner-color: #ffffff;" />
  </template>
</Button>


        <!-- Divider -->
        <Divider align="center">
          <span class="text-sm text-gray-500">Or continue with</span>
        </Divider>

        <!-- Social Login Buttons -->
        <div class="grid">
          <div class="col-6">
            <Button label="Google" icon="pi pi-google" class="w-full p-button-outlined p-button-secondary" />
          </div>
          <div class="col-6">
            <Button label="GitHub" icon="pi pi-github" class="w-full p-button-outlined p-button-secondary" />
          </div>
        </div>

        <!-- Sign Up / Sign In Link -->
        <p class="text-center text-sm text-gray-600 mt-2">
          {{ activeTab === 'signin' ? "Don't have an account?" : 'Already have an account?' }}
          <a href="#" class="font-medium no-underline hover:underline ml-1" style="color: #2dd4bf;">
            {{ activeTab === 'signin' ? 'Sign up for free' : 'Sign in' }}
          </a>
        </p>
      </div>

      <!-- Terms -->
      <p class="text-xs text-gray-400 text-center mt-4">
        By continuing, you agree to our
        <a href="#" class="underline">Terms of Service</a> and
        <a href="#" class="underline">Privacy Policy</a>
      </p>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import Button from 'primevue/button';
import InputText from 'primevue/inputtext';
import Checkbox from 'primevue/checkbox';
import Divider from 'primevue/divider';
import IconField from 'primevue/iconfield';
import InputIcon from 'primevue/inputicon';
import ProgressSpinner from 'primevue/progressspinner';
import Password from 'primevue/password';

const loading = ref(false);

const value = ref(null);
const email = ref('');
const password = ref('');
const showPassword = ref(false);
const rememberMe = ref(false);
const activeTab = ref('signin');



function gotoLogin() {
    loading.value = true;
   setTimeout(() => {
    loading.value = false;
    window.location.href = '/'; // redirect after "loading"
  }, 2000); // 2 seconds for demo
}
</script>



<style scoped>
.p-button-teal {
  background-color: #2dd4bf;
  border-color: #2dd4bf;
  color: white;
}
.p-button-teal:hover {
  background-color: #2bc9b3;
  border-color: #2bc9b3;
}
.shadow-8 {
  box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1), 0 10px 10px -5px rgba(0,0,0,0.04);
}
.border-round-2xl {
  border-radius: 1rem;
}
</style>