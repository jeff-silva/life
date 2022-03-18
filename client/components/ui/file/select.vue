<template>
    <div class="d-flex border shadow-sm">
        <div class="border-end p-2 bg-light" style="min-width:200px; max-width:200px;">
            <div>Filtro</div>
            <div>Upload</div>
            <div>Pastas</div>
        </div>

        <div class="flex-grow-1">
            <div class="bg-white p-1" style="max-height:400px; overflow:auto;">
                <div class="d-inline-block m-2" v-for="i in 30">
                    <div class="d-flex align-items-center justify-content-center border p-3" style="width:150px; height:150px;">
                        Item {{ i }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        value: {default:""},
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
            this.photoFind();
        }},
    },

    data() {
        return {
            file: false,
            props: JSON.parse(JSON.stringify(this.$props)),
        };
    },

    methods: {
        photoFind() {
            if (!this.props.value) return;
            this.$axios.get(`/api/files/find/${this.props.value}`).then(resp => {
                this.file = resp.data;
            });
        },

        photoRemove() {
            this.$confirm('Deseja remover arquivo?').then(resp => {
                this.props.value = '';
                this.file = false;
            });
        },
    },

    mounted() {
        this.photoFind();
    },
}
</script>