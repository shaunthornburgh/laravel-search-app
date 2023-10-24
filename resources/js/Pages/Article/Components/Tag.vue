<template>
    <span class="text-xs px-2 py-1 rounded bg-indigo-50 text-indigo-500">{{ tag.name }}</span>
</template>

<script setup>
const props = defineProps({
    tag: Object
})
</script>
