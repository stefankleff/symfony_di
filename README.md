# symfony_di

Demonstration of https://github.com/symfony/symfony/issues/48895
- Latest symfony ^6.1 is used
- Latest doctrine 

## Usage 
- Checkout this repository
- Run `composer install`
- Run `rm -r var/cache && bin/console`

The following error shows up:
```
In MissingMappingDriverImplementation.php line 11:                                                                                                                    
It's a requirement to specify a Metadata Driver and pass it to Doctrine\ORM\Configuration::setMetadataDriverImpl(). 
```

## Insights 

- subsequent runs of bin/console are running without error
- the error is gone as soon as one of the EntityListeners is deleted (does not matter which on)
- It works with symfony/dependency-injection v6.1.8

| Dependency                         | Version |
|------------------------------------|---------|
| doctrine/annotations               | 1.14.2  |
| doctrine/cache                     | 2.2.0   |
| doctrine/collections               | 2.1.2   |
| doctrine/common                    | 3.4.3   |
| doctrine/dbal                      | 3.5.2   |
| doctrine/deprecations              | v1.0.0  |
| doctrine/doctrine-bundle           | 2.8.2   |
| doctrine/event-manager             | 2.0.0   |
| doctrine/inflector                 | 2.0.6   |
| doctrine/instantiator              | 1.5.0   |
| doctrine/lexer                     | 2.1.0   |
| doctrine/orm                       | 2.14.0  |
| doctrine/persistence               | 3.1.2   |
| doctrine/sql-formatter             | 1.1.3   |
| phpdocumentor/reflection-common    | 2.2.0   |
| phpdocumentor/reflection-docblock  | 5.3.0   |
| phpdocumentor/type-resolver        | 1.6.2   |
| psr/cache                          | 3.0.0   |
| psr/container                      | 2.0.2   |
| psr/event-dispatcher               | 1.0.0   |
| psr/log                            | 3.0.0   |
| symfony/cache                      | v6.1.10 |
| symfony/cache-contracts            | v3.2.0  |
| symfony/config                     | v6.1.3  |
| symfony/console                    | v6.1.9  |
| symfony/dependency-injection       | v6.1.9  |
| symfony/deprecation-contracts      | v3.2.0  |
| symfony/doctrine-bridge            | v6.1.9  |
| symfony/dotenv                     | v6.1.0  |
| symfony/error-handler              | v6.1.9  |
| symfony/event-dispatcher           | v6.1.9  |
| symfony/event-dispatcher-contracts | v3.2.0  |
| symfony/filesystem                 | v6.1.5  |
| symfony/finder                     | v6.1.9  |
| symfony/flex                       | v2.2.4  |
| symfony/framework-bundle           | v6.1.9  |
| symfony/http-foundation            | v6.1.9  |
| symfony/http-kernel                | v6.1.10 |
| symfony/polyfill-ctype             | v1.27.0 |
| symfony/polyfill-intl-grapheme     | v1.27.0 |
| symfony/polyfill-intl-normalizer   | v1.27.0 |
| symfony/polyfill-mbstring          | v1.27.0 |
| symfony/polyfill-php72             | v1.27.0 |
| symfony/polyfill-php80             | v1.27.0 |
| symfony/routing                    | v6.1.9  |
| symfony/runtime                    | v6.1.3  |
| symfony/service-contracts          | v3.2.0  |
| symfony/string                     | v6.1.9  |
| symfony/var-dumper                 | v6.1.9  |
| symfony/var-exporter               | v6.1.9  |
| symfony/yaml                       | v6.1.9  |
| webmozart/assert                   | 1.11.0  |

