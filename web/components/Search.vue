<template>
  <div>
    <label class="font-semibold text-sm text-gray-700">{{ label }}</label>
    <search-type-selector class="mt-5" v-model="type" />
    <UInput 
      class="mt-5 w-80 leading-10 rounded border border-pinkish-grey customShadow" 
      v-model="query" 
      :placeholder="placeholder" 
      variant="none"
      :ui="{

      }"
    />
    <UButton
      class="uppercase w-full flex justify-center items-center mt-5 disabled:bg-pinkish-grey"
      type="button"
      :disabled="query.length < 1 || searching"
      @click="performSearch"
      @keydown.enter="performSearch"
      :ui="{ rounded: 'rounded-full' }"
      color="primary"
      variant="solid"
    >
      {{ buttonLabel }}
    </UButton>
  </div>
</template>

<script setup lang="ts">
const { type, searching, searchMovies, searchPeople } = useSearch();
const buttonLabel = computed(() => searching.value ? 'Searching...' : 'Search')
const query = ref("");

const placeholder = computed(() => {
  switch (type.value) {
    case "people":
      return "e.g. Chewbacca, Yoda, Boba Fett";
    case "movies":
      return "e.g. A New Hope, Empire Strikes Back";
  }
});

const label = computed(() => {
  switch (type.value) {
    case "people":
      return "Who are you searching for?";
    case "movies":
      return "What are you searching for?";
  }
});

function performSearch() {
  if(type.value === "people") {
    searchPeople(query.value)
  }
  else if(type.value === "movies") {
    searchMovies(query.value)
  }
}
</script>

<style scoped>
.customShadow {
  box-shadow: inset 0 1px 3px 0 var(--warm-grey-75);
}
</style>
