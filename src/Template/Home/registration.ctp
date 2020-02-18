<?= $this->Form->create() ?>

    <?= $this->Form->input('name',array('type'=>'text','class' =>'input-file')) ?>
    <br>

    <?= $this->Form->input('email',array('type'=>'text','class' =>'input-file')) ?>
    <br>

    <?= $this->Form->input('username',array('type'=>'text','class' =>'input-file')) ?>
    <br>

    <?= $this->Form->input('password',array('type'=>'password','class' =>'input-file')) ?>
    <br>

    <?= $this->Form->input('button',array('type'=>'submit','class' =>'input-file')) ?>
    <br>

<?= $this->Form->end() ?>

