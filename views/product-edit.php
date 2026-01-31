<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cập nhật sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<h2>Cập nhật sinh viên</h2>

<form method="post" action="index.php?page=product-update">
    <input type="hidden" name="id" value="<?= $product['id'] ?>">
    <input name="fullname" value="<?= $product['fullname'] ?>" class="form-control mb-2">
    <input name="student_code" value="<?= $product['student_code'] ?>" class="form-control mb-2">
    <input name="email" value="<?= $product['email'] ?>" class="form-control mb-2">
    <button class="btn btn-primary">Cập nhật</button>
</form>

</body>
</html>
