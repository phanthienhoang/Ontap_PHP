<h2>Cập nhật thông tin khách hàng</h2>
<form method="post" action="./index.php?page=edit">
  <input type="hidden" name="productName" value="<?php echo $product->productName; ?>"/>
  <div class="form-group">
                  <label>Tên sản phẩm</label>
                  <input type="text" class="form-control" name="productName" value="<?php echo $product->productName; ?>">
              </div>
              <div class="form-group">
                  <label>Dòng sản phẩm</label>
                  <input type="text" class="form-control" name="productLine" value="<?php echo $product->productLine; ?>">
              </div>
              <div class="form-group">
                  <label>Nhà sãn xuất</label>
                  <input type="text" class="form-control" name="productVendor"  value="<?php echo $product->productVendor; ?>">
              </div>
              <div class="form-group">
                  <label>Mô tả</label>
                  <input type="text" class="form-control" name="description" value="<?php echo $product->description; ?>">
              </div>
              <div class="form-group">
                  <label>Số lượng</label>
                  <input type="smallint" class="form-control" name="quantity" value="<?php echo $product->quantity; ?>">
              </div>
              <div class="form-group">
                  <label>giá nhập</label>
                  <input type="decimal" class="form-control" name="price" value="<?php echo $product->price; ?>">
              </div>
      <input type="submit" value="Update" class="btn btn-primary"/>
      <a href="index.php" class="btn btn-default">Cancel</a>
  </div>
</form>