<?php

/* Operations will be evaluated in the following order:

1. Any operation wrapped in parentheses (())
2. Exponents (**)
3. Multiplication (*) and division (/)
4. Addition (+) and subtraction (-) */

echo 1 + 3 * 9; // Prints: 28
echo (1 + 3) * 9; // Prints: 36