console.log('This would be the main JS file.');

$('#lien_externe p a').attr('target','_blank');

 $(document).ready(function(){
 $("a[@href^='http']").attr('target','_blank');
});  