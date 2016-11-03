<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Cadastrados'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cadastros form large-9 medium-8 columns content">
    <?= $this->Form->create($cadastro) ?>
    <fieldset>
        <legend><?= __('Cadastro') ?></legend>
        <?php
            echo $this->Form->input('usuario');
            echo $this->Form->input('password');
            echo $this->Form->input('email');
            echo $this->Form->input('telefone');
            echo $this->Form->input('matricula');
            echo $this->Form->input('papel', ['label' => 'Papel', 'options' => ['selecione' => '--Selecione--', 'admin' =>'Admin' , 'aluno' => 'Aluno', 'professor' => 'Professor']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
