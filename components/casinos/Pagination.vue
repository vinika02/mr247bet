<script setup>

</script>

<template>
    <div class="category-pagination mt-4">
        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</template>


<style scoped>
.active>.page-link,
.page-link.active {
    background-color: #ff4f30;
    border-color: #ff6b4c;
    color: #ffff;
}

.disabled .page-link {
    color: #000000
}

.page-link {
    color: #ff4f30
}
</style>