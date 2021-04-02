<?php 
include('inc/header.php');
?>

    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Add Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <?php

                if( $_SERVER['REQUEST_METHOD'] == 'POST')
                {
                  $name_pro= $_POST['name_pro'];
                  $singer = $_POST['singer'];
                  $content = $_POST['content'];
                  $price_out = $_POST['price_out'];
                  $lyric = $_POST['lyric'];
                  $created_by = $_POST['created_by'];
                  $image_link= $_POST['image_link'];
                  $sound_link = $_POST['sound_link'];
                  include ("inc/conn.php");
                  $sql = "INSERT INTO product(name_pro,singer,content,price_out,lyric,created_by,image_link,sound_link ) value(?,?,?,?,?,?,?,?)";
                  $stmt = mysqli_prepare($conn, $sql);
                  mysqli_stmt_bind_param($stmt, "sssdssss",
                   $name_pro,$singer,$content,$price_out,$lyric,$created_by,$image_link,$sound_link);
                  //s= string :text
                  //d= double :number
                  //i=interger

                  if (mysqli_stmt_execute($stmt)) {
                    echo "Thêm thanh cong";
                  }
                  else{
                    echo "Thêm ko thanh cong".mysqli_error($conn);
                  }
                }

                ?>
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="" class="tm-edit-product-form" method="post">
                  <div class="form-group mb-3">
                    <label
                      for="name_pro"
                      >Product Name
                    </label>
                    <input
                      id="name_pro"
                      name="name_pro"
                      type="text"
                      class="form-control validate"
                      required
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
                      required
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
                      name="content"
                      required
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
                      name="lyric"
                      required
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
                    >
                      <option selected >Select album</option>
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
                    >
                      <option selected >Select Genre</option>
                      <option value="1">Nhạc Trẻ</option>
                      <option value="2">Khác</option>
                    </select>
                  </div>
                  <div class="row">
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="price_out"
                            >Price
                          </label>
                          <input
                            id="price_out"
                            name="price_out"
                            type="number"
                            class="form-control validate"
                            required
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
                            required
                          />
                        </div>

                  </div>
                  
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-dummy mx-auto" >
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
                <button type="submit" name="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
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
        $("#expire_date").datepicker();
      });
    </script>
  </body>
</html>
