<template>
    <div>
        <ui-field label="Position">
            <select class="form-control" v-model="bind.position">
                <option :value="p" v-for="p in positions">{{ p }}</option>
            </select>
        </ui-field>

        <ui-field label="Preview">
            <ui-playground :value="_code"></ui-playground>
        </ui-field>
    </div>
</template>

<script>
export default {
    data() {
        return {
            positions: "top-left|top|top-right|right-top|right|right-bottom|bottom-right|bottom|bottom-left|left-bottom|left|left-top".split("|"),
            bind: {
                position: "bottom-left",
            },
        };
    },

    computed: {
        _code() {
            return [
                `<ui-dropdown position="${this.bind.position}" :shown="true">`,
                `\t<button type="button" class="btn btn-primary">`,
                `\t\tDropdown`,
                `\t</button>`,
                `\t`,
                `\t<template #dropdown>`,
                `\t\t<div class="p-2" style="width:150px;">`,
                `\t\t\t<div>Big</div>`,
                `\t\t\t<div>Content</div>`,
                `\t\t\t<div>Example</div>`,
                `\t\t</div>`,
                `\t</template>`,
                `</ui-dropdown>`,
            ].join("\n");
        },
    },
}
</script>