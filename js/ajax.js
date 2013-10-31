$(document).ready(function() {
    $('#btn_insert').click(function() {
        // Grab input data
        var name = $('#name').val();
        var email = $('#email').val();
        
        // Set status text in "Loading..."
        $('#status_text').text('Loading...');
        // Disable button
        $('#btn_insert').attr('disable', 'disable');
        
        // Put data in table
        $.post('php/settings.php', { name: name, email: email }, function(data) {
            $('#status_text').text(data);
            $('#btn_insert').removeAttr('disable');
        });
    });
});