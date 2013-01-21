---
layout: post
title: CONTACTS
categories: menuppe
published: false
---

## {{ page.title }}

<form id="ajax_form" action="send.php" method="post" markdown="1">
<label for="nom" markdown="1">Nom et prénom </label> 
<input id="nom" type="text" name="nom" markdown="1" maxlength="40" />
<br/>

<label for="email" markdown="1">Adresse mail </label> 
<input id="email" type="text" name="email" markdown="1" maxlength="40" /> 
<br/>

<label for="message" markdown="1">Message </label> 
<textarea id="message" name="message" rows="10" cols="47">Votre Message</textarea>
<br/>

<button type="submit" markdown="1">Envoyer formulaire</button>
<button type="reset" markdown="1">Effacer</button>
<br/>
</form>

