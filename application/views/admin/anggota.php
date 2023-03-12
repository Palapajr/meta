<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('admin/layout/header');
?> 

  <!-- Main Content -->
  <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Pegawai</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">data Anggota</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">DataTables</h2>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Basic DataTables</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
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

<?php $this->load->view('admin/layout/footer'); ?>
