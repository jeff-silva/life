<template>
    <ui-file @file-get="fileUpload=$event" @file-clear="fileUpload=false">
        <template #actions v-if="fileUpload">
            <div class="ms-2">
                <button type="button" class="btn btn-success" @click="upload()">
                    <i class="fas fa-fw fa-upload"></i>
                </button>
            </div>
        </template>

        <template #preview="{ value, previewHeight }" v-if="props.file">
            <div v-if="props.file && props.file.type=='image'">
                <img :src="props.file.url" alt="" :style="`height:${previewHeight}; max-width:300px; object-fit:cover;`">
            </div>
            <div v-else style="font-size:30px; text-transform:uppercase;">{{ props.file.ext }}</div>
        </template>
    </ui-file>
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
            fileUpload: false,
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

        upload() {
            if (!this.fileUpload) return;
            let data = new FormData();
            data.append('content', this.fileUpload);
            this.$axios.post('/api/files/save', data).then(resp => {
                this.props.value = resp.data.id;
                this.props.file = resp.data;
                this.fileUpload = false;
            });
        },

        // fileBrowser() {
        //     Object.assign(document.createElement('input'), {
        //         type: "file",
        //         onchange: (ev) => {
        //             let file = ev.target.files[0];
        //             let data = new FormData();
        //             data.append('name', file.name.split('.').shift());
        //             data.append('content', file);
        //             this.$axios.post('/api/files/save', data).then(resp => {
        //                 this.props.value = resp.data.id;
        //                 this.props.file = resp.data;
        //             });
        //         },
        //     }).click();;
        // },
    },

    mounted() {
        this.fileFind();
    },
}
</script>