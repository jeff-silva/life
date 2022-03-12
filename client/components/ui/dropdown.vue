<template>
    <div class="ui-dropdown d-inline-block" :class="`ui-dropdown-position-${position}`">
        <slot></slot>

        <transition name="el-fade-in-linear">
            <div class="ui-dropdown-dropdown bg-white shadow-sm" v-if="props.shown">
                <slot name="dropdown">
                    Ações
                </slot>
            </div>
        </transition>
    </div>
</template>

<script>
export default {
    props: {
        position: {default:'bottom'}, // top-left|top|top-right|right-top|right|right-bottom|bottom-right|bottom|bottom-left|left-bottom|left|left-top
        shown: {default:false},
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
        handleClick(ev) {
            this.props.shown = this.$el.contains(document.activeElement);
        },
    },

    mounted() {
        document.addEventListener('click', this.handleClick);
    },

    beforeDestroy() {
        document.removeEventListener('click', this.handleClick);
    },
}
</script>

<style>
.ui-dropdown {
    position: relative;
    z-index: 2;
}

.ui-dropdown-dropdown {
    position: absolute;
    z-index: 9;
}

.ui-dropdown-position-top-left .ui-dropdown-dropdown {bottom:100%; left:0; margin-bottom:10px;}
.ui-dropdown-position-top .ui-dropdown-dropdown {bottom:100%; left:50%; transform:translate(-50%, 0); margin-bottom:10px;}
.ui-dropdown-position-top-right .ui-dropdown-dropdown {bottom:100%; right:0; margin-bottom:10px;}
.ui-dropdown-position-right-top .ui-dropdown-dropdown {left:100%; top:0; margin-left:10px;}
.ui-dropdown-position-right .ui-dropdown-dropdown {left:100%; top:50%; transform:translate(0, -50%); margin-left:10px;}
.ui-dropdown-position-right-bottom .ui-dropdown-dropdown {left:100%; bottom:0; margin-left:10px;}
.ui-dropdown-position-bottom-right .ui-dropdown-dropdown {top:100%; right:0; margin-top:10px;}
.ui-dropdown-position-bottom .ui-dropdown-dropdown {top:100%; left:50%; transform:translate(-50%, 0); margin-top:10px;}
.ui-dropdown-position-bottom-left .ui-dropdown-dropdown {top:100%; left:0; margin-top:10px;}
.ui-dropdown-position-left-bottom .ui-dropdown-dropdown {right:100%; bottom:0; margin-right:10px;}
.ui-dropdown-position-left .ui-dropdown-dropdown {right:100%; top:50%; transform:translate(0, -50%); margin-right:10px;}
.ui-dropdown-position-left-top .ui-dropdown-dropdown {right:100%; top:0; margin-right:10px;}
</style>