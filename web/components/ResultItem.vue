<template>
  <div class="flex justify-between items-center py-2.5">
    <p class="flex-1 font-bold">{{ name }}</p>
    <UButton
      class="uppercase flex justify-center items-center px-5 py-2 font-bold"
      type="button"
      :ui="{ rounded: 'rounded-full' }" 
      color="primary"
      variant="solid"
    >
      See Details
    </UButton>
  </div>
</template>

<script setup lang="ts">
interface Props {
  name: string
  url: string
}

const { name } = defineProps<Props>()
</script>

<style scoped>

</style>