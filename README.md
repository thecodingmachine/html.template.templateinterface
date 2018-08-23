[![Latest Stable Version](https://poser.pugx.org/mouf/html.template.templateinterface/v/stable.svg)](https://packagist.org/packages/mouf/html.template.templateinterface)
[![Total Downloads](https://poser.pugx.org/mouf/html.template.templateinterface/downloads.svg)](https://packagist.org/packages/mouf/html.template.templateinterface)
[![Latest Unstable Version](https://poser.pugx.org/mouf/html.template.templateinterface/v/unstable)](https://packagist.org/packages/mouf/html.template.templateinterface)
[![License](https://poser.pugx.org/mouf/html.template.templateinterface/license)](https://packagist.org/packages/mouf/html.template.templateinterface)
[![Build Status](https://travis-ci.org/thecodingmachine/html.template.templateinterface.svg?branch=3.0)](https://travis-ci.org/thecodingmachine/html.template.templateinterface)
[![Coverage Status](https://coveralls.io/repos/thecodingmachine/html.template.templateinterface/badge.svg?branch=3.0&service=github)](https://coveralls.io/github/thecodingmachine/html.template.templateinterface?branch=3.0)

TemplateInterface: a base interface to manage HTML templates in your project
============================================================================


TemplateInterface is a [Mouf package](http://mouf-php.com) that is the base building block of all HTML templates in Mouf.

You can use it without Mouf, but most of the time, you will use Mouf and its install process to get quickly started.
Also, most of the time, you will not use the TemplateInterface package directly. Instead, you will use a Mouf template that is built using the TemplateInterface.
 
When you use a template object that implements TemplateInterface, you know this:
- The object has a "toHtml" method that will trigger the HTML output of the template. Call this method, and your template is displayed.
- The object has a "setTitle" method to set the title of the page.
- The object has a "getWebLibraryManager" method that returns a [web library manager](https://github.com/thecodingmachine/html.utils.weblibrarymanager).
  The WebLibraryManager can be used to add JS/CSS files to your template.

Depending on the template you will use, there will be one or more zones (main content, left menu, header, etc...)
This is *template specific*. If you use Mouf, each zone of the template will be represented by a HtmlBlock object.
You will directly access this block to add content in it.

Here is a sample pseudo code:

```php
// Let's access the "content" block:
Mouf::getContent()->addText("Hello world!");

// Let's write the template:
Mouf::getTemplate()->toHtml();
```

Internally, the template uses the "content" block, but you should not care about it.