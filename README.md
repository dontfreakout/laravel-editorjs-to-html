# Editor.js blocks themeable parser for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/dontfreakout/laravel-editorjs-to-html.svg?style=flat-square)](https://packagist.org/packages/dontfreakout/laravel-editorjs-to-html)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/dontfreakout/laravel-editorjs-to-html/run-tests?label=tests)](https://github.com/dontfreakout/laravel-editorjs-to-html/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/dontfreakout/laravel-editorjs-to-html/Check%20&%20fix%20styling?label=code%20style)](https://github.com/dontfreakout/laravel-editorjs-to-html/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/dontfreakout/laravel-editorjs-to-html.svg?style=flat-square)](https://packagist.org/packages/dontfreakout/laravel-editorjs-to-html)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require dontfreakout/laravel-editorjs-to-html
```

[comment]: <> (You can publish and run the migrations with:)

[comment]: <> (```bash)

[comment]: <> (php artisan vendor:publish --provider="Dontfreakout\LaravelEditorjsToHtml\LaravelEditorjsToHtmlServiceProvider" --tag="laravel-editorjs-to-html-migrations")

[comment]: <> (php artisan migrate)

[comment]: <> (```)

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Dontfreakout\LaravelEditorjsToHtml\LaravelEditorjsToHtmlServiceProvider" --tag="laravel-editorjs-to-html-config"
```

This is the contents of the published config file:

```php
return [
    'default-template' => 'default'
];
```

## Usage
Package provides custom blade component to render Editor.js block JSON 
```blade
<x-dfk-editor-to-html :editor-data="$editorjsJson" template="tailwind" />
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Dontfreakout (Martin Vlček)](https://github.com/dontfreakout)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
