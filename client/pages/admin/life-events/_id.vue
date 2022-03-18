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

		<ui-field label="Tipo (slug)" :error="errorFields.slug">
			<input type="text" class="form-control" v-model="value.slug">
		</ui-field>
		
		<ui-field label="Texto sucesso interação" :error="errorFields.text_success">
			<template #info>Um texto por linha. O texto será escolhido aleatoriamente.</template>
			<textarea class="form-control" v-model="value.text_success"></textarea>
		</ui-field>
		
		<ui-field label="Texto erro interação" :error="errorFields.text_error">
			<template #info>Um texto por linha. O texto será escolhido aleatoriamente.</template>
			<textarea class="form-control" v-model="value.text_error"></textarea>
		</ui-field>
		
		<ui-field label="Chance de erro" :error="errorFields.chance">
			<template #info>
				<div v-if="value.chance">{{ $helpers.numberFormat(100/value.chance, 1) }}% &nbsp; (1 em {{ value.chance }})</div>
				<div v-else>100%</div>
			</template>
			<input type="number" class="form-control" v-model.number="value.chance">
		</ui-field>
		
		<ui-field label="Código" :error="errorFields.eval">
			<ui-code v-model="value.eval" language="php"></ui-code>
			<div class="text-end mt-1">
				<button type="button" class="btn btn-primary" @click="lifeEventsTest()">
					Testar
				</button>
			</div>
			<pre class="mt-2 bg-light p-3 shadow-sm" v-if="testResp">{{ testResp }}</pre>
		</ui-field>
	</ui-model-edit>
</template>

<script>
export default {
	layout: "admin",
	middleware: ['auth', 'permission'],
	
	head() {
		return {
			title: "Editar",
		};
	},

	data() {
		return {
			testResp: false,
		};
	},

	methods: {
		lifeEventsTest() {
			if (!+this.$route.params.id) return;
			this.$axios.get(`/api/life-events/test/${this.$route.params.id}`).then(resp => {
				this.testResp = resp.data;
			});
		},
	},
}
</script>