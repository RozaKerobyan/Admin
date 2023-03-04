document.addEventListener('DOMContentLoaded', function() {
  var productType = document.getElementById('ProductType');
  var typeSpecificAttributes = document.getElementById('type-specific-attributes');

  productType.addEventListener('change', function() {
    var selectedOption = productType.value;

    typeSpecificAttributes.innerHTML = '';

    if (selectedOption === 'typesw') {
    } else if (selectedOption === 'dvd') {
      typeSpecificAttributes.innerHTML += '<label for="size">Size (in MB) </label>';
      typeSpecificAttributes.innerHTML += '<input type="number" id="size" name="size">';
    } else if (selectedOption === 'book') {
      typeSpecificAttributes.innerHTML += '<label for="weight">Weight (in Kg) </label>';
      typeSpecificAttributes.innerHTML += '<input type="number" id="weight" name="weight">';
    } else if (selectedOption === 'furniture') {
      typeSpecificAttributes.innerHTML += '<label for="height">Height (in cm) </label>';
      typeSpecificAttributes.innerHTML += '<input type="number" id="height" name="height"><br><br>';
      typeSpecificAttributes.innerHTML += '<label for="width">Width (in cm) </label>';
      typeSpecificAttributes.innerHTML += '<input type="number" id="width" name="width"><br><br>';
      typeSpecificAttributes.innerHTML += '<label for="length">Length (in cm) </label>';
      typeSpecificAttributes.innerHTML += '<input type="number" id="length" name="length">';
    }
  });
});








