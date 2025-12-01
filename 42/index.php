<?php

// In addition to include and require, PHP also provides include_once() and require_once(). These statements behave the same as their counterparts but only include or require the specified file if it has not already been included before. This can be useful to avoid function or variable redefinition errors:
    
include_once 'functions.php';
include_once 'functions.php';  // No error is issued and the file is not re-added

echo sumInteger(1, 2);  // Outputs: 3

// With these examples, the advantage of reusing functions in different files becomes clearer, making it much simpler to use.