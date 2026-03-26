<script setup>
const {
    depositMethods, currencies, withdrawalMethods, withdrawalTimes, withdrawalLimit
} =
    defineProps(
        [
            'depositMethods', 'currencies', 'withdrawalMethods', 'withdrawalTimes', 'withdrawalLimit'
        ])
</script>

<template>
    <div class="tab-pane fade" id="payments-tab-pane" role="tabpanel" aria-labelledby="payments-tab" tabindex="0">
        <div class="row">
            <div class="col-md-6">
                <SportsBooksReviewTabPaymentsDeposit :depositMethods="depositMethods" />
                <SportsBooksReviewTabPaymentsCurrencies :currencies="currencies" />
            </div>
            <div class="col-md-6">
                <SportsBooksReviewTabPaymentsMethods :withdrawalMethods="withdrawalMethods" />
                <SportsBooksReviewTabPaymentsTimes :withdrawalTimes="withdrawalTimes" />
                <SportsBooksReviewTabPaymentsLimit :withdrawalLimit="withdrawalLimit" />
            </div>
        </div>
    </div>
</template>


<style scoped></style>