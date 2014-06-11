<div class="container">
<!-- Forms
      ================================================== -->
      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h3 id="forms">メンバー登録</h3>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="well">
              <?php echo $this->Form->create('User',array('type'=>'post','class'=>'bs-example form-horizontal')); ?>

                <!-- Tables
      ================================================== -->
      <div class="bs-docs-section">

        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="tables">Tables</h1>
            </div>

            <div class="bs-example">
              <table class="table table-striped table-bordered table-hover">
                <tbody>

                  <tr>
                    <td colspan="3">ユーザー名</td>
					<td><?php echo $this->data['User']['id']; ?></td>
                    <td colspan="9">

					<td><?php echo $this->Form->input('username');?></td>
                  </tr>
                  <tr>
                    <td>パスワード</td>
                    <td><?php echo $this->Form->input('password'); ?></td>

                  </tr>
                  <tr>
                    <td>3</td>
                    <td><td><?php echo $this->Form->input('familyname'); ?></td>


                  </tr>

                </tbody>
              </table>
            </div><!-- /example -->
          </div>
        </div>
      </div>

<button type="submit" class="btn btn-primary">Submit</button>
              <?php echo $this->Form->end(); ?>

            </div>
          </div>
                  </div>
      </div>
</div>



