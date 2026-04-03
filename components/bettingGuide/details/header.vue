<script setup>
const { params } = useRoute();
</script>

<template>
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Welcome to Mr247Bet Betting Guides</h2>
                        <p>Learn from the online betting masters</p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li>
                        <NuxtLink to="/">Home</NuxtLink>
                    </li>
                    <li>
                        <NuxtLink to="/betting-guides">Betting Guides</NuxtLink>
                    </li>
                    <li v-if="params?.slug">{{ params?.slug }}</li>
                </ol>
            </div>
        </nav>
    </div>
</template>


<style scoped>
.breadcrumbs {
    padding-top: 3rem;
}
</style>