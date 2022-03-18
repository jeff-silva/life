<template>
	<ui-model-edit
		model-name="life-worlds"
		:model-id="$route.params.id"
		singular="Item"
		plural="Itens"
		#default="{value, errorFields}"
	>
		<ui-field label="Nome" :error="errorFields.name">
			<input type="text" class="form-control" v-model="value.name">
		</ui-field>

		<ui-field label="Quanto dura um ano neste mundo?" :error="errorFields.year_seconds">
			<select class="form-control" v-model="value.year_seconds">
				<option value="">Selecione</option>
				<option :value="60">1 minuto</option>
				<option :value="60*5">5 minutos</option>
				<option :value="60*10">10 minutos</option>
				<option :value="60*30">30 minutos</option>
				<option :value="60*60">1 hora</option>
				<option :value="60*60*2">2 horas</option>
				<option :value="60*60*24">1 dia</option>
				<option :value="60*60*24*7">1 semana</option>
				<option :value="60*60*24*30">30 dias</option>
			</select>
		</ui-field>
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
	},
}
</script>