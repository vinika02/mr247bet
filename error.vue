<script setup>
// import imageUrl from '~/assets/img/404.png'
import imageUrl from '/public/404.png'
</script>

<template>
    <main id="main">

        <section id="404" class="page-not-found">
            <div class="container">
                <div class="row error-message">
                    <div class="col-md-6 mt-4">
                        <h1>404</h1>
                        <h3>Page not found</h3>
                        <p>We can't seem to find the page you're looking for. Would you like to head back to our
                            <NuxtLink to="/">homepage</NuxtLink> instead?
                        </p>
                        <p>The content you are looking for does not exist or has been moved elsewhere</p>
                        <p>Make sure that you've correctly entered the URL of the page you are looking for. If you reached
                            this page by an error on the website, please <NuxtLink to="/contact">contact us</NuxtLink> so we
                            can fix
                            the problem.</p>
                    </div>

                    <div class="col-md-6">
                        <img :src="imageUrl" class="img-fluid" alt="error-image">
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
</template>


<style scoped></style>