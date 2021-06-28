# Bard add-on for Statamic 3 for adding a span and class to selected content

![Statamic 3.0+](https://img.shields.io/badge/Statamic-3.0+-FF269E?style=for-the-badge&link=https://statamic.com)

This is an example Bard addon for Statamic 3 that adds a span with a class to selected content.

## Installation

Install it via the composer command

```
composer require bellevue7k/span-classes
```

In your Bard editor instances (note, *not* the configuration view), you'll see the new button added.

Select some text, click the new icon, and select a class type, and voilà!

## Output

When output, the markup will be a span with a class attached.

```html
<p>This is my text with <span class="whiteSpace-noWrap">whiteSpace-noWrap</span> highlighted using the addon.</p>
```

## Use on the front end

You will need to add classes to your front end stylesheets to see them come through there too.

A finished class might be ``whiteSpace-noWrap`` for example.

Your CSS for your frontend can then target that specific class.

```scss
.whiteSpace-noWrap {
    hyphens:none;
        
    /* more class types */
}
```

## License

This addon is licensed under the MIT license.
