<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cadastro'), ['action' => 'edit', $cadastro->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cadastro'), ['action' => 'delete', $cadastro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadastro->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cadastros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cadastro'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cadastros view large-9 medium-8 columns content">
    <h3><?= h($cadastro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= h($cadastro->usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($cadastro->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($cadastro->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Matricula') ?></th>
            <td><?= h($cadastro->matricula) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Papel') ?></th>
            <td><?= h($cadastro->papel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cadastro->id) ?></td>
        </tr>
    </table>
</div>
