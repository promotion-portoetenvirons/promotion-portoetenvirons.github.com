---
layout: post
title: GALLERIE DE PHOTOS D’AGBODRAFO
categories: menuppe
---

## {{ page.title }}

<div id="sliderPost" markdown="1">
<div class="floatL" markdown="1">
<div id="sliderFrame" markdown="1">
<div id="slider" markdown="1">
{% for post in site.categories.photosppe %}
 <div class="figure" markdown="1">
  ![{{ post.caption }}]({{ post.image }} "{{ post.imagetitle }}")
 </div>
{% endfor %}
</div>
</div>
</div>
<div class="floatL" markdown="1">
<div id="mcts1" markdown="1">
  {% for post in site.categories.photosppe %}
   ![]({{ post.thumbnail }} "{{ post.imagetitle }}")  
  {% endfor %}  
  <a class="navPrev" onselectstart="return false" markdown="1"></a>
  <a class="navPause" onselectstart="return false" title="Pause" markdown="1"></a>
  <a class="navNext" onselectstart="return false" markdown="1"></a>
</div>
</div>
<div style="clear:both;" markdown="1"></div>
</div>