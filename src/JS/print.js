request = new XMLHttpRequest();
text = request.open('GET', 'https://localhost:5000', true);
console.log(text)
try {

  var menu = document.getElementById("sectionMenu");

  for(var key in text){

  }
  var opt0 = new Option(val);
  
  opt0.value = "0";
  opt0.text = "teste";
  menu.add(opt0, menu.options[0]);

  window.alert('TOP')

} catch {
  window.alert('ERRO!')
}
