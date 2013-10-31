<?php
namespace Aura\Html\Helper\Input;

return array(
    'button'            => function () { return new Generic; },
    'checkbox'          => function () { return new Checkbox; },
    'color'             => function () { return new Generic; },
    'date'              => function () { return new Generic; },
    'datetime'          => function () { return new Generic; },
    'datetime-local'    => function () { return new Generic; },
    'email'             => function () { return new Generic; },
    'file'              => function () { return new Generic; },
    'hidden'            => function () { return new Generic; },
    'image'             => function () { return new Generic; },
    'month'             => function () { return new Generic; },
    'number'            => function () { return new Generic; },
    'password'          => function () { return new Generic; },
    'radio'             => function () { return new Radio; },
    'range'             => function () { return new Generic; },
    'reset'             => function () { return new Generic; },
    'search'            => function () { return new Generic; },
    'select'            => function () { return new Select; },
    'submit'            => function () { return new Generic; },
    'tel'               => function () { return new Generic; },
    'text'              => function () { return new Generic; },
    'textarea'          => function () { return new Textarea; },
    'time'              => function () { return new Generic; },
    'url'               => function () { return new Generic; },
    'week'              => function () { return new Generic; },
];
