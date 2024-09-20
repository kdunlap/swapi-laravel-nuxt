<template>
  <div class="p-7 rounded bg-white border-gainsboro customShadow">
    <slot></slot>
  </div>
</template>

<script setup lang="ts">

</script>

<style scoped>
.customShadow {
  box-shadow: 0 1px 2px 0 var(--warm-grey-75);
}
</style>