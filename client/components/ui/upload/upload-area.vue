<template>
    <div>
        <div class="d-flex">
            <div class="flex-grow-1">
                <ui-upload v-model="props.value" ref="upload" @change="$emit('input', $event)"></ui-upload>
            </div>

            <div class="ms-2" v-if="props.url">
                <button type="button" class="btn btn-light" @click="props.url=''; $refs.upload.clear();">
                    <i class="fas fa fa-fw fa-times"></i>
                </button>
            </div>
        </div>

        <div class="mt-2 py-2" style="text-align:center; background:#eee;" v-if="props.url">
            <img :src="props.url" alt="" style="object-fit:cover; height:200px; max-width:50%; margin:0 auto;">
        </div>

        <div v-else class="mt-2" @dragover.prevent @drop.prevent="$refs.upload.file($event.dataTransfer.files[0])"
            style="border:dashed 5px #ddd; display:flex; align-items:center; justify-content:center; height:200px;"
        > Upload </div>
    </div>
</template>

<script>
export default {
    props: {
        value: {type:[Boolean, Object]},
        url: {default:""},
    },

    watch: {
        $props: {deep:true, handler(value) {
            if (this.__preventRecursive) return;
            this.props = JSON.parse(JSON.stringify(value));
        }},

        props: {deep:true, handler(value) {
            this.__preventRecursive = true;
            this.$emit('input', value.value||false);
            for(let i in value) { this.$emit(`update:${i}`, value[i]); }
            setTimeout(() => { this.__preventRecursive = false; }, 10);
        }},
    },

    data() {
        return {
            props: JSON.parse(JSON.stringify(this.$props)),
        };
    },
}
</script>
