<?php include "header.php"; ?>
<link rel="stylesheet" href="./css/specialstyle.css">

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
                              <h4 class="card-title card-title-dash">Add loại tin</h4>
                              </div
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-6">        
                        <form action="xuly_addloaitin.php" method="get">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="">
                                            Ten Loai Tin
                                        </label>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name = 'tenloaitin'>
                                    </div>
                                    <div class="col-6">
                                        <label for="">
                                            Thu Tu
                                        </label>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name = 'thutu'>
                                    </div>
                                    <div class="col-6">
                                        <label for="">
                                            An Hien
                                        </label>
                                    </div>
                                    <div class="col-6">
                                        <select name="anhien" id="">
                                            <option value="0">An</option>
                                            <option value="1">Hien</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="">
                                            The loai
                                        </label>
                                    </div>
                                    <div class="col-6">
                                        <select name="idtheloai" id="">
                                            <?php
                                            $str = "select * from theloai";
                                            $result = $conn->query($str);
                                            while ($row = $result->fetch_assoc()) { ?>
                                                <option value="<?php echo $row['idTL']; ?>"><?php echo $row['TenTL']; ?></option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-6"></div>
                                    <div class="col-6">
                                        <input type="submit" value="Add">
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
