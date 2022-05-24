# Changelog
All notable changes to this project will be documented in this file using the [Keep a CHANGELOG](https://keepachangelog.com/) principles.

## [1.2.5](https://github.com/kaiopiola/keygen-package/releases/tag/1.2.5) - 2022-05-23

### Added
- New function ```generateUnique``` to avoid duplicate keys. See [readme file](README) for more information.

## [1.2.0](https://github.com/kaiopiola/keygen-package/releases/tag/1.2.0) - 2022-01-17

### Added
- [phpunit](https://github.com/sebastianbergmann/phpunit) dependency and the first testcase by [@ordago](https://github.com/ordago) in [#11](https://github.com/kaiopiola/keygen-package/pull/11)

### Changes
- Moves default values to properties by [@ordago](https://github.com/ordago) in [#8](https://github.com/kaiopiola/keygen-package/pull/8)
- Function names:
<br> `$example->pattern()` to `$example->setPattern();`
<br> `$example->numbers()` to `$example->setNumbers();`
<br> `$example->letters()` to `$example>setLetters();`
