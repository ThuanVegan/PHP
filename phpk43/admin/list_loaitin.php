<?php include "header.php"; ?>
<?php include "function.php"; ?>
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
                              <h4 class="card-title card-title-dash">Quản lí loại tin</h4>
                              </div
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-12">        
                        <?php
                            $str = 'select * from loaitin';
                            $result = $conn->query($str);
                            ?>
                            <table class="table table-bordered dataTable">
                                <tr>
                                    <th>STT</th>
                                    <th>Tên loại tin</th>
                                    <th>Thứ tự</th>
                                    <th>Ẩn hiện</th>
                                    <th>Tên thể loại</th>
                                    <th>Hành động</th>
                                </tr>
                            <?php
                            $i=0;
                            while ($row = $result->fetch_assoc()){?>
                                <tr>
                                    <td> <?php echo ++$i; ?></td>
                                    <td> <?php echo $row['Ten']; ?></td>
                                    <td> <?php echo $row['ThuTu']; ?></td>
                                    <td> <?php echo $row['AnHien']; ?></td>
                                    <td> <?php echo get_theloai($row['idTL'],$conn); ?></td>
                                    <td> <a class="" style="" href="edit_loaitin.php?idLT=<?php echo $row['idLT']; ?>"> Edit </a> |
                                    <a  href="del_loaitin.php?idLT=<?php echo $row['idLT']; ?>"> Delete </a></td>
                                </tr>
                            <?php } ?>
                            </table>
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
