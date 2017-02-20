<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package CodeCode
 * @since CodeCode 1.0
 */
?>

		</div><!-- .site-content -->
		<footer>
		<nav class="menu footer row">
    <div class="col-md-2 social">
      {% include "partials/sig.html" %}
  </div>
  <div class="col-md-10">
      <ul>
        {% for category in categories %}<li><a class="{{category.status}} {{category.name}}" href="{{category.link}}.html">{{category.name}}</a>
    </li>{% endfor %}
    <li class="gitter">
        <a href="https://gitter.im/nonlinear/codecode?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge"><img src="https://badges.gitter.im/Join%20Chat.svg"/></a>
    </li>
</ul>
</div>
</nav>
		</footer><!-- .site-footer -->
	</div><!-- .container -->
<?php wp_footer(); ?>
</body>
</html>
