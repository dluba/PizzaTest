$(document).ready(function() {

    $('#orderForm').on('submit', function(e) {
        e.preventDefault();
        const formData = $(this).serialize();

        $.ajax({
            url: '/index.php?action=order',
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response) {
                const data = response.data;
                $('#orderDetails').text(`Пицца: ${data.pizza}, Размер: ${data.size}, Соус: ${data.sauce}`);
                $('#totalPrice').text(`Итоговая сумма: ${data.total_byn} BYN`);
                $('#receiptModal').css('display', 'block');
            },
        });
    });

    $('#closeModal').on('click', function() {
        $('#receiptModal').css('display', 'none');
    });

    $('#receiptModal').on('click', function(e) {
        if (e.target === this) {
            $('#receiptModal').css('display', 'none');
        }
    });
    
});