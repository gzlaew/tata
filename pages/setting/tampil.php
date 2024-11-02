<?php
//require_once '../inc/function.php';

$query = mysqli_query($kon, "SELECT * FROM setting");
$data = mysqli_fetch_array($query);
//var_dump($data);
$kode_nota=$data['tipe_nota'];


?>


<div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">SETTING</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-muted text-decoration-none" href="index.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    SETTING
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="../../dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4" />
                        </div>
                    </div>
                </div>
            </div>
</div>

                <?php 
                if (isset($_POST['Perbaharui'])) {
                  include "proses_edit.php";
                }
                if (isset($_POST['Perbarui_logo'])) {
                  include "proses_edit_logo.php";
                }

                  if (isset($_POST['Perbarui_kartu'])) {
                  include "proses_edit_kartu.php";
                }
                ?>


          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Pengaturan Aplikasi</h4>
                </div>
                <div class="card-body">
                  <form method="post" enctype="multipart/form-data" class="mt-4" novalidate>
                    <div class="mb-3 form-group">
                      <label>Nama Perusahaan
                        <span class="text-danger"></span></label>
                      <div class="controls">
                        <input type="hidden" name="id_setting" class="form-control" required
                          data-validation-required-message="This field is required" id="basic-form-name" value="<?php echo $data['id_setting']; ?>" />
                        <input type="text" name="Nama" class="form-control" required
                          data-validation-required-message="This field is required" id="basic-form-name" value="<?php echo $data['nama_perusahaan']; ?>" />

                      </div>
                    </div>

                    <div class="mb-3 form-group">
                      <label>Alamat
                        <span class="text-danger"></span></label>
                      <div class="controls">
                        <input type="email" name="Alamat" class="form-control" required
                          data-validation-required-message="This field is required" value="<?php echo $data['alamat']; ?>" />
                      </div>
                    </div>

                    <div class="mb-3 form-group">
                      <label>Telepon
                        <span class="text-danger"></span></label>
                      <div class="controls">
                        <input type="text" name="Telepon" class="form-control" required
                          data-validation-required-message="This field is required" value="<?php echo $data['telepon']; ?>" />
                      </div>
                    </div>
        
    
                    <div class="mb-3 form-group">
                      <label>Tipe Nota</label>
                      <div class="controls">
                        <select name="Tipe_nota" id="select" required class="form-control">
                          <option value="">Pilih Nota</option>
                          <option value="1" <?php if ($kode_nota==1)  {echo"selected=\"selected\""; } ?> >Nota Kecil</option>
                          <option value="2" <?php if ($kode_nota==2)  {echo"selected=\"selected\""; } ?> >Nota Besar</option>
                        </select>
                      </div>
                    </div>

                    <div class="mb-3 form-group">
                      <label>Diskon
                        <span class="text-danger"></span></label>
                      <div class="controls">
                        <input type="number" name="Diskon" class="form-control" required
                          data-validation-required-message="This field is required" value="<?php echo $data['diskon']; ?>" />
                      </div>
                    </div>

                    <div class="mb-3 form-group">
                      <button type="submit" class="btn btn-info rounded-pill px-4" name="Perbaharui">
                        Perbarui
                      </button>
                    </div>
                  </form>
                </div>
              </div>        
            </div>
          </div>
<!-- form ke-2 -->

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Logo</h4>
                </div>
                <div class="card-body">
                  
                  <form method="post" role="form" enctype="multipart/form-data">
                    <div class="mb-3 form-group">
                      <label>Logo Perusahaan
                        <span class="text-danger"></span></label>
                      <div class="controls">
                        <input type="hidden" name="id_setting" value="<?php echo $data['id_setting']; ?>" class="form-control" required />
                        <input type="file" id="customFilelg"  class="form-control" name="logo" />
                       <div>
                          <img src="../images/logo/<?php echo $data['path_logo'];?>" alt="logo" width="200px" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-3 form-group">
                      <button type="submit" class="btn btn-info rounded-pill px-4" name="Perbarui_logo">
                        Perbarui
                      </button>
                    </div>
                </form>
                </div>
              </div>        
            </div>
          </div>

<!-- form ke-3 -->

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Kartu</h4>
                </div>
                <div class="card-body">
                  
                <form method="post" role="form" enctype="multipart/form-data" class="mt-4" >
                    <div class="mb-3 form-group">
                      <label>Kartu Member
                        <span class="text-danger"></span></label>
                      <div class="controls">
                        <input type="hidden" name="id_setting" value="<?php echo $data["id_setting"];?>" class="form-control" required />
                        <input type="file" id="customFilelg" name="Kartu"  class="form-control" required />
                       <div>
                          <img src="../images/member/<?php echo $data['path_kartu_member'];?>" alt="kartu member" width="200px" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-3 form-group">
                      <button type="submit" class="btn btn-info rounded-pill px-4" name="Perbarui_kartu">
                        Perbarui
                      </button>
                    </div>
                </form>
                </div>
              </div>        
            </div>
          </div>


          
