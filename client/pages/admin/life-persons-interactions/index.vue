<template>
	<ui-model-search
		model-name="life-persons-interactions"
		singular="Item"
		plural="Itens"
		ref="search"
	>
		<template #table-header>
			<th>De</th>
			<th></th>
			<th>Para</th>
		</template>
		
		<template #table-row="{item}">
			<td class="text-center">
				<div v-if="item.person_from">
					<nuxt-link :to="`/admin/life-persons/${item.person_from.id}`">
						<el-image :src="item.person_from.photo? item.person_from.photo: ''" fit="cover" lazy style="width:50px; height:50px; border-radius:50%;">
							<div slot="error" style="background:#ddd; height:50px;"></div>
						</el-image>
						<div class="text-center">
							{{ item.person_from.name }} ({{ item.person_from.age|numberFormat('', '', 0) }})
						</div>
					</nuxt-link>
				</div>
			</td>

			<td style="vertical-align:middle!important; text-align:center;">{{ item.name }}</td>

			<td class="text-center">
				<div v-if="item.person_to">
					<nuxt-link :to="`/admin/life-persons/${item.person_to.id}`">
						<el-image :src="item.person_to.photo? item.person_to.photo: ''" fit="cover" lazy style="width:50px; height:50px; border-radius:50%;">
							<div slot="error" style="background:#ddd; height:50px;"></div>
						</el-image>
						<div class="text-center">
							{{ item.person_to.name }} ({{ item.person_to.age|numberFormat('', '', 0) }})
						</div>
					</nuxt-link>
				</div>
			</td>
		</template>

		<template #header-actions>
			<button type="button" class="btn btn-success" @click="lifeCycle()">
				Executar ciclo de vida
			</button>
		</template>
	</ui-model-search>
</template>

<script>
export default {
	layout: "default/admin",
	middleware: "auth",
	
	head() {
		return {
			title: "Buscar",
		};
	},

	methods: {
		lifeCycle() {
			this.$axios.get('/api/life-persons/cycle').then(resp => {
				this.$refs.search.submit();
			});
		},
	},
}
</script>