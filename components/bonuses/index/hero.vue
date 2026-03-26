<script setup>

</script>

<template>
    <!-- Casinos main category Hero Section  -->
    <section id="heroCasinos" class="hero">
        <div class="container position-relative">
            <div class="row gy-5">
                <div
                    class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h1>Bonuses</h1>
                    <p>Hot Bonuses Categories</p>
                    <label for="exampleDataList" class="form-label">
                        <div class="input-group mb-12">
                            <input type="text" class="form-control" list="datalistOptions" id="exampleDataList"
                                placeholder="Search for the best Bonuses" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a href="#" class="primary-btn"><i class="bi bi-search"></i></a>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </div>

        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="subcategories row gy-4 mt-5">
                    <div class="col-xl-2 col-md-6">
                        <div class="icon-box">
                            <h4 class="title">
                                <NuxtLink to="/bonuses/welcome" class="stretched-link">Welcome Bonuses</NuxtLink>
                            </h4>
                            <div class=""><img src="~/assets/img/bonuses/welcome.jpg" class="img-fluid" alt=""></div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-md-6">
                        <div class="icon-box">
                            <h4 class="title">
                                <NuxtLink to="/bonuses/free-spins" class="stretched-link">Free Spins Bonuses</NuxtLink>
                            </h4>
                            <div class=""><img src="~/assets/img/bonuses/free-spins.jpg" class="img-fluid" alt=""></div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-md-6">
                        <div class="icon-box">
                            <h4 class="title">
                                <NuxtLink to="/bonuses/no-deposit" class="stretched-link">No-Deposit Bonuses</NuxtLink>
                            </h4>
                            <div class=""><img src="~/assets/img/bonuses/no-deposit.jpg" class="img-fluid" alt=""></div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-md-6">
                        <div class="icon-box">
                            <h4 class="title">
                                <NuxtLink to="/bonuses/cashback" class="stretched-link">Cashback Bonuses
                                </NuxtLink>
                            </h4>
                            <div class=""><img src="~/assets/img/bonuses/cash-back.jpg" class="img-fluid" alt=""></div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="icon-box">
                            <h4 class="title">
                                <NuxtLink to="/bonuses/no-wagering" class="stretched-link">No Wagering Bonuses
                                </NuxtLink>
                            </h4>
                            <div class=""><img src="~/assets/img/bonuses/no-wagering.jpg" class="img-fluid" alt=""></div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="icon-box">
                            <h4 class="title">
                                <NuxtLink to="/bonuses/match-deposit" class="stretched-link">Match Deposit Bonuses
                                </NuxtLink>
                            </h4>
                            <div class=""><img src="~/assets/img/bonuses/match-deposit.jpg" class="img-fluid" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped>
.subcategories {
    justify-content: center;
}
</style>