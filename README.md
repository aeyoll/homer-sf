# homer-sf

A clone of [homer](https://github.com/bastienwirtz/homer), written in PHP for simplicity. The goal is to have a simple dashboard from a configuration file, without the hassle of Node tools. This is and will *not* be feature complete.

Installation
---

```
git clone https://github.com/aeyoll/homer-sf
cd homer-sf
composer install
cp config.yml.dist config.yml # Add your services here
```

You can also add services icons in the `public/tools` folder.

Launching the app
---

In the virtual env:

```
symfony server:start
```
