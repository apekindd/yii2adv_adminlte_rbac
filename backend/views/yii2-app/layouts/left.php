<aside class="main-sidebar">

    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Пользователи', 'icon' => 'fa fa-users', 'url' => ['/user']],
                    ['label' => 'Выход', 'icon' => 'fa fa-plug', 'url' => ['/site/logout']],

                ],
            ]
        ) ?>

    </section>

</aside>
