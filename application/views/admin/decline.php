
          <div id="decline">
              <div class="window">
                <a href="<?php echo base_url() ?>index.php/admin/prospective_member_view" class="close-button" title="Close">&times;</a>
                  <form class="card-member-register" role="form" action="<?php echo base_url() ?>index.php/admin/member_add/save?id=<?php echo $this->input->get('id') ?>" method="post" class="register-form" id="register-form">
                       <div class="row">
                      <table class="tab-member-register">
                        <tbody>
                          <tr>
                            <td>
                              <p>Data Akan di simpan di log member decline</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <h5><?php echo $this->input->get('company_name') ?></h5>
                              <button type="submit" name="accept" class="btn btn-sm btn-primary"><i class="fa fa-archive fa-lg text-default"></i>&nbsp;Simpan Data</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
              </form>
            </div>
          </div>