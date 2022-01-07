# Different variations of upload

https://ruslan-website.com/upload/php/contact.html

https://ruslan-website.com/upload/ajax/contact.html

https://ruslan-website.com/upload/crop-preview/

https://ruslan-website.com/upload/multi-drop/

# Progress bar for long processes

- Via Layer 4: https://stackoverflow.com/a/23036534
- Via AJAX loop in batches: https://stackoverflow.com/a/19332078

```js
var total = 42; // Total gotten from a previous AJAX call.

function function_name()
{
    jQuery.ajax({
        type: 'POST',
        url: ajaxurl,
        data: {xxx: 'xxx', yyy: yyy},
        async: true,
        success: function(res) {
            var res    = JSON.parse(res);
            done      += parseInt(res.done);
            
            if (done < total) 
            {
                // Update progress bar
                function_name();
            }
        }
    });
}
```
