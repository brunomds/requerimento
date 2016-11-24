<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Cadastre-se'), ['controller' => 'users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cadastros index large-9 medium-8 columns content">
    <h3><?= __('cadastros.index.title') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario', __('cadastros.index.user')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('email',__('cadastros.index.email'))?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone',__('cadastros.index.phone')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('matricula',__('cadastros.index.matricula')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('papel',__('cadastros.index.papel')) ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
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
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', 'id' => $cadastro->id, 'nome' => $cadastro->usuario]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cadastro->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $cadastro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadastro->id)]) ?>
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
