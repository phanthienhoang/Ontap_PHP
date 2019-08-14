<h2>Danh sách sản phẩm</h2>
<a href="./index.php?page=add">Thêm mới</a>
<!-- <table class="table">
  <thead>
  <tr>
      <th>Mã sản phẩm</th>
      <th>Tên sản phẩm</th>
      <th>Dòng sản phẩm</th>
      <th>Nhà sản xuất</th>
      <th>Mô tả</th>
      <th>Số lượng</th>
      <th>Giá</th>
  </tr> -->
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Mã sản phẩm</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Dòng sản phẩm</th>
      <th scope="col">Nhà Phát Hành</th>
      <th scope="col">Mô tả</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Giá</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  </thead>
  <tbody>
  <?php foreach ($array as $key => $product): ?>
    <tr>
      <th scope="row"><?php echo $key ?></th>
      <td><?php echo $product->productName ?></td>
      <td><?php echo $product->productLine ?></td>
      <td><?php echo $product->productVendor ?></td>
      <td><?php echo $product->description ?></td>
      <td><?php echo $product->quantity ?></td>
      <td><?php echo $product->price ?>VND</td>
      <td> <a href="./index.php?page=delete&id=<?php echo $product->productName; ?>" class="btn btn-warning btn-sm">Delete</a>
      <a href="./index.php?page=edit&id=<?php echo $product->productName; ?>" class="btn btn-warning btn-sm">Update</a>
      </td> 
    </tr>  
  <?php endforeach; ?> 
  </tbody> 
</table>