<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('admin/layout/header');
?> 

  <!-- Main Content -->
  <div class="main-content">
        <section class="section">
          <div class="section-header">

  
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">data Anggota</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Data Anggota</h2>
            
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Tambah</button>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr class="text-center">
                            <th>
                              No
                            </th>
                            <th>Nama Anggota</th>
                            <th>Jabatan</th>
                            <th>Unit</th>
                            <th>No Handphone</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="listUsers">                                 
  
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </section>
  </div>

      <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Modal Tambah Data Anggota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <form>
                    <div class="card-body">
                      <div class="form-group">
                        <label>NPK</label>
                        <input type="text" class="form-control" name="npk">
                      </div>
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama">
                      </div>
                      <div class="form-group">
                      <label>Jabatan SK</label>
                          <select class="form-control" name="jabatan">
                            <option value="">Pilih</option>
                            <option value="Teknisi">Teknisi</option>
                            <option value="IT">IT</option>
                          </select>
                      </div>
                      <div class="form-group">
                      <label>Unit</label>
                          <select class="form-control" name="unit">
                            <option value="">Pilih</option>
                            <option value="Sarpras">Sarpras</option>
                            <option value="IT">IT</option>
                          </select>
                      </div>
                      <div class="form-group">
                      <label>Pendidikan Tertinggi</label>
                          <select class="form-control" name="pendidikan">
                            <option value="">Pilih</option>
                            <option value="Bawah_sma">Di Bawah SMA</option>
                            <option value="SMA">SMA</option>
                            <option value="Associate">Associate</option>
                            <option value="Bachelor">Bachelor</option>
                            <option value="Master">Master</option>
                            <option value="Doctoral">Doctoral</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Jenis Kelamin</label>
                        <div class="selectgroup selectgroup-pills">
                          <label class="selectgroup-item">
                            <input type="radio" name="gender" value="L" class="selectgroup-input">
                            <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-male"></i> Laki-Laki</span>
                          </label>
                          <label class="selectgroup-item">
                            <input type="radio" name="gender" value="P" class="selectgroup-input">
                            <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-female"></i> Perempuan</span>
                          </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>No Hp</label>
                        <input type="text" class="form-control" name="nope">
                      </div>
                      <div class="form-group">
                      <label>Agama</label>
                          <select class="form-control" name="agama">
                            <option value="">Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                          </select>
                      </div>
                      <div class="form-group mb-0">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat"></textarea>
                      </div>
                    </div>
                  </form>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php $this->load->view('admin/layout/footer'); ?>
