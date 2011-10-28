***This is a work in progress. Things will change.***

Loosely based on http://symfony.com/doc/2.0/contributing/code/standards.html and PEAR standards.

1. Full <?php opening tags and no closing tag at all for class and standard PHP-only files.
2. Echoing is allowed using <?= syntax.
3. Indent by 4 spaces. Never use tabs.
4. Single space after commas everywhere.
5. No spaces after opening or before closing parenthesis.
6. Single spaces around operators.
7. Braces are forbidden for single-line statements. A line break after the one-line block is mandatory.
8. Opening and closing braces for classes and methods are on a new line. 
9. Opening braces for control structures (if, while, etc) are on the same line, separated by a single space.
10. PHP keywords are lowercase. (null, true, false, array, etc...)
11. Constants are always uppercase with words separated by underscores.
12. Follow the PSR-0 convention.
13. Class structure follows this order:
  1. Constants alphabetically
  2. Static Properties alphabetically (public, protected, private).
  3. Properties alphabetically (public, protected, private).
  4. Abstract Methods alphabetically (public, protected, private).
  5. Static Methods alphabetically (public, protected, private).
  6. Methods alphabetically (public, protected, private).
14. Name everything inside a class using camelCase.
15. Name everything outside a class using underscore_separated.
16. Avoid getters and setters.
17. Use dockblocks only when needed.
  1. Getters and setters doesn't need dockblocks. Make them self-descriptive.
  2. Constructors and Destructors doesn't need dockblocks. Make its parameters self-descriptive.
  3. Private and protected methods doesn't need dockblocks. Make them descriptive or velociraptors will come for you.
18. Type-hint everything you can. 
  1. Untyped parameters must be considered "mixed" always and handle type casting if appropriate.
  2. Pass-only parameters must be preferable not altered.
19. Use naming conventions for common operations:
  1. get() or getXXX()
  2. set() or setXXX()
  3. has() or hasXXX()
  4. all() or getXXXs()
  5. replace()
  6. remove() or removeXXX()
  7. clear() or clearXXX()
  8. isEmpty() or isEmptyXXX()
  9. add() or addXXX()
  10. register() or registerXXX()
  11. count() or countXXX()
  12. keys()
