<?php include "header.php"; ?>
<?php include "function.php"; ?>

<link rel="stylesheet" href="./css/specialstyle.css">

<!-- TinyMCE CDN -->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        
        <script>
          tinymce.init({
            selector: 'textarea#editor',
          });
        </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab" aria-selected="false">Audiences</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false">Demographics</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false">More</a>
                    </li>
                  </ul>
                  <div>
                    <div class="btn-wrapper">
                      <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                      <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                      <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                    </div>
                  </div>
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    
                    <div class="row">
                      <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                              <h4 class="card-title card-title-dash">Add tin</h4>
                              </div
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">        
                        <form action="xuly_addtin.php" method="post" enctype="multipart/form-data">
                          <div class="row">
                            <div class="col-2">
                              <label for="">
                                  Tieu De
                              </label>
                            </div>
                            <div class="col-10">
                                <input type="text" name = 'tieude'>
                            </div>
                            <div class="col-2">
                                <label for="">
                                    Tom Tat
                                </label>
                            </div>
                            <div class="col-10">
                                <input type="text" name = 'tomtat'>
                            </div>
                            <div class="col-2">
                                <label for="">
                                    Hinh dai dien
                                </label>
                            </div>
                            <div class="col-10">
                                <input type="file" name="fileToUpload" id="fileToUpload">
                            </div>
                            <div class="col-2">
                                <label for="">
                                    Su kien
                                </label>
                            </div>
                            <div class="col-10">
                                <select name="sukien" id="">
                                    <?php
                                    $arrs = array(
                                        'table' => 'sukien',
                                        'field_print' => 'MoTa',
                                        'field_value' => 'idSK'
                                    );
                                    ?>
                                    <?php list_record($conn, $arrs);
                                    ?>
                                </select>
                            </div>
                            <div class="col-2">
                                <label for="">
                                    Noi dung
                                </label>
                            </div>
                            <div class="col-10">
                                <textarea name="noidung" id="editor" cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-2">
                                <label for="">
                                    An Hien
                                </label>
                            </div>
                            <div class="col-10">
                                <select name="anhien" id="">
                                    <option value="0">An</option>
                                    <option value="1">Hien</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <label for="">
                                    The loai
                                </label>
                            </div>
                            <div class="col-10">
                                <select name="idtheloai" id="">
                                    <?php
                                    $arrs = array(
                                        'table' => 'theloai',
                                        'field_print' => 'TenTL',
                                        'field_value' => 'idTL'
                                    );
                                    ?>
                                    <?php list_record($conn, $arrs); ?>
                                </select>
                            </div>
                            <div class="col-2">
                                <label for="">
                                    Loai tin
                                </label>
                            </div>
                            <div class="col-10">
                                <select name="idloaitin" id="">
                                    <?php
                                    $arrs = array(
                                        'table' => 'loaitin',
                                        'field_print' => 'Ten',
                                        'field_value' => 'idLT'
                                    );
                                    ?>
                                    <?php list_record($conn, $arrs);
                                    ?>
                                </select>
                            </div>
                            <div class="col-2"></div>
                            <div class="col-10" >
                                <input  type="submit" value="Add">
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- content-wrapper ends -->
        
<?php include "footer.php"; ?>
