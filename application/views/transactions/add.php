<h3>Add transaction</h3>

<?php echo form_open('transactions/add'); ?>
<p>
  Check in date<br>
  <?php echo form_input('checkin_date', '', 'class="date"'); ?>
</p>
<p>
  Property<br>
  <?php echo form_dropdown('property_id', $properties, $property_id); ?>
</p>
<p>
  Customer<br>
  <?php echo form_dropdown('customer_id', $customers, ''); ?>
  <?php echo anchor('customers/add', '+'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save transaction'); ?> or
  <?php echo anchor('transactions', 'cancel'); ?>
</p>
<?php echo form_close(); ?>