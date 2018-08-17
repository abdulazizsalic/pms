<div class="row page-titles">
  <div class="col-md-6 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Transactions</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item active">Transactions</li>
      <li class="breadcrumb-item active">Edit transaction</li>
    </ol>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">General information</h4>
        <div class="collapse" id="collapseExample" aria-expanded="false">
        </div>
        <?php echo form_open('customers/add', array('class' => 'form')); ?>
        <div class="form-group m-t-40 row">
          <?php echo form_label('Payer / Payee', 'customer_name', array('class' => 'col-3 col-form-label')); ?>
          <div class="col-9">
            <?php echo form_input('customer_name', '', 'class="form-control" id="example-text-input"'); ?>
          </div>
        </div>
        <div class="form-group row">
          <?php echo form_label('Property', 'property_name', array('class' => 'col-3 col-form-label')); ?>
          <div class="col-9">
            <?php echo form_input('property_name', '', 'class="form-control"'); ?>
          </div>
        </div>
        <div class="form-group row">
          <?php echo form_label('Unit', 'unit_name', array('class' => 'col-3 col-form-label')); ?>
          <div class="col-9">
            <?php echo form_input('unit_name', '', 'class="form-control"'); ?>
          </div>
        </div>
        <div class="form-group row">
          <?php echo form_label('Lease', 'lease', array('class' => 'col-3 col-form-label')); ?>
          <div class="col-9">
            <?php echo form_input('lease', '', 'class="form-control"'); ?>
          </div>
        </div>
        <div class="form-group row">
          <?php echo form_label('Due', 'due_date', array('class' => 'col-3 col-form-label')); ?>
          <div class="col-9">
            <?php echo form_input('due_date', '', 'class="form-control"'); ?>
          </div>
        </div>
        <div class="form-group row">
          <?php echo form_label('Category', 'category', array('class' => 'col-3 col-form-label')); ?>
          <div class="col-9">
            <?php echo form_input('category', '', 'class="form-control"'); ?>
          </div>
        </div>
        <div class="form-group row">
          <?php echo form_label('Sub-category', 'sub_category', array('class' => 'col-3 col-form-label')); ?>
          <div class="col-9">
            <?php echo form_input('sub_category', '', 'class="form-control"'); ?>
          </div>
        </div>
        <div class="form-group row">
          <?php echo form_label('Transaction type', 'transaction_type', array('class' => 'col-3 col-form-label')); ?>
          <div class="col-9">
            <?php echo form_input('transaction_type', '', 'class="form-control"'); ?>
          </div>
        </div>
        <div class="form-group row">
          <?php echo form_label('Amount', 'amount', array('class' => 'col-3 col-form-label')); ?>
          <div class="col-9">
            <?php echo form_input('amount', '', 'class="form-control"'); ?>
          </div>
        </div>
        <div class="form-group row">
          <span class="col-3"></span>
          <div class="col-9">
            <?php echo form_submit('submit', 'Update transaction', 'class="btn btn-primary"'); ?> or
            <?php echo anchor('transactions', 'cancel'); ?>
          </div>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>