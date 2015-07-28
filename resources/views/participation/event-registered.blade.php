@extends ('layouts.main')

@section ('content')
    @parent

    <h1 class="page-header">Event Registered</h1>
    <div class="col-sm-8">
        <div class="row">
            @if($eventLead <> $eventPoster)
                <h4>Thank you <strong>{{$eventPoster}}</strong>!</h4>
                <h4>The Event of <strong>{{$eventLead}}</strong>: <strong>{{$eventName}}</strong> has been successfully registered!</h4>
            @else
                <h4>Thank you <strong>{{$eventPoster}}</strong>!</h4>
                <h4>Your Event <strong>{{$eventName}}</strong> has been successfully registered!</h4>
            @endif
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group" >
                    <label for="papURL" class="control-label">Link this to your teammates:</label>
                            <div class="input-group">
                              <input type="text" class="form-control" value={{$papURL}} onclick="this.select()" id="papURL">
                                  <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button" id="papBtn">Copy</button>
                                  </span>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section ('customScripts')
    <script type="text/javascript" src="{{URL::asset('assets/js/jquery.zclip.js')}}"></script>
    <script>
        /*$(document).ready(function(){

         $('button#papBtn').zclip({
         path:'/assets/js/ZeroClipboard.swf',
         copy:$('input#papURL').val()
         });

         // The link with ID "copy-description" will copy
         // the text of the paragraph with ID "description"




         // The link with ID "copy-dynamic" will copy the current value
         // of a dynamically changing input with the ID "dynamic"

         });*/

        
        $(document).ready(function(){

            $("button#papBtn").zclip({
                path:'/assets/js/ZeroClipboard.swf',
                copy:$('input#papURL').val(),
                beforeCopy:function(){

                },
                afterCopy:function(){
                    $('button#papBtn').replaceWith('<button class="btn btn-success type="button" id="papBtn">Copied!</button>')
                    //$('input#papURL data-placement="bottom" title="Tooltip on bottom"');
                    $(this).next('.check').show();
                }
            });

        });
    </script>
@endsection

data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom"