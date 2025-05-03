# Noor

**Noor** is a minimalist PHP framework for building powerful, server-driven web applications with elegance and control.

<img src="public/cover.png" alt="Noor Logo" style="width: 100%; display: block;" />

> A Project by Qore

---

## Philosophy

Noor is not just a routing core. It is a **complete micro-framework** built for developers who prefer precision over abstraction, clarity over convention, and performance over noise. With Noor, you get:

* 🧭 A clean, expressive **router**
* 🧱 Lightweight **MVC structure**
* 🧩 Built-in support for **HTMX** and server-rendered fragments
* ⚡ Zero dependency **SQLite integration**
* 🧠 Pure PHP templating with **raw partials** or custom engines

---

## File Structure

```
/project-root
├── index.php              # Front controller
├── routes.php             # Route definitions
├── /controllers           # Controllers (e.g. HomeController.php)
├── /models                # Data layer (e.g. Student.php)
├── /views                 # HTML views and partials
├── /lib
│   ├── Noor.php           # Core framework logic (router, dispatcher)
│   └── db.php             # SQLite connection bootstrap
└── /public                # Static assets (css, js, icons)
```

---

## Quick Start

```bash
git clone https://github.com/qoredev/noor-framework.git
cd noor-framework
php -S localhost:8000
```

Make sure `db/database.sqlite` exists and is writable.

---

## Example Route Definition

```php
// index.php

require 'lib/Noor.php';
require 'routes.php';

$noor->dispatch();
```

```php
// routes.php

$noor = new Noor();

$noor->get('/', 'HomeController@index');
$noor->get('/students', 'StudentController@index');
```

---

## Contributing

Pull requests are welcome. Keep it lean, focused, and composable.

---

## License

MIT License © Qore 2025
