# Patch to install the D3 Unzer plugin in OXID EE 6.5

Due to an error in the Enterprise Metapackage (https://bugs.oxid-esales.com/view.php?id=7349), the D3 Unzer plugin may not be installed. Composer then reports a version conflict with the `unzerdev/php-sdk` package.

## first add this to your main composer file

```composer require cweagans/composer-patches```

## add this to your main composer file
```
    "extra": {
      "patches": {
        "oxid-esales/oxideshop-metapackage-ee": {
          "Fixes dependencies bug for D3 Unzer plugin in OXID Metapackage EE 6.5":
          "https://git.d3data.de/D3Public/Unzer/raw/branch/Patch_EE65/0007349_Unzer_dependency.patch"
        }
      },
      "enable-patching": true
    },
```

## run this command

```composer install```

Run the D3 Unzer installation steps again.