<template>
    <div class="d-flex">
        <div class="flex-grow-1">
            <button type="button" class="btn btn-light w-100" @click="fileBrowser()">
                <div v-if="props.value">{{ props.value.name }}</div>
                <div v-else><i class="fas fa-fw fa-upload"></i> Upload</div>
            </button>
        </div>

        <div class="ms-2" v-if="props.value">
            <button type="button" class="btn btn-light w-100" @click="props.value=false">
                <i class="fas fa-fw fa-times"></i>
            </button>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        value: {default:false, type:[Boolean, Object]},
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

    methods: {
        fileBrowser() {
            Object.assign(document.createElement("input"), {
                type: "file",
                onchange: (ev) => {
                    let file = ev.target.files[0];
                    var r = new FileReader();
                    r.readAsDataURL(file);
                    r.onload = () => {
                        this.props.value = {
                            name: file.name,
                            ext: file.name.split(".").pop(),
                            type: file.type,
                            base64: r.result,
                        };
                        this.$emit('input', this.props.value);
                    };
                },
            }).click();
        },
    },
}
</script>