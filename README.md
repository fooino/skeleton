# Fooino skeleton package

## ⬇️ Installation

You can install the package


1. With composer:

```bash
composer require fooino/skeleton
```

2. With Docker(for running and modify the package)
```bash
mkdir fooino && cd fooino && mkdir packages

cd fooino/packages && git clone https://github.com/fooino/skeleton.git

cd fooino/ && git clone https://github.com/fooino/laravel-fooino-packages-docker.git

cd ./fooino/laravel-fooino-packages-docker && docker-compose -p fooino up -d --build

docker exec -it fooino-php bash

cd ./packages/skeleton

composer update

./vendor/bin/pest

exit
```

## 📝 Documentation

1. [Configuration](./docs/markdown/CONFIGURATION.md)


## 🚀 Change log

Please see [CHANGELOG](CHANGELOG.md) for more information about recent changes.

## ✅ Testing

```bash
./vendor/bin/pest # or composer pest
```

## 👨‍💻 Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details to how contribute.

## 🐞 Security

If you've found a bug regarding security please mail [sajadsholidev@gmail.com](mailto:sajadsholidev@gmail.com)

## 🔥 Credits

-   [Sajad Sholi](mailto:sajadsholidev@gmail.com)
-   [All Contributors](../../contributors)

## ⚖️ License

PRIVATE CODE. Please see [License File](LICENSE.md) for more information.

---

## 🔄 Scaffold a New Package From This Skeleton

Use these instructions to transform this skeleton into a new Laravel package (e.g. `fooino/media`).

### Variables

| Placeholder | Example value (`media`) | Meaning |
|---|---|---|
| `{PACKAGE_SLUG}` | `media` | Lowercase kebab slug, used in composer name, config keys, directory paths |
| `{PACKAGE_NAMESPACE}` | `Media` | PascalCase, used in PHP namespaces and class names |
| `{PACKAGE_CONSTANT}` | `MEDIA` | UPPER_SNAKE_CASE, used in PHP constants |
| `{PACKAGE_LOWER}` | `media` | Lowercase, used in translation/view namespaces |

### Step-by-step replacements

Apply these changes **in order**. After each file edit, verify the changes before moving on.

#### 0. Gather info

Ask the user for their new package slug (e.g. `media`). Derive the other three variables from it:

| Derived from `{PACKAGE_SLUG}` | Rule | Example |
|---|---|---|
| `{PACKAGE_NAMESPACE}` | `Str::studly(...)` | `media` → `Media` |
| `{PACKAGE_CONSTANT}` | `Str::upper(Str::snake(...))` | `media` → `MEDIA` |
| `{PACKAGE_LOWER}` | `Str::lower(...)` | `media` → `media` |

#### 1. `composer.json`

| Replace | With |
|---|---|
| `"name": "fooino/skeleton"` | `"name": "fooino/{PACKAGE_SLUG}"` |
| `"description": "The fooino skeleton package with..."` | `"description": "The fooino {PACKAGE_LOWER} package with..."` |
| `"skeleton"` in `keywords` array | `"{PACKAGE_SLUG}"` |
| `"Fooino\\\\Skeleton\\\\": "src/"` | `"Fooino\\\\{PACKAGE_NAMESPACE}\\\\": "src/"` |
| `"Fooino\\\\Skeleton\\\\Database\\\\": "database/"` | `"Fooino\\\\{PACKAGE_NAMESPACE}\\\\Database\\\\": "database/"` |
| `"Fooino\\\\Skeleton\\\\Database\\\\Factories\\\\": "database/factories/"` | `"Fooino\\\\{PACKAGE_NAMESPACE}\\\\Database\\\\Factories\\\\": "database/factories/"` |
| `"Fooino\\\\Skeleton\\\\Tests\\\\": "tests/"` | `"Fooino\\\\{PACKAGE_NAMESPACE}\\\\Tests\\\\": "tests/"` |
| `"Fooino\\\\Skeleton\\\\Providers\\\\SkeletonServiceProvider"` | `"Fooino\\\\{PACKAGE_NAMESPACE}\\\\Providers\\\\{PACKAGE_NAMESPACE}ServiceProvider"` |

#### 2. Rename file: `src/Providers/SkeletonServiceProvider.php`

Rename to `src/Providers/{PACKAGE_NAMESPACE}ServiceProvider.php`.

#### 3. `src/Providers/{PACKAGE_NAMESPACE}ServiceProvider.php`

| Replace | With |
|---|---|
| `namespace Fooino\Skeleton\Providers;` | `namespace Fooino\{PACKAGE_NAMESPACE}\Providers;` |
| `class SkeletonServiceProvider extends ServiceProvider` | `class {PACKAGE_NAMESPACE}ServiceProvider extends ServiceProvider` |
| Every `fooino-skeleton-{xxx}` (config, migrations, langs, assets, views, publish-all) | `fooino-{PACKAGE_SLUG}-{xxx}` |
| Every `lang_path("vendor/fooino/skeleton")` | `lang_path("vendor/fooino/{PACKAGE_SLUG}")` |
| Every `public_path('vendor/fooino/skeleton')` | `public_path('vendor/fooino/{PACKAGE_SLUG}')` |
| Every `resource_path("views/vendor/fooino/skeleton")` | `resource_path("views/vendor/fooino/{PACKAGE_SLUG}")` |
| `SkeletonServiceProvider::class` | `{PACKAGE_NAMESPACE}ServiceProvider::class` |
| `$this->loadTranslationsFrom(__DIR__ . "/../../lang", 'skeleton');` | `$this->loadTranslationsFrom(__DIR__ . "/../../lang", '{PACKAGE_LOWER}');` |
| `$this->loadViewsFrom(__DIR__ . "/../../resources/views", 'skeleton');` | `$this->loadViewsFrom(__DIR__ . "/../../resources/views", '{PACKAGE_LOWER}');` |
| `config('fooino-skeleton.{xxx}')` | `config('fooino-{PACKAGE_SLUG}.{xxx}')` |
| `SkeletonEventServiceProvider::class` | `{PACKAGE_NAMESPACE}EventServiceProvider::class` |

#### 4. `tests/Unit/ArchitectureUnitTest.php`

| Replace | With |
|---|---|
| `namespace Fooino\Skeleton\Tests\Unit;` | `namespace Fooino\{PACKAGE_NAMESPACE}\Tests\Unit;` |
| Every `'Fooino\Skeleton\*'` (including single backslash `\*` matches) | `'Fooino\{PACKAGE_NAMESPACE}\*'` |

#### 5. `tests/TestCase.php`

| Replace | With |
|---|---|
| `namespace Fooino\Skeleton\Tests;` | `namespace Fooino\{PACKAGE_NAMESPACE}\Tests;` |
| `use Fooino\Skeleton\Providers\SkeletonServiceProvider;` | `use Fooino\{PACKAGE_NAMESPACE}\Providers\{PACKAGE_NAMESPACE}ServiceProvider;` |
| `SkeletonServiceProvider::class` | `{PACKAGE_NAMESPACE}ServiceProvider::class` |

#### 6. `tests/Pest.php`

| Replace | With |
|---|---|
| `pest()->extend(Fooino\Skeleton\Tests\TestCase::class);` | `pest()->extend(Fooino\{PACKAGE_NAMESPACE}\Tests\TestCase::class);` |

#### 7. `src/helpers.php`

| Replace | With |
|---|---|
| `FOOINO_SKELETON_CONSTANTS_DEFINED` (both occurrences) | `FOOINO_{PACKAGE_CONSTANT}_CONSTANTS_DEFINED` |

#### 8. `phpunit.xml`

| Replace | With |
|---|---|
| `name="Skeleton Package Tests"` | `name="{PACKAGE_NAMESPACE} Package Tests"` |

#### 9. `phpdoc.dist.xml`

| Replace | With |
|---|---|
| `<title>Skeleton API Documentation</title>` | `<title>{PACKAGE_NAMESPACE} API Documentation</title>` |

#### 10. `CHANGELOG.md`

| Replace | With |
|---|---|
| `fooino/skeleton` | `fooino/{PACKAGE_SLUG}` |

#### 11. `CONTRIBUTING.md`

| Replace | With |
|---|---|
| `Fooino Skeleton Package` | `Fooino {PACKAGE_NAMESPACE} Package` |

#### 12. `AGENTS.md`

| Replace | With |
|---|---|
| `Fooino Skeleton` (title) | `Fooino {PACKAGE_NAMESPACE}` |
| `Skeleton foundational library` | `{PACKAGE_NAMESPACE} foundational library` |

#### 13. `README.md` (this file)

| Replace | With |
|---|---|
| `Fooino skeleton package` | `Fooino {PACKAGE_LOWER} package` |
| `composer require fooino/skeleton` | `composer require fooino/{PACKAGE_SLUG}` |
| `git clone https://github.com/fooino/skeleton.git` | `git clone https://github.com/fooino/{PACKAGE_SLUG}.git` |
| `cd ./packages/skeleton` | `cd ./packages/{PACKAGE_SLUG}` |
| Everything from "🔄 Scaffold a New Package..." to end of file | **Delete** (these instructions are only for the scaffolding step itself) |

#### 14. `.github/workflows/main.yml`

| Replace | With |
|---|---|
| `Copy docs and README to skeleton directory` | `Copy docs and README to {PACKAGE_SLUG} directory` |
| `fooino-docs/skeleton` (all occurrences) | `fooino-docs/{PACKAGE_SLUG}` |
| `git add skeleton/` | `git add {PACKAGE_SLUG}/` |
| `"Update skeleton docs from fooino/skeleton@..."` | `"Update {PACKAGE_SLUG} docs from fooino/{PACKAGE_SLUG}@..."` |

### Final cleanup

```bash
# Remove this scaffolding section from README.md
# (delete everything from "🔄 Scaffold a New Package..." to end of file)

# Regenerate autoloader
composer dump-autoload

# Run tests to verify
./vendor/bin/pest
```