<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package CodeCode
 * @since CodeCode 1.0
 */

get_header(); ?>

<div class="row">
  <div class="col-md-2 quote">
     {% block quote %}
     {% endblock %}
     <a href="#" class="btn btn-snippet" data-toggle="modal" data-target="#snippetinfo">
        <span>
          Simplify your code with Sublime Text Snippets
      </span>
  </a>
</div>
<div class="col-md-10 content">
  <div class="row">
    {% block content %}
    {% endblock %}
</div>
</div>
</div>

<?php get_footer(); ?>
