<?= $this->extend("./layouts/default.php"); ?>

<?= $this->section("body") ?>

<section class="text-gray-600 body-font">
  <div class=" p-5 ">
    <div class="grid grid-cols-4 gap-5">
        <?php if ($products): ?>
        <?php foreach($products as $product): ?>
            <a href="/<?=$product["id"];?>" class="flex items-center justify-center flex-col my-4 hover:shadow py-9 p-3 rounded-md">
                <img alt="ecommerce" class="h-44 block" src="data:image/jpeg;base64,<?php echo base64_encode($product['image']); ?>">
                <div class="mt-4">
                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">WATCH</h3>
                    <h2 class="text-gray-900 title-font text-lg font-medium"><?php echo $product["name"] ?></h2>
                    <p class="mt-1">₹<?php echo $product["price"] ?></p>
                </div>
            </a>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
