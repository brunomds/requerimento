<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cadastro->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cadastro->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cadastros'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cadastros form large-9 medium-8 columns content">
    <?= $this->Form->create($cadastro) ?>
    <fieldset>
        <legend><?= __('Edit Cadastro') ?></legend>
        <?php
            echo $this->Form->input('usuario');
            echo $this->Form->input('senha');
            echo $this->Form->input('email');
            echo $this->Form->input('telefone');
            echo $this->Form->input('matricula');
            echo $this->Form->input('papel');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
