<form method="post" action="?page=product-update&id=<?= $product['id'] ?>">
<input name="name" value="<?= $product['name'] ?>" class="form-control mb-2">
<input name="price" value="<?= $product['price'] ?>" class="form-control mb-2">
<input name="image" value="<?= $product['image'] ?>" class="form-control mb-2">
<textarea name="description" class="form-control mb-2"><?= $product['description'] ?></textarea>
<button class="btn btn-warning">Cập nhật</button>
</form>
