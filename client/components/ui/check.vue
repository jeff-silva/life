<template>
    <label>
        <input :type="type"
            :class="`ui-check ui-check-${type}`"
            :style="`--ui-check-color:${color};`"
        >
        <slot></slot>
    </label>
</template>

<script>
export default {
    props: {
        type: {default:"checkbox"},
        color: {default:"var(--bs-primary)"},
    },
}
</script>

<style>
.ui-check {
    position: relative;
    appearance: none;
    outline: solid 3px var(--ui-check-color);
    border: solid 3px #fff;
    width: 16px;
    height: 16px;
    cursor: pointer;
    background: #fff;
    opacity: .8;
}

.ui-check:checked {
    background: var(--ui-check-color);
}

.ui-check-checkbox {}

.ui-check-radio {
    border-radius: 50%;
}
</style>