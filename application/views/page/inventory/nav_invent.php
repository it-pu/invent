

<div class="card">
  <div class="content">
    <ul class="nav nav-tabs">
      <li role="presentation" class="<?php if($this->uri->segment(1)=='inventory' && $this->uri->segment(2)==null){echo 'active';} ?>"><a href="<?php echo base_url('inventory'); ?>">Inventory</a></li>
      <li role="presentation" class="<?php if($this->uri->segment(2)=='purchase-requisition'){echo 'active';} ?>"><a href="<?php echo base_url('inventory/purchase-requisition'); ?>">Purchase Requisition</a></li>
    </ul>

    <?php echo $content2; ?>

  </div>
</div>
