var mData = JSON.parse( dataSet );

$(document).ready(function() {
    //DataTables
    $('#eventsTbl').DataTable({
        responsive: true,
        searching: false,
        paging: false,
        data: mData,
        columns: [
            {
                title: "Lead",
                data: "leadName",
                type: "accent-neutralise",
                targets: 0
            }, {
                title: "Name",
                data: "eventName"
            }, {
                title: "Date",
                data: "eventDate"
            }, {
                title: "Type",
                data: "eventType"
            }, {
                title: "Event Link",
                data: "eventURL",
                "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                    $(nTd).html("<a href='" + oData.eventURL + "'>Participation link</a>");
                }
            }, {
                title: "Comments",
                data: "eventComment"
            }, {
                data: null,
                    "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                        $(nTd).html("<button class='btn btn-default btn-xs' value='"+ oData.id +"' id='mdfBtn" + oData.id + "' data-title='"+ oData.eventName +"' data-eventID='"+ oData.id +"' data-action='Modify' data-toggle='modal' data-target='#eventModal'>Modify</button>" +
                            "<button style='margin-left: 5px' class='btn btn-default btn-xs' value='"+ oData.id +"'id='delBtn" + oData.id + "' data-title='"+ oData.eventName +"' data-eventID='"+ oData.id +"' data-action='Delete' data-toggle='modal' data-target='#eventModal'>Delete</button>");
                    }
            }
        ]

    });

    // Modal
    $('#eventModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var eventName = button.data('title');
        var eventId = button.val();
        var action = button.data('action');
        var modal = $(this);

        modal.find('.modal-title').text(action +" "+ eventName);

        if(action === "Modify"){
            $('#modifyForm').show();
            $('#modifiedEventSelect').val(eventName);
            $('#deleteForm').hide();

        }else{
            $('#modifyForm').hide();
            $('#deletedEventSelect').val(eventName);
            $('#deleteForm').show();
        }
    // Modify form URL
        $('#modifySubmitBtn').click(function() {
            $('#modifyForm').attr('action', function(){
                return this.action + "/" + eventId;
            });
        });
        $('#deleteSubmitBtn').click(function() {
            $('#deleteForm').attr('action', function(){
                return this.action + "/" + eventId;
            });
        });
    })
});