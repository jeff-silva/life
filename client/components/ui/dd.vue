<template>
    <div class="bg-dark d-flex text-success border">
        <div class="p-2 border-end" style="min-width:80px; max-width:80px;">
            <div class="text-capitalize">{{ _type.name }}:</div>
            <div v-if="_type.size">size: {{ _type.size }}</div>
            <div v-if="_type.nameIs(['array', 'object'])">
                <a href="javascript:;" class="text-success" @click="showAll=!showAll">
                    {{ showAll? 'Menos [-]': 'Mais [+]' }}
                </a>
            </div>
        </div>

        <!-- boolean, number, string -->
        <div class="flex-grow-1 p-2" v-if="_type.nameIs(['boolean', 'number', 'string'])">
            {{ value }}
        </div>

        <!-- others -->
        <div class="flex-grow-1 p-2" v-else>
            <pre class="m-0 p-0" :style="'max-width:900px; overflow-x:visible;'+ (showAll? '': 'overflow-y:auto; max-height:50px;')">{{ value }}</pre>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        value: {default:false, type:[Boolean, Number, String, Array, Object]},
    },

    data: () => ({
        showAll: true,
    }),

    computed: {
        _type() {
            let name = (Array.isArray(this.value)? 'array': typeof this.value);
            let size = ['string', 'array'].indexOf(name) >=0? this.value.length: 0;
            let nameIs = names => names.indexOf(name) >=0;

            return { name, size, nameIs };
        },
    },
}
</script>