<template>
    <div>
        Dashboard
        <pre>{{ $route.name }}</pre>
    </div>
</template>

<script>
export default {
    layout: "default/admin",
    middleware: ["auth"],
}
</script>