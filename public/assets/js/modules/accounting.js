$(function(){
    //Destroy New Class button tooltip on click
    $('#addNewClassBtn').click (function(evt){
        $('#newAccClassModal').modal('show');
    })

    //Add Class List Placeholder
    $('#addNewClassList').prepend($('<option selected="selected" value="0" disabled style="color: #8a9698">Select Class</option>')).attr('selectedIndex',0);

    //Amount Button Click Events
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




