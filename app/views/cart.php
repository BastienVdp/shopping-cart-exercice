<div class="flex flex-col mx-auto max-w-7xl p-6 space-y-4 sm:p-10 dark:bg-gray-900 dark:text-gray-100">
	<h2 class="text-xl font-semibold">Mon panier</h2>
	<?php if (empty($cart)) { ?>
		<p class="text-lg">Votre panier est vide.</p>
	<?php } else { ?>
	<ul class="flex flex-col divide-y divide-gray-700">
		<?php 
			foreach($cart as $item) {
		?>
		<li class="flex flex-col py-6 sm:flex-row sm:justify-between">
			<div class="flex w-full space-x-2 sm:space-x-4">
			<img 
				class="flex-shrink-0 object-cover w-20 h-20 dark:border-transparent rounded outline-none sm:w-32 sm:h-32 dark:bg-gray-500" 
				src="<?= $item['image']; ?>" 
				alt="<?= $item['name']; ?>"
			>
				<div class="flex flex-col justify-between w-full pb-4">
					<div class="flex justify-between w-full pb-2 space-x-2">
						<div class="space-y-1">
							<h3 class="text-lg font-semibold leading-snug sm:pr-8"><?= $item['name']; ?> (<?= $item['quantity']; ?>)</h3>
							<p class="text-sm dark:text-gray-400"><?= $item['description']; ?></p>
						</div>
						<div class="text-right">
							<p class="text-lg font-semibold"><?= $item['price']?>€</p>
						</div>
					</div>
					<div class="text-sm">
						<a href="?remove=<?= $item['id']; ?>" type="button" class="flex items-center px-2 py-1 pl-0 space-x-1 text-red-400">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 fill-current">
								<path d="M96,472a23.82,23.82,0,0,0,23.579,24H392.421A23.82,23.82,0,0,0,416,472V152H96Zm32-288H384V464H128Z"></path>
								<rect width="32" height="200" x="168" y="216"></rect>
								<rect width="32" height="200" x="240" y="216"></rect>
								<rect width="32" height="200" x="312" y="216"></rect>
								<path d="M328,88V40c0-13.458-9.488-24-21.6-24H205.6C193.488,16,184,26.542,184,40V88H64v32H448V88ZM216,48h80V88H216Z"></path>
							</svg>
							<span>Supprimer</span>
						</a>
					</div>
				</div>
			</div>
		</li>
		<?php } ?>
	</ul>
	<?php } ?>
	<div class="space-y-1 text-right">
		<p>Total:
			<span class="font-semibold"><?= $totalCart; ?> €</span>
		</p>
	</div>
	<div class="flex justify-end space-x-4">
		<a href="/" class="px-6 py-2 border rounded-md dark:border-violet-400">
			Retour <span class="sr-only sm:not-sr-only">au catalogue</span>
		</a>
		<a href="?checkout" class="px-6 py-2 border rounded-md dark:bg-violet-400 dark:text-gray-900 dark:border-violet-400">
			Valider <span class="sr-only sm:not-sr-only">ma commande</span>
		</a>
	</div>

</div>