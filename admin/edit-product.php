<?php 
include("inc/conn.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  # code...
  $id_pro = $_GET['ingres_field_precision(result, index)'];
  $name_pro= $_POST['name_pro'];
  $singer = $_POST['singer'];
  $content = $_POST['content'];
  $price_out = $_POST['price_out'];
  $lyric = $_POST['lyric'];
  $quantity = $_POST['quantity'];
  $created_at = $_POST['created_at'];
  $created_by = $_POST['created_by'];
  $album = $_POST['id_album'];
  $genre = $_POST[' id_genre'];

  $file = $_FILES['image_link'];
  if (!empty($file)) {
    # code...
    $tenFile = rand().$file['name_pro'];
    if (move_uploaded_file($file['tmp_name'], "../img/".$tenFile)) {
      # code...
      $sql = "UPDATE product SET image_link = ? WHERE id_pro = ?";
      $stmt = mysqli_prepare($conn, $sql);
      mysqli_stmt_bind_param($stmt, "sd", $tenFile, $id);
      echo "Image update success <br>";
    }
    else
    {
      echo "Image update error <br>";
    }
  }

  $file = $_FILES['sound_link'];
  if (!empty($file)) {
    # code...
    $tenFile = rand().$file['name_pro'];
    if (move_uploaded_file($file['tmp_name'], "../music/".$tenFile)) {
      # code...
      $sql = "UPDATE product SET sound_link = ? WHERE id_pro = ?";
      $stmt = mysqli_prepare($conn, $sql);
      mysqli_stmt_bind_param($stmt, "sd", $tenFile, $id);
      echo "Sound update success <br>";
    }
    else
    {
      echo "Sound update error <br>";
    }
  }
  $sql = "UPDATE product SET 
        name_pro=?,
        singer =?,
        content =?,
        price_out =?,
        lyric =?,
        quantity=?,
        created_at=?,
        created_by=?,
        id_album=?,
        id_genre=?  
  WHERE id_pro=?";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "sssdsddsddd", $name_pro,$singer,$content,$price_out,$lyric,$quantity,$created_at,$created_by,$album,$genre, $id_pro);
  if (mysqli_stmt_execute($stmt)) {
    # code...
    echo "Update successful";
  }
  else
  {
    echo "Error: ".mysqli_error($conn);
  }
}
$id_pro = $_GET['id_pro'];
$sql = "SELECT * FROM product WHERE id_pro = {$id_pro}";
$product = mysqli_fetch_assoc($sql);
include("inc/header.php");
?>
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Update Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="" class="tm-edit-product-form">
                  <h2 style="color: white">Update product id is: <?= $product['id_pro'] ?></h2>
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Product Name
                    </label>
                    <input
                      id="name"
                      type="text"
                      name="name"
                      class="form-control validate"
                      value="<?= $product['name_pro'] ?>"
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="singer"
                      >Singer Name
                    </label>
                    <input
                      id="singer"
                      name="singer"
                      type="text"
                      class="form-control validate"
                      value="<?= $product['singer'] ?>"
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="content"
                      >Content</label
                    >
                    <textarea
                      class="form-control validate"
                      rows="3"
                      value="<?= $product['content'] ?>"
                    ></textarea>
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="lyric"
                      >Lyric</label
                    >
                    <textarea
                      class="form-control validate"
                      rows="10"
                      value="<?= $product['lyric'] ?>"
                    ></textarea>
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="album"
                      >Album</label
                    >
                    
                    <select
                      class="custom-select tm-select-accounts"
                      id="album"
                      value="<?= $product['id_album'] ?>"
                    >
                      <option selected>Select album</option>
                      <option value="1">Sơn Tùng MTP</option>
                      <option value="2">Hoàng Thùy Linh</option>
                      <option value="3">Bích Phương</option>
                      <option value="10">Khác</option>

                    </select>
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="genre"
                      >Genre</label
                    >
                    <select
                      class="custom-select tm-select-accounts"
                      id="genre"
                      value="<?= $product['id_genre'] ?>"
                    >
                      <option selected>Select Genre</option>
                      <option value="1">Nhạc Trẻ</option>
                      <option value="2">Other</option>
                    </select>
                  </div>
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="expire_date"
                            >Expire Date
                          </label>
                          <input type="datetime-local" class="form-control" id="created_at" placeholder="2020/12/01" name="created_at" value="<?= $product['created_at'] ?>">
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="price"
                            >Price
                          </label>
                          <input
                            id="price"
                            name="price"
                            type="number"
                            class="form-control validate"
                            value="<?= $product['price_out'] ?>"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="quantity"
                            >Quantity
                          </label>
                          <input
                            id="quantity"
                            name="quantity"
                            type="number"
                            class="form-control validate"
                            value="<?= $product['quantity'] ?>"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="created_by"
                            >Created by
                          </label>
                          <input
                            id="created_by"
                            name="created_by"
                            type="text"
                            class="form-control validate"
                            value="<?= $product['created_by'] ?>"
                          />
                        </div>

                  </div>
                  
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-dummy mx-auto">
                  <i
                    class="fas fa-cloud-upload-alt tm-upload-icon"
                    onclick="document.getElementById('fileInput').click();"
                  ></i>
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" type="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="UPLOAD PRODUCT IMAGE"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
                <BR>
                <BR>
                <div class="tm-product-img-dummy mx-auto">
                  <i
                    class="fas fa-cloud-upload-alt tm-upload-icon"
                    onclick="document.getElementById('fileInput').click();"
                  ></i>
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" type="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="UPLOAD PRODUCT SOUND"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Update Product Now</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    include('inc/footer.php');
    ?> 

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker({
          defaultDate: "10/22/2020"
        });
      });
    </script>
  </body>
</html>
