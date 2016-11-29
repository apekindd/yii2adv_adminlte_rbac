<aside class="main-sidebar">

    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Пользователи', 'icon' => 'fa fa-dashboard', 'url' => ['/user']],
                    ['label' => 'Роли', 'icon' => 'fa fa-file-code-o', 'url' => ['/permit/access/role']],
                    ['label' => 'Права', 'icon' => 'fa fa-dashboard', 'url' => ['/permit/access/permission ']],
                    ['label' => 'Выход', 'icon' => 'fa fa-plug', 'url' => ['/site/logout']],

                ],
            ]
        ) ?>

    </section>

</aside>
