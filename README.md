pyro-post-select
================

Create a dropdown for all the posts in your blog.

How To Use
----------

### Basics

* Rename this folder to `post_select`
* Add the field type as you would normally
* Choose "Post" as the type
* Enjoy it on a page

### In the layout

This field returns the post id that you selected. Here is the basic usage:

``` html
<!-- check if a post was found -->
{{ if page:my_chosen_slug }}
  <h4><a href="{{ page:my_chosen_slug:url }}">{{ page:my_chosen_slug:title }}</a></h4>
  <p>{{ page:my_chosen_slug:intro }}</p>
  <a href="{{ page:my_chosen_slug:url }}">Read Article</a>
{{ endif }}
```

You can see that you get access to the convenience `url`, just like the blog plugin.

License
-------

(The MIT License)

Copyright (c) 2015 James Doyle(james2doyle) james2doyle@gmail.com

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
