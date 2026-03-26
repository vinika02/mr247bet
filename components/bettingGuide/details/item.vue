<script setup>
const { postImg, postTitle, postPublished, postContent, postCategories, postTags } = defineProps(['postImg', 'postTitle', 'postPublished', 'postContent', 'postCategories', 'postTags'])
</script>

<template>
    <main id="main">
        <BettingGuideDetailsHeader />
        <BettingGuideDetailsContent :postImg="postImg" :postTitle="postTitle" :postPublished="postPublished"
            :postContent="postContent" :postCategories="postCategories" :postTags="postTags" />
    </main>
</template>


<style scoped></style>