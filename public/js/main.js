$(function() {
    var addresspickerMap = $( "#dep" ).addresspicker({
        regionBias: "fr",
      elements: {
        postal_code: '#postal_code'
      }
    });
    var cp_inscript = $( "#ville" ).addresspicker({
        regionBias: "fr",
      elements: {
        postal_code: '#cp'
      }
    });
    
});