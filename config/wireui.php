<?php

use WireUi\View\Components;

return [
    /*
        |--------------------------------------------------------------------------
        | Icons
        |--------------------------------------------------------------------------
        |
        | The icons config will be used in icon component as default
        | https://heroicons.com
        |
    */
    'icons' => [
        'style' => env('WIREUI_ICONS_STYLE', 'outline'),
    ],

    /*
        |--------------------------------------------------------------------------
        | Modal
        |--------------------------------------------------------------------------
        |
        | The default modal preferences
        |
    */
    'modal' => [
        'zIndex'   => env('WIREUI_MODAL_Z_INDEX', 'z-50'),
        'maxWidth' => env('WIREUI_MODAL_MAX_WIDTH', '2xl'),
        'spacing'  => env('WIREUI_MODAL_SPACING', 'p-4'),
        'align'    => env('WIREUI_MODAL_ALIGN', 'start'),
        'blur'     => env('WIREUI_MODAL_BLUR', true),
    ],

    /*
        |--------------------------------------------------------------------------
        | Components
        |--------------------------------------------------------------------------
        |
        | List with WireUI components.
        | Change the alias to call the component with a different name.
        | Extend the component and replace your changes in this file.
        | Remove the component from this file if you don't want to use.
        |
     */
    'components' => [
        'icon' => [
            'class' => Components\Icon::class,
            'alias' => 'wireui.icon',
        ],
        // 'icon.spinner' => [
        //     'class' => Components\Icons\Spinner::class,
        //     'alias' => 'wireui.icon.spinner',
        // ],
        'input' => [
            'class' => Components\Input::class,
            'alias' => 'wireui.input',
        ],
        // 'textarea' => [
        //     'class' => Components\Textarea::class,
        //     'alias' => 'wireui.textarea',
        // ],
        'label' => [
            'class' => Components\Label::class,
            'alias' => 'wireui.label',
        ],
        'error' => [
            'class' => Components\Error::class,
            'alias' => 'wireui.error',
        ],
        'errors' => [
            'class' => Components\Errors::class,
            'alias' => 'wireui.errors',
        ],
        // 'inputs.maskable' => [
        //     'class' => Components\Inputs\MaskableInput::class,
        //     'alias' => 'wireui.inputs.maskable',
        // ],
        // 'inputs.phone' => [
        //     'class' => Components\Inputs\PhoneInput::class,
        //     'alias' => 'wireui.inputs.phone',
        // ],
        // 'inputs.currency' => [
        //     'class' => Components\Inputs\CurrencyInput::class,
        //     'alias' => 'wireui.inputs.currency',
        // ],
        'button' => [
            'class' => Components\Button::class,
            'alias' => 'wireui.button',
        ],
        'button.circle' => [
            'class' => Components\CircleButton::class,
            'alias' => 'wireui.button.circle',
        ],
        // 'dropdown' => [
        //     'class' => Components\Dropdown::class,
        //     'alias' => 'wireui.dropdown',
        // ],
        // 'dropdown.item' => [
        //     'class' => Components\Dropdown\DropdownItem::class,
        //     'alias' => 'wireui.dropdown.item',
        // ],
        // 'dropdown.header' => [
        //     'class' => Components\Dropdown\DropdownHeader::class,
        //     'alias' => 'wireui.dropdown.header',
        // ],
        // 'notifications' => [
        //     'class' => Components\Notifications::class,
        //     'alias' => 'wireui.notifications',
        // ],
        'datetime-picker' => [
            'class' => Components\DatetimePicker::class,
            'alias' => 'wireui.datetime-picker',
        ],
        // 'time-picker' => [
        //     'class' => Components\TimePicker::class,
        //     'alias' => 'wireui.time-picker',
        // ],
        'card' => [
            'class' => Components\Card::class,
            'alias' => 'wireui.card',
        ],
        // 'native-select' => [
        //     'class' => Components\NativeSelect::class,
        //     'alias' => 'wireui.native-select',
        // ],
        'select' => [
            'class' => Components\Select::class,
            'alias' => 'wireui.select',
        ],
        'select.option' => [
            'class' => Components\Select\Option::class,
            'alias' => 'select.option',
        ],
        // 'select.user-option' => [
        //     'class' => Components\Select\UserOption::class,
        //     'alias' => 'wireui.select.user-option',
        // ],
        // 'toggle' => [
        //     'class' => Components\Toggle::class,
        //     'alias' => 'wireui.toggle',
        // ],
        // 'checkbox' => [
        //     'class' => Components\Checkbox::class,
        //     'alias' => 'wireui.checkbox',
        // ],
        // 'radio' => [
        //     'class' => Components\Radio::class,
        //     'alias' => 'wireui.radio',
        // ],
        // 'modal' => [
        //     'class' => Components\Modal::class,
        //     'alias' => 'wireui.modal',
        // ],
        // 'modal.card' => [
        //     'class' => Components\ModalCard::class,
        //     'alias' => 'wireui.modal.card',
        // ],
        // 'dialog' => [
        //     'class' => Components\Dialog::class,
        //     'alias' => 'wireui.dialog',
        // ],
    ],
];
