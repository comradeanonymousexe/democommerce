<template>
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">  
        <div>
          <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white-900"> <!-- Corrected class name -->
            {{ title }}
          </h2>
        </div>
        <slot></slot>
      </div>
    </div>
  </template>
  
  <script setup>
  const { title } = defineProps({
    title: String
  })
  </script>
  
  <style scoped>
  </style>
  