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

1. Copy the skeleton into `packages/<name>`.
2. From the copied directory, run the `/new-package` command and answer the package name (for example `product`).
3. The command renames the namespace, provider, tests, docs, and workflow, and removes this section.

Without Kilo, point your AI agent at `vendor/fooino/lodestar/commands/new-package.md` and have it follow that command.
