# Element - Very Basic WordPress Starter Theme

## Goal
The idea behind Element is to provide the most essential, elemental, bare bones WordPress theme possible for website development. Very clean, minimal, basic.

## Philosophy
In the search for a very basic starter WordPress theme, I constantly found not so stater WordPress code (most of which was too advanced for beginner WordPress developers), CSS styles that made assumptions, CSS preprocessors, classes to dictate a grid in the HTML, or other types of "noise" that would have had to be cleaned up in order to use it.

This theme sticks with the most basic WordPress code, and assumes the user knows nothing about WordPress by providing commentary. This theme also assumes that the user knows basic CSS and HTML. 

The CSS provides a very base line groundwork to take care of CSS file organzation, resets, and a few basic elements.

## Grid System
Element also uses a 1200px max site width, with a 12 column grid. This makes the assumption that the site is only 1200px wide, but that can be removed if you want a full width site. 1200px wide with 12 columns makes the percentages above much easier to handle and the math easier.

12 columns is a common grid in that it is divisible by 2, 3, 4, 6, and 12. The grid system does NOT depend on appending classes to HTML elements to span multiple columns, thus requiring math of the following to span columns:

* Margin/gutter = 2%
* 1 column =   6.5% width
* 2 columns =  15% width    (6.5% x 2 columns plus 2% x 1 gutter)
* 3 columns =  23.5% width  (6.5% x 3 columns plus 2% x 2 gutters)
* 4 columns =  32% width    (6.5% x 4 columns plus 2% x 3 gutters)
* 5 columns =  40.5% width  (6.5% x 5 columns plus 2% x 4 gutters)
* 6 columns =  49% width    (6.5% x 6 columns plus 2% x 5 gutters)
* 7 columns =  57.5% width  (6.5% x 7 columns plus 2% x 6 gutters)
* 8 columns =  66% width    (6.5% x 8 columns plus 2% x 7 gutters)
* 9 columns =  74.5% width  (6.5% x 9 columns plus 2% x 8 gutters)
* 10 columns = 83% width    (6.5% x 10 columns plus 2% x 9 gutters)
* 11 columns = 91.5% width  (6.5% x 11 columns plus 2% x 10 gutters)
* 12 columns = 100% width   (6.5% x 12 columns plus 2% x 11 gutters)
