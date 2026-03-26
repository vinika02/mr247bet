<script setup>
const route = useRoute()
const pageTitle = 'Betting Guides | Mr247bet casino and reviews'
const pageDescription = "Get expert betting tips and strategies to improve your game and increase your chances of winning big at Mr247Bet's Betting Guide. From basics to advanced techniques, we cover it all!"

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
    ogImage: '/public/og/betting-guide.jpg',
    ogImageAlt: 'betting-guides',
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
    twitterImageAlt: 'betting-guides'
})
</script>

<template>
    <BettingGuideSection />
</template>


<style scoped></style>