<script setup>
const route = useRoute()
const pageTitle = 'Contact | Mr247bet casino and reviews'
const pageDescription = "Get in touch with our customer support team at Mr247Bet for any inquiries or feedback. We're always here to assist you with the best online casino experience."

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
    ogImage: '/public/og/contact-us.jpg',
    ogImageAlt: 'contact-us',
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
    twitterImage: '/public/og/contact-us.jpg',
    twitterImageAlt: 'contact-us'
})
</script>

<template>
    <main id="main">
        <section id="contact" class="contact">
            <div class="container">
                <ContactHeader />
                <div class="row gx-lg-0 gy-4 mt-4">
                    <ContactInfo />
                    <ContactForm />
                </div>
            </div>
        </section>
    </main>
</template>


<style scoped></style>