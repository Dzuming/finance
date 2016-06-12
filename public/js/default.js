
var Category =  $("td.category_total").map(function() {
      return $(this).text();
}).get();
  var Strata =  $("td.strata_total").map(function() {
          return parseFloat($(this).text());
}).get();

  
  
   

  
   google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

 function drawChart() {
 
  var data = new google.visualization.DataTable();
          
          data.addColumn('string', 'Category');
          data.addColumn('number', 'Strata');
          for(i = 0; i < Category.length; i++)      
    data.addRow([Category[i], Strata[i]]);
          
        
        var formatter = new google.visualization.NumberFormat({fractionDigits: 2});
        formatter.format(data, 1);
        var options = {
          title: 'Spending report'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      };
       
    
  
 $( document ).ready(function() {
 var  selected =  $("#sel1").val();
 
  var url = window.location.href.split("/"); //replace string with location.href
var navLinks = $("nav:first a");
var li = $("nav:first li");
//console.log(navLinks);    
//console.log(url); 
var i=0;
var currentPage = url[url.length - 1];
//console.log(currentPage);
for(i;i<navLinks.length;i++){
  var lb = navLinks[i].href.split("/");
  //console.log(lb);
  if(lb[lb.length-1] == currentPage) {
   li[i-1].className = "active";
  }
  }
});

 $(".button").on("click", function() {

  var $button = $(this);
  var oldValue = $button.parent().find("input").val();
  
if (oldValue.length===0) {
   var newVal = 10;
   alert(oldValue);

    } 
    else{
  if ($button.text() == "+") {
     console.log (newVal);
   

    $button.parent().find("input").val(newVal);
      var newVal = parseFloat(oldValue) + 10;
      console.log (newVal);

    
    
    } 
    else {
   // Don't allow decrementing below zero
    if (oldValue > 0) {
      var newVal = parseFloat(oldValue) - 10;
    } else {
      newVal = 0;
    }
  }
}
  $button.parent().find("input").val(newVal);

});