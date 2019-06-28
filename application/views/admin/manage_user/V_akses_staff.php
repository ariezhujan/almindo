	<div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title"><h4>MANAGE STAFF AKSESS</h4></span>
                    </div>
                  </div>
                </div>
				<span style="color:red"><?php echo $this->session->flashdata("notif"); ?></span>
                <div class="card-body">
                  <div class="responsive-table">
                    <table  id="example" class="table table-hover">
                      <thead class="text-primary">
                        <th>NIK</th>
                        <th>NAME</th>
                        <th>USERNAME</th>
                        <th>PASSWORD</th>
                        <th>EMAIL</th>
                        <th>DEPARTEMENT</th>
                        <th>MORE</th>
                      </thead>
                      <tbody>
					  <?php foreach($staff as $su){?>
                        <tr>
                          <td><?php echo $su->nik ?></td>
                          <td><?php echo $su->nama ?></td>
                          <td><?php echo $su->username ?></td>
                          <td><?php echo $su->password ?></td>
                          <td><?php echo $su->email ?></td>
                          <td><?php echo $su->divisi ?></td>
                          <td><a href="<?php echo site_url(); ?>admin/manage_user/add_akses_staff/edit_akses?nik=<?php echo $su->nik ?>&nama=<?php echo $su->nama ?>&divisi=<?php echo $su->divisi ?>" class="btn btn-primary">Set Access</a></td>
                        </tr>
					  <?php } ?>
                      </tbody>
                    </table>
              </div>
              </div>
            </div>
        </div>
    </div>

