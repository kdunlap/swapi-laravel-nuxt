<template>
  <div class="flex flex-col justify-center items-center h-screen w-screen">
    <h1 class="text-4xl">Add the layout here: testing docker fetching</h1>

    <UButton @click="refresh" class="mt-4">Refresh</UButton>
    
    <p class="mt-4">
      <span v-if="status === 'error'">There was a problem fetching data...</span>
      <span v-else-if="status === 'pending'">Loading...</span>
      <span v-else>Loaded</span>
    </p>

    <div class="mt-4 p-4 bg-slate-500">
      <pre>{{ data }}</pre>
    </div>
  </div>
</template>

<script setup lang="ts">

  const { data, status, refresh } = await useFetch('/api/v1/people')

</script>
