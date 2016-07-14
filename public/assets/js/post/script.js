$('document').ready(function() {
    $('.table').DataTable();
    $('.datetimepicker').datetimepicker({
        defaultDate: moment().format('YYYY-MM-DD'),
        format: 'YYYY-DD-MM'
    });
});
