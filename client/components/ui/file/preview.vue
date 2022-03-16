<template>
    <div class="bg-light text-center py-2 shadow-sm" style="position:relative; height:250px; display:flex; align-items:center; justify-content:center;">
        <div style="position:relative; width:100%; height:100%;" v-if="value && value.type=='image'">
            <img :src="`${value.url}?r=${value.updated_at}`" alt="" :style="`height:100%; max-width:300px; object-fit:cover;`">
            <!-- <img :src="`${value.url}?r=${value.updated_at}`" alt="" :style="`height:calc(100% - 40px); max-width:300px; object-fit:cover;`" v-if="value && value.type=='image'"> -->
            <!-- <div class="mt-2"><a href="javascript:;" class="btn btn-sm btn-danger" @click="$emit('update:content', '')">Remover</a></div> -->
        </div>
        
        <div :style="`font-size:30px; text-transform:uppercase;`" v-if="value && value.type!='image'">
            {{ value.ext }}
        </div>

        <div v-if="!value">Preview</div>
    </div>
</template>

<script>
export default {
    props: {
        value: {default:false, type:[Boolean, Object]},
    },
}
</script>