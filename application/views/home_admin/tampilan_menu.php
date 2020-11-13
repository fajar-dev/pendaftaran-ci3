<ul class="nav nav-list">
					<li class="active">
						<a href="<?php echo base_url();?>home_admin">
							<i class="icon-dashboard"></i>
							<span class="menu-text"> Dashboard </span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url();?>form" >
							<i class="icon-edit"></i>
							<span class="menu-text"> Data </span>

							<b class="arrow icon-angle-down"></b>
						</a>
					</li>
						<!-- BATAS -->
					<li>
							<?php if($this->session->userdata('role')=='admin')
							{

							  ?>
						<a href="<?php echo base_url();?>login/admin" class="dropdown-toggle">
							<i class="icon-desktop"></i>
							<span class="menu-text"> Admin </span>

							<b class="arrow icon-angle-down"></b>
						</a>
						
							<?php } ?>
					</li>

						<li>
						<a href="<?= base_url() ?>home_admin/logout" class="dropdown-toggle">
							<i class="icon-tag"></i>
							<span class="menu-text"> Logout </span>
						</a>

						</li>

					</ul> <!--/.nav-list-->