<?php if (!defined('JOIN_CORE') || !JOIN_CORE) die(); ?>

<pre>
-------- 5.09.2022 --------
1) создан класс Page для работы с содержимым html страницы.
2) добавлена защита скриптов от прямого вызова в init.php.
3) добавлен trait Singleton в libs.
4) добавлен автолодер
-------- 6.12.2020 --------
1) создан контроллер AppController
2) создан шаблон новостей в templates
3) переписана логика с 8й версии языка на 7.4 тк могут быть проблемы с неймспейсами и с возвращаемыми типами
    -------- 6.12.2020 --------
1)большинство методов классов Application и Page переделанны под вызов в чейнинг-цепочку для удобства чтения кода
2)пофикшен глюк, который при создании в классе Page через конструктор объекта класса Application приводил
к out of memory, в итоге проблему решил через создание объекта с помощью функции.
3)реализованна логика подмены в классе application с сохранения уникальности для js_скриптов и css_стилей
</pre>
