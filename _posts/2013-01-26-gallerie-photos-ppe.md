---
layout: post
title: GALLERIE DE PHOTOS D’AGBODRAFO
categories: menuppe
---

## {{ page.title }}

<div id="sliderFrame" markdown="1">
<div id="slider" markdown="1">
{% for post in site.categories.photosppe %}
 <div class="figure" markdown="1">
  <img alt="{{ post.caption }}" src="{{ post.image }}" title="{{ post.imagetitle }}"/>
 </div>
{% endfor %}
</div>
</div>