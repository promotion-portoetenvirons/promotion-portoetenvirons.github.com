console.log('This would be the main JS file.');

$('#lien_externe p a').attr('target','_blank');

$(document).ready(function(){
 $("a[@href$='.pdf']").attr('target','_blank');
});  