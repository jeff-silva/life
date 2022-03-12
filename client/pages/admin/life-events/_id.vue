<template>
	<ui-model-edit
		model-name="life-events"
		:model-id="$route.params.id"
		singular="Item"
		plural="Itens"
		#default="{value, errorFields}"
	>
		<ui-field label="Nome" :error="errorFields.name">
			<input type="text" class="form-control" v-model="value.name">
		</ui-field>
		
		<ui-field label="Texto interação" :error="errorFields.interaction_line">
			<input type="text" class="form-control" v-model="value.interaction_line">
		</ui-field>
		
		<ui-field label="Chance de erro" :error="errorFields.chance">
			<input type="number" class="form-control" v-model="value.chance">
		</ui-field>
		
		<ui-field label="Código" :error="errorFields.eval">
			<ui-code v-model="value.eval"></ui-code>
		</ui-field>
	</ui-model-edit>
</template>

<script>
export default {
	layout: "default/admin",
	middleware: "auth",
	
	head() {
		return {
			title: "Editar",
		};
	},
}
</script>