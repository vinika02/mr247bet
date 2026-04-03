<script setup>
const { imgUrl, category, title, published, slug } = defineProps([
  'imgUrl',
  'category',
  'title',
  'published',
  'slug'
])

const isValidSlug = computed(() => {
  return slug && slug !== 'blank'
})

let day = new Date(`${published}`).toLocaleString("default", { day: "numeric" });
let month = new Date(`${published}`).toLocaleString("default", { month: "long" });
let year = new Date(`${published}`).toLocaleString("default", { year: "numeric" });
</script>

<template>
  <div 
    class="col-xl-4 col-md-6" 
    v-if="isValidSlug"
    @click="useRouter().push(`/betting-guides/${slug}`)"
  >
    <article>

      <div class="post-img">
        <img :src="imgUrl" alt="" class="img-fluid">
      </div>

      <p class="post-category">{{ category }}</p>

      <h2 class="title">
        <NuxtLink 
          v-if="isValidSlug" 
          :to="`/betting-guides/${slug}`"
        >
          {{ title }}
        </NuxtLink>
      </h2>

      <div class="d-flex align-items-center">
        <div class="post-meta">
          <p class="post-date">
            <time :datetime="published">
              {{ month }} {{ day }}, {{ year }}
            </time>
          </p>
        </div>
      </div>

    </article>
  </div>
</template>

<style scoped>
.img-fluid {
  cursor: pointer;
}
</style>