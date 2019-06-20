# phpstan e  composer

## phpstan tools per il controllo della qualità del codice

### installazione 

**pagina ufficiale:** https://github.com/phpstan/phpstan

installazione:

```bash
composer require --dev phpstan/phpstan
```

**eseguire phpstan**

```bash
vendor/bin/phpstan analyse src tests
```
*in questo progetto:*

```bash
vendor/bin/phpstan analyse class _test --level 7
```

### come includere cartelle nell' autoloading
è possibile aggiornare autoload di composer includendo il percorso delle classi personalizzate.

*esempio di configurazione di composer.json*

```json
{
  "autoload": {
    "classmap": [
      "path/to/FirstClass.php",
      "path/to/class"
    ]
  }
}
```

*in questo progetto:*

```json
{
    "require-dev": {
        "phpstan/phpstan": "^0.11.8"
    },
    "autoload": {
        "classmap": [
            "class"
        ]
    }
}
```
per aggiornare l'autoloading dalla shell:

```bash
    composer dump-autoload -o
```

## alternative

si può indicare nel file di configurazione di **phpstan** dove caricare le classi che non usano l'autoload di **composer**

<!-- pagebreak -->
**riferimento:** https://phpenthusiast.com/blog/how-to-autoload-with-composer


**livelli di controllo in stan**
https://gist.github.com/carusogabriel/62698312f451589afd956eddac2dc07a

**tutorial su phpstan**
https://medium.com/@hatajoe/how-to-use-phpstan-940ba1de6832