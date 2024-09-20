<template>
  <div class="flex gap-x-7">
    <div
      v-for="option in options"
      :key="option.value"
      class="cursor-pointer flex justify-center"
    >
      <input
        name="searchType"
        type="radio"
        :id="`option-${option.value}`"
        :value="option.value"
        :checked="option.value === selection"
        @change="() => onSelected(option.value)"
      />
      <label :for="`option-${option.value}`" class="ml-2 font-bold text-sm">{{
        option.label
      }}</label>
    </div>
  </div>
</template>

<script setup lang="ts">
import type { SearchType } from '~/composables/useSearch';

const options = [
  {
    value: "people",
    label: "People",
  },
  {
    value: "movies",
    label: "Movies",
  },
];

const selection = defineModel<SearchType>();

function onSelected(value: String) {
  selection.value = value as SearchType
}
</script>

<style scoped></style>
