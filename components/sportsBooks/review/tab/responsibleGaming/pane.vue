<script setup>
const {
    depositTool, wagerTool, lossLimit, timeLimit, selfExclusion,
    coolOff, realityCheck, selfAssessment, withdrawalLock
} = defineProps(['depositTool', 'wagerTool', 'lossLimit', 'timeLimit', 'selfExclusion',
    'coolOff', 'realityCheck', 'selfAssessment', 'withdrawalLock'])
</script>

<template>
    <div class="tab-pane fade" id="responsible-tab-pane" role="tabpanel" aria-labelledby="responsible-tab" tabindex="0">
        <div class="row">
            <div class="col-md-6">
                <div class="details-item">
                    <p class="details-title">
                        <i class="bi bi-arrow-bar-down"></i>
                        <span :class="!depositTool ? 'notIncluded' : ''">Deposit Limit Tool</span>
                    </p>
                    <div class="details-text"></div>
                </div>

                <div class="details-item">
                    <p class="details-title">
                        <i class="bi bi-arrow-bar-up"></i>
                        <span :class="!wagerTool ? 'notIncluded' : ''">Wager Limit Tool</span>
                    </p>
                    <div class="details-text"></div>
                </div>

                <div class="details-item">
                    <p class="details-title">
                        <i class="bi bi-x-circle"></i>
                        <span :class="!lossLimit ? 'notIncluded' : ''">Loss Limit Tool</span>
                    </p>
                    <div class="details-text"></div>
                </div>

                <div class="details-item">
                    <p class="details-title">
                        <i class="bi bi-hourglass-split"></i>
                        <span :class="!timeLimit ? 'notIncluded' : ''">Time/Session Limit Tool</span>
                    </p>
                    <div class="details-text"></div>
                </div>

                <div class="details-item">
                    <p class="details-title">
                        <i class="bi bi-person-lines-fill"></i>
                        <span :class="!selfExclusion ? 'notIncluded' : ''">Self-Exclusion Tool</span>
                    </p>
                    <div class="details-text"></div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="details-item">
                    <p class="details-title">
                        <i class="bi bi-clock-history"></i>
                        <span :class="!coolOff ? 'notIncluded' : ''">Cool Off/Time-Out Tool</span>
                    </p>
                    <div class="details-text"></div>
                </div>

                <div class="details-item">
                    <p class="details-title">
                        <i class="bi bi-exclamation-diamond"></i>
                        <span :class="!realityCheck ? 'notIncluded' : ''">Reality Check Tool</span>
                    </p>
                    <div class="details-text"></div>
                </div>

                <div class="details-item">
                    <p class="details-title">
                        <i class="bi bi-person-check"></i>
                        <span :class="!selfAssessment ? 'notIncluded' : ''">Self-Assessment Test</span>
                    </p>
                    <div class="details-text"></div>
                </div>

                <div class="details-item">
                    <p class="details-title">
                        <i class="bi bi-lock"></i>
                        <span :class="!withdrawalLock ? 'notIncluded' : ''">Withdrawal Lock</span>
                    </p>
                    <div class="details-text"></div>
                </div>

                <div class="details-item">
                    <p class="details-title">
                        <i class="bi bi-person-fill-lock"></i>
                        <span :class="!wagerTool ? 'notIncluded' : ''">Self-Exclusion Register Participation</span>
                    </p>
                </div>
            </div>
        </div>

    </div>
</template>


<style scoped>
.notIncluded {
    text-decoration: line-through 1.5px grey;
    color: grey;
}
</style>