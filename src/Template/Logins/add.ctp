<nav class="large-3 medium-4 columns" id="actions-sidebar">    
</nav>
<div class="logins form large-9 medium-8 columns content">
    <?= $this->Form->create($login) ?>
    <fieldset>
        <legend><?= __('Login') ?></legend>
        <?php
            echo $this->Form->input('matricula');
            echo $this->Form->input('password');
           echo $this->Form->input('papel');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Entrar')) ?>
    <?= $this->Form->end() ?>
</div>
