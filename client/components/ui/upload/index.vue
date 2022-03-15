<template>
    <div @click="openFileBrowser()">
        <slot>
            <button type="button" class="btn btn-outline-light w-100">
                Upload <i class="fas fa-fw fa-upload"></i>
            </button>
        </slot>
    </div>
</template>

<script>
export default {
    props: {
        value: {type:[Boolean, Object]},
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
        openFileBrowser() {
            Object.assign(document.createElement('input'), {
                type: "file",
                onchange: (ev) => {
                    this.file(ev.target.files[0]);
                },
            }).click();
        },

        file(file=null) {
            if (file!==null) {
                let r = new FileReader();
                r.onload = (ev) => {
                    this.props.value = {
                        _isFile: true,
                        name: file.name,
                        size: file.size,
                        type: file.type,
                        file: file,
                        base64: ev.target.result,
                    };
                    this.$emit('input', this.props.value);
                    this.$emit('change', this.props.value);
                };
                r.readAsDataURL(file);
            }
            return this.props.value;
        },

        clear() {
            this.props.value = false;
        },
    },
}
</script>
