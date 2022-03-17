<template>
	<ui-model-edit
		model-name="life-persons-interactions"
		:model-id="$route.params.id"
		singular="Item"
		plural="Itens"
		#default="{value, errorFields}"
	>
		<ui-field label="Nome" :error="errorFields.name">
			<input type="text" class="form-control" v-model="value.name">
		</ui-field>

		<ui-field label="Tipo" :error="errorFields.type">
			<input type="text" class="form-control" v-model="value.type">
		</ui-field>

		<ui-field label="De" :error="errorFields.person_from">
			<ui-model-select model-name="life-persons" v-model.numeric="value.person_from"></ui-model-select>
		</ui-field>

		<ui-field label="Para" :error="errorFields.person_to">
			<ui-model-select model-name="life-persons" v-model.numeric="value.person_to"></ui-model-select>
		</ui-field>
	</ui-model-edit>
</template>

<script>
export default {
	layout: "default/admin",
	middleware: ["auth", "permission"],
	
	head() {
		return {
			title: "Editar",
		};
	}
}
</script>