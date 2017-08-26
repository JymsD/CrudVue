@extends('template.main')

@section('title', 'Home')
@section('content')
<div class="container">
	<div class="columns text-center vertical-center">
		<div class="columns">
			Zona de pruebas
		</div>
	</div class="columns">
	 	<div class="columns is-2">
	 		<aside class="menu">
	 			<p class="menu-label">
	 				Menu Principal
	 			</p>
	 			<ul class="menu-list">
	 				<li @click="menu=0" class="hand-option">
	 					<a href="" :class="{'is-active' : menu==0}">Dashboard</a>
	 				</li>
	 				<li @click="menu=1" class="hand-option">
	 					<a href="" :class="{'is-active' : menu==1}">Departamentos</a>
	 				</li>
	 				<li @click="menu=2" class="hand-option">
	 					<a href="" :class="{'is-active' : menu==2}">Cargos</a>
	 				</li>
	 				<li @click="menu=3" class="hand-option">
	 					<a href="" :class="{'is-active' : menu==3}">Empleados</a>
	 				</li>
	 			</ul>
	 		</aside>
	 	</div>
	 	<div class="columns personal-content" v-if="menu==0">
	 		<div class="columns text-center">
	 			<div class="columns">
	 				<h3>Dashboard</h3>
	 			</div>
	 		</div>
	 		<div class="columns text-center">
	 			<div class="columns">
	 				<h1>Bienvenido</h1>
	 			</div>
	 		</div>
	 	</div>
	 	<div class="columns personal-content" v-if="menu==1">
	 		<div class="columns text-center">
	 			<div class="columns">
	 				<h3>Departamento</h3>
	 			</div>
	 		</div>
	 		<div class="columns text-center">
	 			<div class="columns">
	 				Tabla de departamentos
	 			</div>
	 		</div>
	 	</div>
	 	<div class="columns personal-content" v-if="menu==2">
	 		<div class="columns text-center">
	 			<div class="columns">
	 				<h3>Cargos</h3>
	 			</div>
	 		</div>
	 		<div class="columns text-center">
	 			<div class="columns">
	 				Tabla de cargos
	 			</div>
	 		</div>
	 	</div>
	 	<div class="columns personal-content" v-if="menu==3">
	 		<div class="columns text-center">
	 			<div class="columns">
	 				<h3>Empleados</h3>
	 			</div>
	 		</div>
	 		<div class="columns text-center">
	 			<div class="columns">
	 				Tabla de empleados
	 			</div>
	 		</div>
	 	</div>
	<div class="columns text-center vertical-center personal-menu">
		<div class="columns">Empleados 0</div>
		<div class="columns">Departamentos 0</div>
		<div class="columns">cargos 0</div>
	</div>
</div>
@endsection
@section('script')
<script>
	let elemento = new Vue({
		el: 'app',
		data: {
			menu: 0
		}
	});
</script>
@endsection