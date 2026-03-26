<script setup>
const { categoryName } = defineProps(['categoryName'])
</script>

<template>
    <!-- Casino Categories Hero Section  -->
    <section id="heroSub" class="hero">
        <div class="container position-relative">
            <div class="row gy-5">
                <div
                    class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h1>{{ categoryName }}</h1>
                    <p>Over 1000 Games</p>
                    <p class="mt-4">Welcome to Mr247Bet {{ categoryName }} directory, home to the most trusted online
                        Games. All Games in the directory are filtered through rigorous Games
                        parameters,
                        supplemented with Mr247Bet expert reviews and coupled with player reviews. This page offers a
                        thorough insight into each online venue listed on our website.</p>
                    <label for="exampleDataList" class="form-label">
                        <div class="input-group mb-12">
                            <input type="text" class="form-control" list="datalistOptions" id="exampleDataList"
                                placeholder="Search for the best Games" aria-describedby="basic-addon2">

                            <div class="input-group-append">
                                <a href="#" class="primary-btn"><i class="bi bi-search"></i></a>
                            </div>
                        </div>
                        <div class="mt-5"></div>
                    </label>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->
</template>


<style scoped></style>