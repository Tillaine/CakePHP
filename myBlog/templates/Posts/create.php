<div class="conatiner">
    <h2>Create Listings</h2>
    
    <?= $this->Form->create(); ?>
    
    <?= $this->Form->label( 'Title ')?>
    <?= $this->Form->text( 'body', array('body', ['class' => 'form-control'])); ?>
    <br>
    <?= $this->Form->label( 'description ')?>
    <?= $this->Form->textArea( 'description', array('description', ['class' => 'form-control'])); ?>
    <br>
    
    <?= $this->Form->label( 'price ')?>
    <?= $this->Form->text( 'price', array('price', ['class' => 'form-control'])); ?>
    <br>
    
    <?= $this->Form->label( 'address ')?>
    <?= $this->Form->text( 'address', array('address', ['class' => 'form-control'])); ?>
    <br>
    
    <?= $this->Form->label( 'type ')?>
    <?= $this->Form->select( 'type', array(['Condo', 'House', 'Town Home'])); ?>
    <br>

 
    <?= $this->Form->submit('') ?>
    
    <?= $this->Form->create(); ?>
</div>