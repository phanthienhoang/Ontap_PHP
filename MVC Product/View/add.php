<?php
    if(isset($message)){
    echo "<p class='alert-info'>$message</p>";
    }
    $error = array();
    $data = array();
    if(!empty($_POST['contact_action'])){
        $data['productName'] = isset($_POST['productName']) ? $_POST['productName'] : '';
        if (empty($data['productName'])){
            $error['productName'] = 'Bạn chưa nhập tên';
        }
    }
?>
<div class="col-12 col-md-12">
  <div class="row">
      <div class="col-12">
          <h1>Thêm mới sản phẩm</h1>
      </div>
      <div class="col-12">
          <form method="POST">
              <div class="form-group">
                  <label>Tên sản phẩm</label>
                  <input type="text" class="form-control" name="productName" value="<?php echo isset($data['productName']) ? $data['productName'] : ''; ?>"  required>
                  <?php echo isset($error['productName']) ? $error['productName'] : ''; ?>
              </div>
              <div class="form-group">
                  <label>Dòng sản phẩm</label>
                  <input type="text" class="form-control" name="productLine"   required>
              </div>
              <div class="form-group">
                  <label>Nhà sãn xuất</label>
                  <input type="text" class="form-control" name="productVendor"  required>
              </div>
              <div class="form-group">
                  <label>Mô tả</label>
                  <input type="text" class="form-control" name="description" required>
              </div>
              <div class="form-group">
                  <label>Số lượng</label>
                  <input type="smallint" class="form-control" name="quantity" required>
              </div>
              <div class="form-group">
                  <label>giá </label>
                  <input type="decimal" class="form-control" name="price" required>
              </div>
              <button type="submit" class="btn btn-primary">Thêm mới</button>
                <a href="index.php" class="btn btn-primary">Hủy</a>
          </form>       
     </div>   
   </div> 
</div> 