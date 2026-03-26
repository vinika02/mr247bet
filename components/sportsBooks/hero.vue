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
                    <!-- <p>Over 1000 Sportsbooks</p> -->
                    <p class="mt-4">
                        <slot></slot>
                    </p>
                    <!-- <label for="exampleDataList" class="form-label">
                        <div class="input-group mb-12">
                            <input type="text" class="form-control" list="datalistOptions" id="exampleDataList"
                                placeholder="Search for the best Sportsbooks" aria-describedby="basic-addon2">

                            <div class="input-group-append">
                                <a href="#" class="primary-btn"><i class="bi bi-search"></i></a>
                            </div>
                        </div>
                        <div class="mt-5"></div>
                    </label> -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->
</template>


<style scoped></style>