<template>
  <div class="flex flex-col h-[582px] w-[582px]">
    <h3 class="text-lg font-bold">Results</h3>
    <hr class="mt-2 border-pinkish-grey" />
    
    <div v-if="state === 'no-results'" class="flex-1 flex flex-col justify-center items-center">
      <p class="text-pinkish-grey text-sm font-bold">There are zero matches.</p>
      <p class="text-pinkish-grey text-sm font-bold">Use the form to search for People or Movies.</p>
    </div>

    <div v-if="state === 'searching'" class="flex-1 flex flex-col justify-center items-center">
      <p class="text-pinkish-grey text-sm font-bold">Searching...</p>
    </div>

    <div v-if="state === 'results'" class="overflow-y-auto">

      <div v-if="type === 'people'">
        <result-item
          v-for="result in personResults"
          class="border-b border-pinkish-grey"
          :name="result.name" 
          url="#"  
        />
      </div>

      <div v-if="type === 'movies'">
        <result-item
          v-for="result in movieResults"
          class="border-b border-pinkish-grey"
          :name="result.title" 
          url="/some-url"  
        />
      </div>
      
    </div>

  </div>
</template>

<script setup lang="ts">
  const { type, searching, movieResults, personResults } = useSearch()

  type State = 'no-results' | 'searching' | 'results'
  const state = computed<State>(() => {
    if(searching.value) return 'searching'

    if(type.value === 'people' && personResults.value.length > 0) {
      return 'results'
    }
    else if(type.value === 'movies' && movieResults.value.length > 0) {
      return 'results'
    }

    return 'no-results'
  })
</script>

<style scoped>

</style>