<script setup>
const { gameProviders } = defineProps(['gameProviders'])
</script>

<template>
    <div class="tab-pane fade" id="games-tab-pane" role="tabpanel" aria-labelledby="games-tab" tabindex="0">
        <div class="row">
            <div class="col-md-12">
                <CasinosReviewTabGamesSoftware :gameProviders="gameProviders" />
            </div>
        </div>
    </div>
</template>


<style scoped></style>