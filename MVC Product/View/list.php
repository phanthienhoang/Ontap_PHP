<h2>Danh sách sản phẩm</h2>
<a href="./index.php?page=add">Thêm mới</a>
<table class="table">
  <thead>
  <tr>
      <th>Mã sản phẩm</th>
      <th>Tên sản phẩm</th>
      <th>Dòng sản phẩm</th>
      <th>Nhà sản xuất</th>
      <th>Mô tả</th>
      <th>Số lượng</th>
      <th>Giá</th>
  </tr>
  </thead>
  <tbody>
  <?php foreach ($array as $key => $product): ?>
  <tr>
      <td><?php echo $product->id ?></td>
      <td><?php echo $product->productName ?></td>
      <td><?php echo $product->productLine ?></td>
      <td><?php echo $product->productVendor ?></td>
      <td><?php echo $product->description ?></td>
      <td><?php echo $product->quantity ?></td>
      <td><?php echo $product->price ?>VND</td>
     
  <?php endforeach; ?> 
  </tbody>
</table>