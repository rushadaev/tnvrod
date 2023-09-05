{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<x-backpack::menu-dropdown-header title="Новости" />
<x-backpack::menu-item title="Статьи" icon="la la-file-alt" :link="backpack_url('article')" />
<x-backpack::menu-item title="Категории" icon="la la-folder" :link="backpack_url('category')" />


@role('Админ')
<x-backpack::menu-dropdown-header title="Пользователи" />
<x-backpack::menu-dropdown title="Пользователи" icon="la la-puzzle-piece">
    <x-backpack::menu-dropdown-item title="Пользователи" icon="la la-user" :link="backpack_url('user')" />
    <x-backpack::menu-dropdown-item title="Роли" icon="la la-group" :link="backpack_url('role')" />
    <x-backpack::menu-dropdown-item title="Права" icon="la la-key" :link="backpack_url('permission')" />
</x-backpack::menu-dropdown>

<x-backpack::menu-dropdown-header title="Страницы" />
<x-backpack::menu-item title="Страницы" icon="la la-file-alt" :link="backpack_url('page')" />
<x-backpack::menu-item title="Разделы" icon="la la-folder" :link="backpack_url('section')" />

<x-backpack::menu-dropdown-header title="Виджеты" />
<x-backpack::menu-item title="Карточки" icon="la la-table" :link="backpack_url('cardblock')" />

<x-backpack::menu-item title="Медиа" icon="la la-image" :link="backpack_url('media')" />
<x-backpack::menu-item title="Партнеры" icon="la la-briefcase" :link="backpack_url('partner')" />
<x-backpack::menu-dropdown-header title="Другое" />
<x-backpack::menu-item title="Файлы" icon="la la-paperclip" :link="backpack_url('file')" />
@endrole
