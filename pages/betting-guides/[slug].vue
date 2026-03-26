<script setup>
const route = useRoute()
const pageTitle = `Betting Guides | ${route.params.slug.replace(/-/g, ' ')}`
const pageDescription = "Looking for expert insights and tips on online betting? Check out our comprehensive betting guide articles at Mr247Bet and elevate your gambling experience today."

useHead({
    title: pageTitle,
    link: [
        { rel: 'canonical', href: route.path },
        { rel: 'alternate', href: 'https://www.mr247bet.com', hreflang: 'en' }
    ],
})

useServerSeoMeta({
    description: pageDescription,
    ogTitle: pageTitle,
    ogType: 'website',
    ogUrl: 'https://www.mr247bet.com',
    ogImage: '/public/og/betting-guide.jpg',
    ogImageAlt: 'betting-guide',
    ogImageType: 'image/png',
    ogImageWidth: '1200',
    ogImageHeight: '630',
    ogSiteName: 'Mr247Bet',
    ogLocale: 'en_US',
    ogLocaleAlternate: 'en_GB',
    ogLocaleAlternate: 'en_AU',
    ogLocaleAlternate: 'en_NZ',
    ogLocaleAlternate: 'en_ZA',
    ogDescription: pageDescription,
    twitterCard: 'summary_large_image',
    twitterTitle: pageTitle,
    twitterDescription: pageDescription,
    twitterImage: '/public/og/betting-guide.jpg',
    twitterImageAlt: 'betting-guide'
})

// Fetching single post 
const { data: bgPost } = await useFetch(() => `/AWS/bgpost?slug=${route.params.slug}`)
// console.log('bgPost :', bgPost.value[0])

</script>

<template>
    <div>
        <BettingGuideDetailsItem :postImg="bgPost[0]._embedded['wp:featuredmedia'][0].source_url"
            :postTitle="bgPost[0].title.rendered" :postContent="bgPost[0].content.rendered" :postPublished="bgPost[0].date"
            :postTags="bgPost[0].tags" postCategories="Betting guides" :key="bgPost[0].id" />
    </div>
</template>


<style scoped></style>