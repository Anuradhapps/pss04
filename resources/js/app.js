import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

$(document).ready(function() {
    $('#form-common-data').on('submit', function(e) {
        e.preventDefault(); // Prevent default form submission
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(response) {
                // Show the pest data form after successful common data submission
                $('#common-data-form').hide();
                $('#pest-data-form').removeClass('hidden');
            },
            error: function(error) {
                console.error('Error submitting common data:', error);
            }
        });
    });

    // Example of how you might auto-fill latitude and longitude
    function updateLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                $('#latitude').val(position.coords.latitude);
                $('#longitude').val(position.coords.longitude);
            });
        }
    }

    updateLocation();



});
