# pxa_realurl_fbclid

Extension just created to prevent the 404 error when url contains parameter `fbclid`.

This extension extends realurl ConfigurationReader and includes fbclid to defaultValues -> cache/ignoredGetParametersRegExp variable.

**!!! NOTE !!!**

The parameter also needs to be included in the `[FE][cHashExcludedParameters]` setting in install tool.
