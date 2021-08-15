# Test_Sakana

## Configuration
### Model/message.php

Afin de connecter votre base de donnée, vous devez mettre vos informations dans le fichier `Model/message.php`.

```php
    35: $user = 'root';
    36: $pass = 'root';
    37: $db_name = 'Sakana';
    38: $db_host = 'localhost';
```

Vous devez également avoir une table "Messages" avec la structure suivante :

- id
- prenom
- messages
