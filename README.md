# Sudoku-Solver by Sascha Vonier
A PHP-Algorithm for solving a 9x9-Sudoku

### Use the sudoku solver:
First implement this repository into your webserver root directory. Then navigate to public/index.php

**Demo of this sudoku solver:**
[voniersa.de/sudokusolver](https://voniersa.de/sudokusolver)

### Reader
The class reads the user-inputs from the Sudoku-interface.

### BoxChecker
The class BoxChecker checks for differences of the content from the individually boxes.

### ColumnChecker
The class ColumnChecker checks for differences of the content from the individually columns.

### RowChecker
The class RowChecker checks for differences of the content from the individually rows.

### StartPage
The StartPage solves the Sudoku with a backtracking-algorithm.

### StartProjector
The StartProjector supplements the html-Template.
