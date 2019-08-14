<h1>Bạn chắc chắn muốn xóa sản phẩm</h1>
<h3><?php echo $product->productName . ' '.'?'; ?></h3>
<form action="./index.php?page=delete" method="post">
  <input type="hidden" name="productName" value="<?php echo $product->productName; ?>"/>
  <div class="form-group">
      <input type="submit" value="delete" class="btn btn-danger"/>
      <a class="btn btn-default" href="index.php">Cancel</a>
  </div>
</form>