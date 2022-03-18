<template>
	<ui-model-edit
		model-name="life-persons"
		:model-id="$route.params.id"
		singular="Item"
		plural="Itens"
		#default="{value, errorFields}"
	>
		<ui-field label="Foto" :error="errorFields.photo">
			<img :src="value.photo" alt="">
		</ui-field>

		<ui-field label="Nome" :error="errorFields.name">
			<input type="text" class="form-control" v-model="value.name">
		</ui-field>

		<ui-field label="Pai" :error="errorFields.father_id">
			<ui-model-select model-name="life-persons" v-model.numeric="value.father_id"></ui-model-select>
		</ui-field>
		
		<ui-field label="Mãe" :error="errorFields.mother_id">
			<ui-model-select model-name="life-persons" v-model.numeric="value.mother_id"></ui-model-select>
		</ui-field>
		
		<ui-field label="Mundo" :error="errorFields.world_id">
			<ui-model-select model-name="life-worlds" v-model.numeric="value.world_id"></ui-model-select>
		</ui-field>

		<pre>{{ value }}</pre>
	</ui-model-edit>
</template>

<script>
export default {
	layout: "admin",
	middleware: ["auth", "permission"],
	
	head() {
		return {
			title: "Editar",
		};
	}
}
</script>