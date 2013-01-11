---
layout: post
title: GALLERIE DE PHOTOS D’AGBODRAFO
categories: menuppe
---

## {{ page.title }}

<div id="sliderFrame" markdown="1">
<div id="slider" markdown="1">
{% for page in page.categories.photosppe %}
 <div class="figure" markdown="1">
  ![{{ page.caption }}]({{ page.image }} {{ page.imagetitle }})
 </div>
{% endfor %}
</div>
</div>