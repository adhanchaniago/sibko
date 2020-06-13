    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-md">
          <div class="card">
            <div class="card-header bg-transparent row align-items-center">
              <h3 class="mb-0 col-md-3">DAFTAR SISWA</h3>
              <div class="col-md-9">
                <div class="row">
                  <div class="col-md d-flex my-1 my-md-0">
                    <button class="form-control form-control-sm col-2" id="add-data">New</button>
                    <form method="get" class="d-flex col-md">
                      <select class="form-control form-control-sm mr-1">
                        <option readonly>Jenis Kelamin</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                      </select>
                      <select class="form-control form-control-sm">
                        <option readonly>Kelas</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                    </form>
                  </div>
                  
                  <div class="col-md-4 text-right">
                    <input type="text" id="search" class="form-control form-control-sm" placeholder="Search ...">
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row" id="show_data_siswa">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              
                <div class="modal-header">
                    <h3 class="modal-title" id="modal-title-default">Tambah Data Siswa</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                
                <div class="modal-body">
                  <form id="form-tambah" method="POST">
                    <hr class="my-1 mt-0">
                    <h2>Biodata</h2>
                    <hr class="my-1">

                    <div class="row my-1">
                      <div class="col-md">
                        <input type="number" name="nis" placeholder="NIS" class="form-control form-control-sm mb-1">
                      </div>
                      <div class="col-md">
                        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control form-control-sm mb-1">
                      </div>
                    </div>

                    <div class="row my-1">
                      <div class="col-md">
                        <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control form-control-sm mb-1">
                      </div>
                      <div class="col-md">
                        <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" class="form-control form-control-sm mb-1">
                      </div>
                    </div>

                    <div class="row my-1">
                      <div class="col-md mb-1">
                        <select class="form-control form-control-sm select" name="jenis_kelamin">
                          <option></option>
                          <option>Laki-Laki</option>
                          <option>Perempuan</option>
                        </select>
                      </div>
                      <div class="col-md mb-1">
                        <select class="form-control form-control-sm select" name="agama">
                          <option></option>
                          <option>Islam</option>
                          <option>Kristen</option>
                          <option>Budha</option>
                          <option>Hindu</option>
                          <option>Katholik</option>
                        </select>
                      </div>
                    </div>

                    <div class="row my-1">
                      <div class="col-md">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto" lang="en" name="foto">
                            <label class="custom-file-label" for="foto">Pilih Foto</label>
                        </div>
                      </div>
                    </div>

                    <div class="row my-1">
                      <div class="col-md">
                        <div class="row">
                          <div class="col-md-8">
                            <textarea class="form-control mb-1" placeholder="Alamat" name="alamat"></textarea>
                          </div>
                          <div class="col-md">
                            <input type="number" name="anak_ke" placeholder="Anak Ke" class="form-control form-control-sm mb-1">
                            <select class="form-control form-control-sm select mb-1" name="id_ortu">
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>

                    <hr class="my-3">
                    <h2>Kontak</h2>
                    <hr class="my-1">

                    <div class="row my-1">
                      <div class="col-md">
                        <input type="number" name="hp" placeholder="HP" class="form-control form-control-sm mb-1">
                      </div>
                      <div class="col-md">
                        <input type="email" name="email" placeholder="Email" class="form-control form-control-sm mb-1">
                      </div>
                    </div>
      
                </div>
                
                <div class="modal-footer">
                    <button type="submit" id="btn-add" class="btn btn-sm btn-success"><i class="fa fa-spinner fa-spin loader" style="display: none"></i> Save</button>
                </div>
                  </form>
                
            </div>
        </div>
      </div>

      <div class="modal fade" id="update-modal" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              
                <div class="modal-header">
                    <h3 class="modal-title" id="modal-title-default">Update Data Siswa</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                
                <div class="modal-body">
                  <form id="form-update" method="POST">
                    <hr class="my-1 mt-0">
                    <h2>Biodata</h2>
                    <hr class="my-1">

                    <div class="row my-1">
                      <div class="col-md">
                        <input type="number" name="nis_update" placeholder="NIS" class="form-control form-control-sm mb-1">
                      </div>
                      <div class="col-md">
                        <input type="text" name="nama_lengkap_update" placeholder="Nama Lengkap" class="form-control form-control-sm mb-1">
                      </div>
                    </div>

                    <div class="row my-1">
                      <div class="col-md">
                        <input type="text" name="tempat_lahir_update" placeholder="Tempat Lahir" class="form-control form-control-sm mb-1">
                      </div>
                      <div class="col-md">
                        <input type="date" name="tanggal_lahir_update" placeholder="Tanggal Lahir" class="form-control form-control-sm mb-1">
                      </div>
                    </div>

                    <div class="row my-1">
                      <div class="col-md mb-1">
                        <select class="form-control form-control-sm select" name="jenis_kelamin_update">
                          <option></option>
                          <option>Laki-Laki</option>
                          <option>Perempuan</option>
                        </select>
                      </div>
                      <div class="col-md mb-1">
                        <select class="form-control form-control-sm select" name="agama_update">
                          <option></option>
                          <option>Islam</option>
                          <option>Kristen</option>
                          <option>Budha</option>
                          <option>Hindu</option>
                          <option>Katholik</option>
                        </select>
                      </div>
                    </div>

                    <div class="row my-1">
                      <div class="col-md">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto" lang="en" name="foto_update">
                            <label class="custom-file-label" for="foto">Pilih Foto</label>
                        </div>
                      </div>
                    </div>

                    <div class="row my-1">
                      <div class="col-md">
                        <div class="row">
                          <div class="col-md-8">
                            <textarea class="form-control mb-1" placeholder="Alamat" name="alamat_update"></textarea>
                          </div>
                          <div class="col-md">
                            <input type="number" name="anak_ke_update" placeholder="Anak Ke" class="form-control form-control-sm mb-1">
                            <select class="form-control form-control-sm select mb-1" name="id_ortu_update">
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>

                    <hr class="my-3">
                    <h2>Kontak</h2>
                    <hr class="my-1">

                    <div class="row my-1">
                      <div class="col-md">
                        <input type="number" name="hp_update" placeholder="HP" class="form-control form-control-sm mb-1">
                      </div>
                      <div class="col-md">
                        <input type="email" name="email_update" placeholder="Email" class="form-control form-control-sm mb-1">
                      </div>
                    </div>
      
                </div>
                
                <div class="modal-footer">
                    <button type="submit" id="btn-add" class="btn btn-sm btn-success"><i class="fa fa-spinner fa-spin loader" style="display: none"></i> Save</button>
                </div>
                  </form>
                
            </div>
        </div>
      </div>

      <div class="modal fade" id="add-modal-ortu" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              
                <div class="modal-header">
                    <h3 class="modal-title" id="modal-title-default">Tambah Data Orang Tua</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                
                <div class="modal-body">
                  <form id="form-tambah" method="POST">

                    <div class="row my-1">
                      <div class="col-md">
                        <input type="number" name="nik_orangtua" placeholder="NIK" class="form-control form-control-sm mb-1">
                        <input type="text" name="nama_lengkap_ortu" placeholder="Nama Orang Tua" class="form-control form-control-sm mb-1">
                        <select class="form-control form-control-sm select" name="jenis_kelamin_ortu">
                          <option></option>
                          <option>Laki-Laki</option>
                          <option>Perempuan</option>
                        </select>
                      </div>
                    </div>

                    <div class="row my-1">
                      <div class="col-md">
                        <input type="number" name="hp_ortu" placeholder="HP" class="form-control form-control-sm mb-1">
                      </div>
                      <div class="col-md">
                        <input type="email" name="email_ortu" placeholder="Email" class="form-control form-control-sm mb-1">
                      </div>
                    </div>

                    <div class="row my-1">
                      <div class="col-md">
                        <input type="text" name="username" placeholder="Username" class="form-control form-control-sm mb-1">
                      </div>
                      <div class="col-md">
                        <input type="password" name="password" placeholder="Password" class="form-control form-control-sm mb-1">
                      </div>
                    </div>
      
                </div>
                
                <div class="modal-footer">
                    <button type="submit" id="btn-add-ortu" class="btn btn-sm btn-success">Save</button>
                </div>
                  </form>
                
            </div>
        </div>
      </div>