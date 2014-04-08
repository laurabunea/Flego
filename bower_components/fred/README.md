# Fred

Fred is a collection of common CSS patterns for websites.

## Building Fred
 
To build a custom Fred package from the command line, run:

```
> npm install
> grunt
```

...and follow the directions of your cabin crew.

Grunt will make a `dist/lib/fred.scss`, and compile `dist/fred.css` for your project


## Working with your project

You want to tweak all Fred's variables and make everything pretty for your project.

You also want to keep Fred under some kind of package management, like bower. 

The `_fred-theme.scss` is copied into your sass directory and included by `lib/fred.scss`.


```sass
// style.scss

@import "path/to/fred";

// Rest of your styles here!

```

Now you can tweak away, while still being able to update Fred without nuking all your hard work.

## Documentation



Please also read [Fred's documentation](http://springload.github.io/Fred.scss/).
