<?php
	$products = empty($filteredProducts) ? $products : $filteredProducts;
?>
<section class="bg-white py-8 max-w-7xl mx-auto">
	<div class="flex items-center flex-wrap pt-4 pb-12">
		<div class="w-full z-30 top-0 px-6 py-1">
			<div class="w-full mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
				<span class="flex items-center gap-2 uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">
					Nos produits
				</span>

				<div class="flex items-center gap-12" id="store-nav-content">
					<span class="pl-3 inline-block no-underline font-regular">
						<?= count($products); ?> produits trouvés
					</span>
					<form action="/" method="get" class="flex items-center">
						<input 
							type="text"
							name="filter"
							class="border border-gray-200 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
							placeholder="Rechercher"
						/>
						<button type="submit"
							class="pl-3 inline-block no-underline hover:text-black" 
							href="#"
						>
							<svg class="fill-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z" />
							</svg>
						</button>
					</form>
				</div>
			</div>
			<?php if (!empty($filteredProducts)) { ?>
			<a href="/" class="flex items-center gap-3">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
					<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
				</svg>
				Retour
			</a>
			<?php } ?>
		</div>

		
		<?php 
			foreach ($products as $product) {
		?>
		<div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
			<a href="#">
				<img 
					class="hover:grow hover:shadow-lg" 
					src="<?= $product['image'] ;?>">
				<div class="pt-3 flex items-center justify-between">
					<p class=""><?= $product['name'] ;?></p>
					<a href="?add=<?= $product['id']; ?>" class="">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
							<path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
						</svg>
					</a>
				</div>
				<p class="pt-1 text-gray-900"><?= $product['price'] ;?> €</p>
			</a>
		</div>
		<?php } ?>
	</div>
</section>