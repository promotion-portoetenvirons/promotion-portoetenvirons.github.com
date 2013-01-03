---
layout: post
title: GALLERIE DE PHOTOS D’AGBODRAFO
---

{{ page.title }}
================
<div id="sliderFrame">
<div id="slider">
{% capture include_image1_to_markdown %}
	{% include image-batiment-royal-ppe.md %}
{% endcapture %}
{{ include_image1_to_markdown | markdownify }}

{% capture include_image2_to_markdown %}
	{% include image-eglise-catholique-ppe.md %}
{% endcapture %}
{{ include_image2_to_markdown | markdownify }}

{% capture include_image3_to_markdown %}
	{% include image-ceremonie-vaudou-ppe.md %}
{% endcapture %}
{{ include_image3_to_markdown | markdownify }}

{% capture include_image4_to_markdown %}
	{% include image-foule-vaudou-ppe.md %}
{% endcapture %}
{{ include_image4_to_markdown | markdownify }}

{% capture include_image5_to_markdown %}
	{% include image-activites-peche-ppe.md %}
{% endcapture %}
{{ include_image5_to_markdown | markdownify }}
</div>
</div>