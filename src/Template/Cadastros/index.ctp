<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cadastro'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cadastros index large-9 medium-8 columns content">
    <h3><?= __('Cadastros') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('matricula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('papel') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cadastros as $cadastro): ?>
            <tr>
                <td><?= $this->Number->format($cadastro->id) ?></td>
                <td><?= h($cadastro->usuario) ?></td>
                <td><?= h($cadastro->email) ?></td>
                <td><?= h($cadastro->telefone) ?></td>
                <td><?= h($cadastro->matricula) ?></td>
                <td><?= h($cadastro->papel) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cadastro->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cadastro->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cadastro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadastro->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
