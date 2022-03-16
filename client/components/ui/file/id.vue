<template>
    <div>
        
        <div class="d-flex">
            <div class="flex-grow-1">
                <button type="button" class="btn btn-light w-100" @click="fileBrowser()">
                    {{ file? file.name: 'Upload' }}
                </button>
            </div>

            <div class="ms-2" v-if="props.file">
                <a :href="props.file.url" :download="`${props.file.name}.${props.file.ext}`" class="btn btn-light w-100">
                    <i class="fas fa-fw fa-download"></i>
                </a>
            </div>

            <div class="ms-2" v-if="props.file">
                <button type="button" class="btn btn-light w-100" @click="props.file=false">
                    <i class="fas fa-fw fa-times"></i>
                </button>
            </div>
        </div>

        <div class="mt-2" style="border:dashed 5px #eee; height:250px; display:flex; align-items:center; justify-content:center;">
            <div v-if="props.file" style="position:relative; height:90%;">
                <img :src="props.file.url" alt="" style="height:100%; max-width:300px; object-fit:cover;" v-if="props.file.type=='image'">
            </div>

            <div v-else>Arraste e solte o arquivo aqui</div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        value: {default:false, type:[Boolean, Number, String]},
        file: {default:false, type:[Boolean, Object]},
    },

    watch: {
        $props: {deep:true, handler(value) {
            if (this.__preventRecursive) return;
            this.props = JSON.parse(JSON.stringify(value));
            this.fileFind();
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
        fileFind() {
            if (! +this.props.value || this.props.file) return;
            this.$axios.get(`/api/files/find/${this.props.value}`).then(resp => {
                this.props.file = resp.data;
            });
        },

        fileBrowser() {
            Object.assign(document.createElement('input'), {
                type: "file",
                onchange: (ev) => {
                    let file = ev.target.files[0];
                    let data = new FormData();
                    data.append('name', file.name.split('.').shift());
                    data.append('content', file);
                    this.$axios.post('/api/files/save', data).then(resp => {
                        this.props.value = resp.data.id;
                        this.props.file = resp.data;
                    });
                },
            }).click();;
        },
    },
}
</script>