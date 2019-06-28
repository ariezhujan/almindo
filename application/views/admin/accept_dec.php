  
             <div id="accept">
              <div class="window">
                <a href="<?php echo site_url() ?>admin/member_decline_view" class="close-button" title="Close">&times;</a>
                  <form class="card-member-register" role="form" action="<?php echo base_url() ?>admin/member_decline_view/save?id=<?php echo $this->input->get('id') ?>&email=<?php echo $this->input->get('email') ?>" method="post" class="register-form" id="register-form">
                       <input type="hidden" name="company_name" id="company_name" value="<?php echo $this->input->get('company_name') ?>" />
                       <input type="hidden" name="company_owner" id="company_owner" value="<?php echo $this->input->get('company_owner') ?>" />
                       <input type="hidden" name="company_phone_number" id="company_phone_number" value="<?php echo $this->input->get('company_phone_number') ?>" />
                       <input type="hidden" name="address" id="address" value="<?php echo $this->input->get('address') ?>" />
                       <input type="hidden" name="pic" id="pic" value="<?php echo $this->input->get('pic') ?>" required="required" />
                       <input type="hidden" name="no_pic" id="no_pic" value="<?php echo $this->input->get('no_pic') ?>" />
                       <input type="hidden" name="bank" id="bank" value="<?php echo $this->input->get('bank') ?>" />
                       <input type="hidden" name="branch_bank" id="branch_bank" value="<?php echo $this->input->get('branch_bank') ?>" />
                       <input type="hidden" name="account_number" id="account_number" value="<?php echo $this->input->get('account_number') ?>" />
                       <input type="hidden" name="email" id="email" value="<?php echo $this->input->get('email') ?>" required="required" />
                       <input type="hidden" name="dor" id="email" value="<?php echo $this->input->get('dor') ?>" required="required" />
                       <div class="row">
                      <table class="tab-member-register">
                        <thead>
                              <th>Silahkan membuat Password untuk Client <br><?php echo $this->input->get('company_name') ?></th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <input class="form-control" type="password" name="password" id="password" placeholder="Input Password" required="required" />
                            </td>
                          </tr>
                          <tr>
                            <td>
                            <br>
                              <button type="submit" name="accept" class="btn btn-sm btn-primary"><i class="fa fa-archive fa-lg text-default"></i>&nbsp;Simpan Data</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
              </form>
            </div>
          </div>