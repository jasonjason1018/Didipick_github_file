$('#checkboxGroup input').click(function(){
  if($(this).prop('checked')){
     $('#checkboxGroup input:checkbox').prop('checked',false);
     $(this).prop('checked',true);
  }
});
$('#checkboxGroup2 input').click(function(){
  if($(this).prop('checked')){
     $('#checkboxGroup2 input:checkbox').prop('checked',false);
     $(this).prop('checked',true);
  }
});
$('#checkboxGroup2 input').click(function(){
  if($(this).prop('checked')){
     $('#checkboxGroup2 input:radio').prop('checked',false);
     $(this).prop('checked',true);
  }
});


$('#checkboxGroup4 input').click(function(){
  if($(this).prop('checked')){
     $('#checkboxGroup4 input:checkbox').prop('checked',false);
     $(this).prop('checked',true);
  }
});

$('#checkboxGroup-time input').click(function(){
  if($(this).prop('checked')){
     $('#checkboxGroup-time input:checkbox').prop('checked',false);
     $(this).prop('checked',true);
  }
});

$('#web_area input').click(function(){
  if($(this).prop('checked')){
     $('#web_area input:checkbox').prop('checked',false);
     $(this).prop('checked',true);
  }
});