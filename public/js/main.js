$(function() {
    var addresspickerMap = $( "#dep" ).addresspicker({
        regionBias: "fr",
      elements: {
        postal_code: '#postal_code'
      }
    });
    var cp_inscript = $( "#ville3" ).addresspicker({
        regionBias: "fr",
      elements: {
        postal_code: '#cpi3'
      }
    });
    
});