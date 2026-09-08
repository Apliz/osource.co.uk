# views/ directory

## views/content/

Files MUST be prefixed with `v_`
Files MUST be `PHP` files
Filenames MUST be consistent with a valid `$_SERVER['REQUEST_URI']` string

Files MAY contain `HTML` script.
Files MAY contain references to their respective `CSS` style file

Files MUST NOT contain `<head>` configuration
Files MUST NOT contain inline `CSS` styling
Files MUST NOT contain `includes()`

## views/procedure/

Files MUST be prefixed with `p_`
Files MUST be `PHP` files
Filenames MUST be consistent with a valid `$_SERVER['REQUEST_URI']` string

Files MAY contain includes to `CSS` styles
Files MAY contain includes to public media (images/etc)

`p_` files MUST NOT contain natural children of `<body>`
`p_` files MUST NOT contain inline `CSS` styling
