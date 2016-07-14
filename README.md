Sitemap Module
==============



This module allows you to create XML sitemaps. This module supports the current types of sitemap:

- [Standard](http://www.sitemaps.org/protocol.php)
- [Code Search](http://www.google.com/support/webmasters/bin/answer.py?answer=75224)
- [Geo](http://www.google.com/support/webmasters/bin/answer.py?answer=94554)
- [Mobile](http://www.google.com/support/webmasters/bin/answer.py?answer=34648)
- [News](http://www.google.com/support/webmasters/bin/answer.py?hl=en&answer=74288)
- [Video](http://www.google.com/support/webmasters/bin/answer.py?answer=80472)

Installation
------------

    git git submodule add https://github.com/segsalerty2013/kohana-sitemap.git modules/sitemap

How to Use
------------
You need 'cache' and 'sitemap' modules active
Any Controller you want to capture its 'actions' url to be added to the sitemap
Add the following to the constructor like this:

    parent::__construct($request, $response);
    Sitemap::record($this->request);
    
    

Keeping up to date
-------------------

Run

    git pull

in the repository, then commit the change to the submodule in your parent
repository.


Bugs
----

Please file all bugs, patches and feature requests to the [Sitemap Issue Tracker](https://github.com/segsalerty2013/kohana-sitemap/issues)

ISC License
----

Copyright (c) 2010 - 2012, Mathew Davies <thepixeldeveloper@googlemail.com>

Contribution (c) 2016, Mustafa Segun <segsalerty@yahoo.com>

Permission to use, copy, modify, and/or distribute this software for any
purpose with or without fee is hereby granted, provided that the above
copyright notice and this permission notice appear in all copies.

THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES
WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR
ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES
WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN
ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF
OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS SOFTWARE.
