<?php

/*
Linked Lists:
- each item stores the address of the next item in the list
- when inserting or deleting you never have to move your items
- good when you need to insert an element into the middle
- if there is enough space in memory, there is space for the linked list
- good when reading all items after another
- slow when you need to jump -> only sequential access, always starting at first element

Arrays:
- good for reading random elements, you can look up every element instantly through index
-> random access and sequential access
- when inserting or deleting, space is a problem, either not enough space so the
whole array has to be moved, or when deleting there will be empty space that is not used

*/