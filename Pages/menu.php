	<div class="containerr">
		<div class="sidebar">
			<h3>Eclips Eats</h3>
			<div class="filter">
				<h3>Category Menu</h3>
				<div id="btns"></div>
			</div>
		</div>
		<div class="contant">
			<div class="header">
				<p>Eclips Eats Menu</p>
			</div>
			<div id="root"></div>
		</div>
	</div>
	

<script>
	const btns=[
	{
		id: 1,
		name: 'MAKANAN'
	},
	{
		id: 2,
		name: 'MINUMAN'
	},
	
	]
	
	const filters = [...new Set(btns.map((btn)=>
		{return btn}))]
	
	document.getElementById('btns').innerHTML=filters.map((btn)=>{
		var {name, id} = btn;
		return(
			"<button class='fil-p' onclick='filterItems("+(id)+`)'>${name}</button>`
			)
	}).join('');
	
	const product = [
		<?php 
    $menu_query = mysqli_query($koneksi, "SELECT * FROM menu");
    while ($menu = mysqli_fetch_assoc($menu_query)) {
		echo '
	

	{
		id: "<?= $menu['id']?>",
		image: "<?= $menu['gambar']?>",
		title: "<?= $menu['nama']?>",
		deskripsi: "<?= $menu['deskripsi']?>",
		price: "<?= $menu['harga']?>",
		category: "<?= $menu['kategori']?>"
	}
	'}
	?>
	];
	
	const categories = [...new Set(product.map((item)=>
		{return item}))]
	
	const filterItems = (a)=>{
		const flterCategories = categories.filter(item);
		function item(value){
			if(value.id==a){
				return(
					value.id
					)
			}
		}
		displayItem(flterCategories)
	}
	
	
	const displayItem = (items) => {
		document.getElementById('root').innerHTML = items.map((item)=>
		{
			var {image, title, price,deskripsi} = item;
			return(
				`<div class='box'>
				<h3>${title}</h3>
				<div class='img-box'>
				<img class='images' src=${image}></img>
				</div><p>${deskripsi} </p>
				<div class='bottom'>
				
				<h2>Rp. ${price}.000</h2>
				</div>
				</div>`)
		}).join('');
	}
	displayItem(categories);
</script>
	</body>