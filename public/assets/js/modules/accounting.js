$(function(){
    /////// MODAL ///////
    //Show Modal on click
    $('#manageAccClassBtn').click (function(evt){
        $('#manageAccClassModal').modal('show');
    })

    $('#newClassBtn').click (function(evt){
        $('#modifyClassForm').hide();
        $('#deleteClassForm').hide();
        $('#newClassForm').show();
    })
    $('#modifyClassBtn').click (function(evt){
        $('#newClassForm').hide();
        $('#deleteClassForm').hide();
        $('#modifyClassForm').show();
    })
    $('#deleteClassBtn').click (function(evt){
        $('#newClassForm').hide();
        $('#modifyClassForm').hide();
        $('#deleteClassForm').show();
    })





    //Amount Operator Button Click Events
    $('#amountButton').click(function(evt){

        $('#amountButton').toggleClass('btn-success btn-danger');
        var oppValue = $('#amountOperator').val();
        if (oppValue =='plus') {
            $('#amountOperator').replaceWith('<input id="amountOperator" name="amountOperator" value="minus" hidden>');
        }else{
            if (oppValue == 'minus'){
                $('#amountOperator').replaceWith('<input id="amountOperator" name="amountOperator" value="plus" hidden>');
            }
        }
        $('#amountBtnGlyph').toggleClass('glyphicon-plus glyphicon-minus');
    })


////////////// Morris Charts /////////////

    var LCGenData = LCGenDataWeek;
    $("#LCgeneralWeek").click(function(evt){
        $('#acc-lineChart-gen').empty();
        $('#LCGenTitleTime').replaceWith('<small id="LCGenTitleTime">This Week</small>');
        LCGenData = LCGenDataWeek;
        Morris.Line({
                element: 'acc-lineChart-gen',
                data: LCGenData,
                xkey: 'date',
                ykeys: ['total'],
                labels: 'Total'
            }
        )
    })
    $("#LCgeneralMonth").click(function(evt){
        $('#acc-lineChart-gen').empty();
        $('#LCGenTitleTime').replaceWith('<small id="LCGenTitleTime">This Month</small>');
        LCGenData = LCGenDataMonth;
        Morris.Line({
                element: 'acc-lineChart-gen',
                data: LCGenData,
                xkey: 'date',
                ykeys: ['total'],
                labels: 'Total'
            }
        )
    })
    $("#LCgeneralYear").click(function(evt){
        $('#acc-lineChart-gen').empty();
        $('#LCGenTitleTime').replaceWith('<small id="LCGenTitleTime">This Year</small>');
        LCGenData = LCGenDataYear;
        Morris.Line({
                element: 'acc-lineChart-gen',
                data: LCGenData,
                xkey: 'date',
                ykeys: ['total'],
                labels: 'Total'
            }
        )
    })
    $("#LCgeneralAll").click(function(evt){
        $('#acc-lineChart-gen').empty();
        $('#LCGenTitleTime').replaceWith('<small id="LCGenTitleTime">All Time</small>');
        LCGenData = LCGenDataAll;
        Morris.Line({
                element: 'acc-lineChart-gen',
                data: LCGenData,
                xkey: 'date',
                ykeys: ['total'],
                labels: 'Total'
            }
        )
    })

    new Morris.Line({
            element: 'acc-lineChart-gen',
            data: LCGenData,
            xkey: 'date',
            ykeys: ['total'],
            labels: 'Total'
        }
    )

})




