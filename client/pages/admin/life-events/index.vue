<template>
	<ui-model-search
		model-name="life-events"
		singular="Item"
		plural="Itens"
	>
		<template #table-header>
			<th data-orderby="name">Nome</th>
		</template>
		
		<template #table-row="{item}">
			<td>{{ item.name }}</td>
		</template>
	</ui-model-search>
</template>

<script>
export default {
	layout: "admin",
	middleware: ['auth', 'permission'],
	
	head() {
		return {
			title: "Buscar",
		};
	},
}
</script>