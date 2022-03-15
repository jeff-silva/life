<template>
    <form action="" @submit.prevent="submit()">
        <slot :loading="loading" :response="response" :error="error" :error-fields="errorFields"></slot>
    </form>
</template>

<script>
export default {
    props: {
        value: [Boolean, Object],
        method: {default:"get"},
        action: {default:""},
        mountedSubmit: {default:false, type:Boolean},
        successText: {default:""},
    },

    data() {
        return {
            loading: false,
            response: false,
            error: false,
            errorFields: {},
        };
    },

    methods: {
        submit() {
            let method=this.method, url=this.action, data=null, params=null;
            let headers = {'Content-Type': 'multipart/form-data'};

            if (this.method=="post") {
                data = new FormData();
                for(let name in this.value) {
                    let value = this.value[name];

                    if (value && typeof value=="object" && value._isFile) {
                        let arr = value.base64.split(','),
                            mime = arr[0].match(/:(.*?);/)[1],
                            bstr = atob(arr[1]), 
                            n = bstr.length, 
                            u8arr = new Uint8Array(n);

                        while(n--){
                            u8arr[n] = bstr.charCodeAt(n);
                        }
                        
                        value = new File([u8arr], value.name, {type:value.type});

                        // let content = atob(value.base64.split(',')[1]);
                        // console.log(value.name, value.type, content);
                        // value = new File([content], value.name, {type:value.type});
                    }

                    data.append(name, value);
                }
            }
            else {
                params = this.value;
            }

            this.loading = true;
            this.error = false;
            this.errorFields = {};
            
            let axios = this.$axios({ method, url, data, params, headers }).then(resp => {
                let respData = this.parseResponseData(resp.data);
                this.loading = false;
                this.response = respData;
                this.$emit('success', respData);
                this.$emit('response', respData);
                if (this.successText) {
                    this.$swal.fire(this.successText);
                }
            }).catch(err => {
                let respData = this.parseResponseData(err.response.data);
                this.loading = false;
                this.error = respData.message;
                this.errorFields = respData.fields;
                this.$emit('error', respData);
                this.$emit('response', respData);
            });

            return axios;
        },

        parseResponseData(respData) {
            ['per_page', 'page'].forEach(attr => {
                if (typeof respData[attr]=="string") {
                    respData[attr] = parseInt(respData[attr]);
                }
            });

            return respData;
        },
    },

    mounted() {
        if (this.mountedSubmit) {
            this.submit();
        }
    }
}
</script>