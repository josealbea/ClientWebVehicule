var options = {
   types: ['geocode'],
   componentRestrictions: {country: 'fr'}
};
var input = document.getElementById('dep');
autocomplete = new google.maps.places.Autocomplete(input, options);