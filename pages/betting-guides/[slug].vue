<script setup>
const route = useRoute()

// 🛑 Prevent invalid slug (fixes /blank issue)
if (!route.params.slug || route.params.slug === 'blank') {
  throw createError({ statusCode: 404, statusMessage: 'Page Not Found' })
}

// ✅ SEO
const pageTitle = `Betting Guides | ${route.params.slug.replace(/-/g, ' ')}`
const pageDescription =
  "Looking for expert insights and tips on online betting? Check out our comprehensive betting guide articles at Mr247Bet and elevate your gambling experience today."

useHead({
  title: pageTitle,
  link: [
    { rel: 'canonical', href: 'https://www.mr247bet.com' + route.path },
    { rel: 'alternate', href: 'https://www.mr247bet.com', hreflang: 'en' }
  ],
})

useServerSeoMeta({
  description: pageDescription,
  ogTitle: pageTitle,
  ogType: 'website',
  ogUrl: 'https://www.mr247bet.com',
  ogImage: '/og/betting-guide.jpg', // ✅ fixed (removed /public)
  ogImageAlt: 'betting-guide',
  ogImageType: 'image/png',
  ogImageWidth: '1200',
  ogImageHeight: '630',
  ogSiteName: 'Mr247Bet',
  ogLocale: 'en_US',
  ogDescription: pageDescription,
  twitterCard: 'summary_large_image',
  twitterTitle: pageTitle,
  twitterDescription: pageDescription,
  twitterImage: '/og/betting-guide.jpg',
  twitterImageAlt: 'betting-guide'
})

// ✅ SAFE FETCH
const { data: bgPost, error } = await useFetch(
  () => `/AWS/bgpost?slug=${route.params.slug}`
)

// Optional debug
if (error.value) {
  console.error('Fetch error:', error.value)
}

// ✅ SAFE COMPUTED (prevents undefined crash)
const post = computed(() => bgPost.value?.[0] || null)

// 🛑 Prevent 500 → return 404 instead
if (!post.value) {
  throw createError({
    statusCode: 404,
    statusMessage: 'Post Not Found'
  })
}
</script>

<template>
  <div v-if="post">
    <BettingGuideDetailsItem
      :postImg="post?._embedded?.['wp:featuredmedia']?.[0]?.source_url"
      :postTitle="post?.title?.rendered"
      :postContent="post?.content?.rendered"
      :postPublished="post?.date"
      :postTags="post?.tags"
      postCategories="Betting guides"
      :key="post?.id"
    />
  </div>
</template>

<style scoped></style>