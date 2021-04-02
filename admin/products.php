<?php
include('inc/header.php');
?>
    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">ID </th>
                    <th scope="col">IMAGE</th>
                    <th scope="col">SONGS NAME &nbsp;</th>
                    <th scope="col">SINGER</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                   <?php
                      
                          $query = "SELECT * FROM product";
                          $rs = mysqli_query( $conn, $query);
                          if( mysqli_num_rows( $rs ) > 0)
                            while( $row = mysqli_fetch_assoc( $rs )){
                    ?>
                  <tr>
                    <th scope="row"><input type="checkbox" /></th>
                    <td><?= $row['id_pro']?></td>
                    <td><img class="anh-sp" width="100" height="120" src="../img/<?= $row['image_link']?>"></td>
                    <td class="tm-product-name"><?= $row['name_pro']?></td>
                    <td><?= $row['singer']?></td>
                    <td><?= $row['price_out']?></td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                    
                  </tr>
                  <?php

                        }

                      ?>
                 
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a
              href="add-product.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>
            <button class="btn btn-primary btn-block text-uppercase">
              Delete selected products
            </button>
          </div>
        </div>
        <!-- table container -->
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Album</h2>
            <div class="tm-product-table-container">
              <table class="table tm-table-small tm-product-table">
                <tbody>
                   <?php
                      
                          $query = "SELECT * FROM album";
                          $rs = mysqli_query( $conn, $query);
                          if( mysqli_num_rows( $rs ) > 0)
                            while( $row = mysqli_fetch_assoc( $rs )){
                    ?>
                  <tr>
                    <td class="tm-product-name"><?= $row['name_album']?></td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                 <?php

                        }

                      ?>
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <button class="btn btn-primary btn-block text-uppercase mb-3">
              Add new album
            </button>
          </div>
        </div>
        <!-- table container -->
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Genre</h2>
            <div class="tm-product-table-container">
              <table class="table tm-table-small tm-product-table">
                <tbody>
                   <?php
                      
                          $query = "SELECT * FROM genre";
                          $rs = mysqli_query( $conn, $query);
                          if( mysqli_num_rows( $rs ) > 0)
                            while( $row = mysqli_fetch_assoc( $rs )){
                    ?>
                  <tr>
                    <td class="tm-product-name"><?= $row['name_genre']?></td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                 <?php

                        }

                      ?>
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <button class="btn btn-primary btn-block text-uppercase mb-3">
              Add new category
            </button>
          </div>
        </div>
      </div>
    </div>
    <?php
    include('inc/footer.php');
    ?>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $(".tm-product-name").on("click", function() {
          window.location.href = "edit-product.php";
        });
      });
    </script>
  </body>
</html>