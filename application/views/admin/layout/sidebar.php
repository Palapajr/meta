<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url(); ?>dist/index">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url(); ?>dist/index">St</a>
          </div> 
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="<?php echo $this->uri->segment(2) == '' || $this->uri->segment(2) == 'index' || $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>dashboard" class="nav-link"><i class="fas fa-th"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Master</li>
            
            <li class="<?php echo $this->uri->segment(2) == 'blank' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>blank"><i class="far fa-square"></i> <span>Blank Page</span></a></li>


          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://wa.me/+6282287735072" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-phone"></i> Hubungi Saya
            </a>
          </div>
        </aside>
      </div>
