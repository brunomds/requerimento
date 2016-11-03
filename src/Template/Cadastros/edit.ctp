<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $cadastro->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cadastro->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Cadastros'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cadastros form large-9 medium-8 columns content">
    <?= $this->Form->create($cadastro) ?>
    <fieldset>
        <legend><?= __('Editar Cadastro') ?></legend>
        <?php
            echo $this->Form->input('usuario');
            echo $this->Form->input('password');
            echo $this->Form->input('email');
            echo $this->Form->input('telefone');
            echo $this->Form->input('matricula');
            echo $this->Form->input('papel');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
