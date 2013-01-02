---
layout: post
title: GALLERIE DE PHOTOS D’AGBODRAFO
---

{{ page.title }}
================

{% capture include_image1_to_markdown %}
	{% include image-batiment-royal-ppe.md %}
{% endcapture %}
{{ include_image1_to_markdown | markdownify }}

{% capture include_image2_to_markdown %}
	{% include image-eglise-catholique-ppe.md %}
{% endcapture %}
{{ include_image2_to_markdown | markdownify }}