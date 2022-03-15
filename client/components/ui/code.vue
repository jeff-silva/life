<template>
    <div style="overflow:hidden;">
        <div ref="monaco" style="width:100%; height:150px;"></div>
    </div>
</template>

<script>
import * as monaco from 'monaco-editor/esm/vs/editor/editor.api';

export default {
    props: {
        value: [Boolean, String],
        language: {default: "html"},
        theme: {default: "vs-dark"},
    },

    data() {
        return {
            props: JSON.parse(JSON.stringify(this.$props)),
            monaco: false,
        };
    },

    watch: {
        $props: {deep:true, handler(value) {
            if (this.__preventRecursive) return;
            this.props = JSON.parse(JSON.stringify(value));
            this.setValue(this.props.value||"");
        }},

        props: {deep:true, handler(value) {
            this.__preventRecursive = true;
            this.$emit('input', value.value||false);
            for(let i in value) { this.$emit(`update:${i}`, value[i]); }
            setTimeout(() => { this.__preventRecursive = false; }, 10);
        }},
    },
    
    methods: {
        monacoInit() {
            setTimeout(() => {
                let target = this.$refs.monaco;

                this.monaco = monaco.editor.create(target, {
                    value: (this.props.value || ""),
                    language: this.props.language,
                    theme: this.props.theme,
                    automaticLayout: true,
                });

                this.monaco.getModel().onDidChangeContent(evt => {
                    this.props.value = this.monaco.getModel().getValue();
                });

                this.monaco.getModel().setValue(this.props.value);
            }, 100);
        },

        setValue(value) {
            if (this.$el.contains(document.activeElement)) return;
            this.monaco.getModel().setValue(value);
        },
        
        getValue() {
            return this.props.value = this.monaco.getModel().getValue();
        },

        resizeHandler() {
            this.monaco.layout({width:0});
        },
    },
    
    mounted() {
        this.monacoInit();
        window.addEventListener('resize', this.resizeHandler);
    },

    beforeDestroy() {
        window.removeEventListener('resize', this.resizeHandler);
    },
}
</script>